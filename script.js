'use strict';


function BotUsers(inputSelector, tableSelector, template, options) {
    var that = this;

    // Дефолтовые настройки
    this.settings = {
        "preloaderSelector": '.js-input-preloader, .js-table-preloader'
    };
    $.extend(this.settings, options || {});


    this.$input = $(inputSelector); 
    this.$table = $(tableSelector); 
    this.template = template;       
    this.$preloader = $(this.settings.preloaderSelector);
    this.oldInputValue = '';

    
    this.syncObject = {
        "status": 'ready'
    };

    
    setInterval(function() {
        that.watchInputChanges.call(that);
    }, 200);

    
    setInterval(function() {
        that.watchScrollChanges.call(that);
    }, 200);
};


BotUsers.prototype = {
    constructor: BotUsers,

    
    watchInputChanges: function() {
        var that = this,
            inputValue = this.$input.val();

        // Если данные в строке ввода не изменились, то новый запрос к API не инициируем
        if (this.syncObject.status !== 'ready' || inputValue == this.oldInputValue)
            return;

        // Запоминаем текущее значение на будующее
        this.oldInputValue = inputValue;

        // Получение параметров для запроса
        var requestParams = this.prepareRequestParams();

        this.getUsers(requestParams).done(function(data) {
            that.clearTable();

            if (data.result.length > 0) {
                that.addUsersToTable(data.result);
            }
        });
    },

    
    prepareRequestParams: function() {
        var name = this.$input.val(),
            result = {};

        result = { 'searchTerm': name };

        return result;
    },

    
    watchScrollChanges: function() {
        var that = this,
            inputValue = this.$input.val();

       
        if (this.syncObject.status !== 'ready' || inputValue === '')
            return;

        var scrollHeight = $(document).height(),
            scrollPosition = $(window).height() + $(window).scrollTop();

        // Получение параметров для запроса
        var requestParams = this.prepareRequestParams();

        if ( (scrollHeight - scrollPosition) / scrollHeight === 0 ) {
            this.getUsers(requestParams).done(function(data) {

                if (data.result.length > 0) {
                    that.addUsersToTable(data.result);
                }
            });
        }
    },


    getUsers: function(requestParams) {
        var that = this;

        var result = $.ajax({
            method: 'GET',
            url: '/api/users',
            data: requestParams,
            beforeSend: function() {
                that.syncObject.status = 'inProgress';
                that.showPreloader();
            }
        }).always(function() {
            that.hidePreloader();
            that.syncObject.status = 'ready';
        }).fail(function(jqXHR, exception) {
            console.log(exception);
        });

        return result;
    },

    
    clearTable: function() {
        this.$table.find('tbody').empty();
    },

    
    addUsersToTable: function(tableData) {
        var template = _.template(this.template);
        var compiledTemplate = template({users: tableData});

        this.$table.find('tbody:last').append(compiledTemplate);
    },

    
    showPreloader: function() {
        this.$preloader.show();
    },

    
    hidePreloader: function() {
        this.$preloader.hide();
    }
};


$(function() {
    var input = '.js-search-input',
        table = '.js-table',
        template = $('.js-table-template').html();

    var botUsers = new BotUsers(input, table, template);
});
