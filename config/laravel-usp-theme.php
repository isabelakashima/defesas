
<?php

$submenu1 =  [
    [
        'text' => '<i class="fas fa-plus-square"></i> Agendar Defesa',
        'url'  => '/agendamentos/create',
    ],
    [
        'text' => '<i class="fas fa-list-alt"></i> Listar Defesas',
        'url'  => '/agendamentos',
    ],
];

$submenu2 =  [
    [
        'text' => '<i class="fas fa-plus-square"></i> Cadastrar Docente',
        'url'  => '/docentes/create',
    ],
    [
        'text' => '<i class="fas fa-list-alt"></i> Listar Docentes',
        'url'  => '/docentes',
    ],
];

$right_menu = [
    [
        'text' => '<i class="fas fa-cog"></i>',
        'title' => 'Configurações',
        'target' => '_blank',
        'url' => config('app.url') . '/configs',
        'align' => 'right',
    ],
];

return [
    'title' => config('app.name'),
    'skin' => env('USP_THEME_SKIN', 'uspdev'),
    'app_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => [
        [
            'text'    => '<i class="fas fa-calendar-alt"></i> Agendamentos',
            'submenu' => $submenu1,
            'can' => 'admin',
        ],
        [
            'text'    => '<i class="fas fa-chalkboard-teacher"></i> Docentes',
            'submenu' => $submenu2,
            'can' => 'admin',
        ],
    ],
    'right_menu' => $right_menu,
];
