<?
header('Content-Type: application/json; charset=UTF-8');
header('Content-Type: application/json');

$avatarUrl = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI3IDI0IDEwMCAxMDAiIGhlaWdodD0iMTAwcHgiIGlkPSJ1bmtub3duIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9Ii0yNyAyNCAxMDAgMTAwIiB3aWR0aD0iMTAwcHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48Zz48Zz48ZGVmcz48Y2lyY2xlIGN4PSIyMyIgY3k9Ijc0IiBpZD0iY2lyY2xlIiByPSI1MCIvPjwvZGVmcz48dXNlIGZpbGw9IiNGNUVFRTUiIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjY2lyY2xlIi8+PGNsaXBQYXRoIGlkPSJjaXJjbGVfMV8iPjx1c2Ugb3ZlcmZsb3c9InZpc2libGUiIHhsaW5rOmhyZWY9IiNjaXJjbGUiLz48L2NsaXBQYXRoPjxnIGNsaXAtcGF0aD0idXJsKCNjaXJjbGVfMV8pIj48ZGVmcz48cGF0aCBkPSJNMzYsOTUuOWMwLDQsNC43LDUuMiw3LjEsNS44YzcuNiwyLDIyLjgsNS45LDIyLjgsNS45YzMuMiwxLjEsNS43LDMuNSw3LjEsNi42djkuOEgtMjd2LTkuOCAgICAgICBjMS4zLTMuMSwzLjktNS41LDcuMS02LjZjMCwwLDE1LjItMy45LDIyLjgtNS45YzIuNC0wLjYsNy4xLTEuOCw3LjEtNS44YzAtNCwwLTEwLjksMC0xMC45aDI2QzM2LDg1LDM2LDkxLjksMzYsOTUuOXoiIGlkPSJzaG91bGRlcnMiLz48L2RlZnM+PHVzZSBmaWxsPSIjRTZDMTlDIiBvdmVyZmxvdz0idmlzaWJsZSIgeGxpbms6aHJlZj0iI3Nob3VsZGVycyIvPjxjbGlwUGF0aCBpZD0ic2hvdWxkZXJzXzFfIj48dXNlIG92ZXJmbG93PSJ2aXNpYmxlIiB4bGluazpocmVmPSIjc2hvdWxkZXJzIi8+PC9jbGlwUGF0aD48cGF0aCBjbGlwLXBhdGg9InVybCgjc2hvdWxkZXJzXzFfKSIgZD0iTTIzLjIsMzVjMC4xLDAsMC4xLDAsMC4yLDBjMCwwLDAsMCwwLDAgICAgICBjMy4zLDAsOC4yLDAuMiwxMS40LDJjMy4zLDEuOSw3LjMsNS42LDguNSwxMi4xYzIuNCwxMy43LTIuMSwzNS40LTYuMyw0Mi40Yy00LDYuNy05LjgsOS4yLTEzLjUsOS40YzAsMC0wLjEsMC0wLjEsMCAgICAgIGMtMC4xLDAtMC4xLDAtMC4yLDBjLTAuMSwwLTAuMSwwLTAuMiwwYzAsMC0wLjEsMC0wLjEsMGMtMy43LTAuMi05LjUtMi43LTEzLjUtOS40Yy00LjItNy04LjctMjguNy02LjMtNDIuNCAgICAgIGMxLjItNi41LDUuMi0xMC4yLDguNS0xMi4xYzMuMi0xLjgsOC4xLTIsMTEuNC0yYzAsMCwwLDAsMCwwQzIzLjEsMzUsMjMuMSwzNSwyMy4yLDM1TDIzLjIsMzV6IiBmaWxsPSIjRDRCMDhDIiBpZD0iaGVhZC1zaGFkb3ciLz48L2c+PC9nPjxwYXRoIGQ9Ik0yMi42LDQwYzE5LjEsMCwyMC43LDEzLjgsMjAuOCwxNS4xYzEuMSwxMS45LTMsMjguMS02LjgsMzMuN2MtNCw1LjktOS44LDguMS0xMy41LDguMyAgICBjLTAuMiwwLTAuMiwwLTAuMywwYy0wLjEsMC0wLjEsMC0wLjIsMEMxOC44LDk2LjgsMTMsOTQuNiw5LDg4LjdjLTMuOC01LjYtNy45LTIxLjgtNi44LTMzLjhDMi4zLDUzLjcsMy41LDQwLDIyLjYsNDB6IiBmaWxsPSIjRjJDRUE1IiBpZD0iaGVhZCIvPjwvZz48L3N2Zz4=';

$result = [
    'result' => [
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Петров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Иванов',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Сидоров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Петров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Иванов',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Сидоров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Петров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Иванов',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Сидоров',
            'avatarUrl' => $avatarUrl
        ],
        [
            'id' => rand(0, 99999),
            'name' => 'Иван Сидоров',
            'avatarUrl' => $avatarUrl
        ]
    ],
    'nextPageUrl' => '/api/users/',
    'previousPageUrl' => '/api/users/'
];

echo json_encode($result);
