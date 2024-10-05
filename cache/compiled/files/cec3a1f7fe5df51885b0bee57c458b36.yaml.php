<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/config/plugins/admin.yaml',
    'modified' => 1727718151,
    'size' => 2445,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => true,
        'theme' => 'grav',
        'logo_text' => NULL,
        'body_classes' => NULL,
        'content_padding' => true,
        'twofa_enabled' => true,
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets_display' => [
            'dashboard-maintenance' => 'true',
            'dashboard-statistics' => 'true',
            'dashboard-notifications' => 'true',
            'dashboard-feed' => 'true',
            'dashboard-pages' => 'true'
        ],
        'pages' => [
            'show_parents' => 'both',
            'show_modular' => true,
            'parents_levels' => NULL
        ],
        'session' => [
            'timeout' => 1800
        ],
        'edit_mode' => 'normal',
        'frontend_preview_target' => 'inline',
        'show_github_msg' => true,
        'admin_icons' => 'line-awesome',
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'whitelabel' => [
            'quicktray_recompile' => false,
            'codemirror_theme' => 'paper',
            'codemirror_fontsize' => 'md',
            'codemirror_md_font' => 'sans',
            'logo_custom' => [
                
            ],
            'logo_login' => [
                
            ],
            'color_scheme' => [
                'accents' => [
                    'primary-accent' => 'button',
                    'secondary-accent' => 'notice',
                    'tertiary-accent' => 'critical'
                ],
                'colors' => [
                    'logo-bg' => '#323640',
                    'logo-link' => '#FFFFFF',
                    'nav-bg' => '#3D424E',
                    'nav-text' => '#B7B9BD',
                    'nav-link' => '#ffffff',
                    'nav-selected-bg' => '#323640',
                    'nav-selected-link' => '#ffffff',
                    'nav-hover-bg' => '#434753',
                    'nav-hover-link' => '#ffffff',
                    'toolbar-bg' => '#ffffff',
                    'toolbar-text' => '#3D424E',
                    'page-bg' => '#F6F6F6',
                    'page-text' => '#6f7b8a',
                    'page-link' => '#0090D9',
                    'content-bg' => '#ffffff',
                    'content-text' => '#6f7b8a',
                    'content-link' => '#0090D9',
                    'content-link2' => '#da4b46',
                    'content-header' => '#414147',
                    'content-tabs-bg' => '#e6e6e6',
                    'content-tabs-text' => '#808080',
                    'button-bg' => '#0090D9',
                    'button-text' => '#ffffff',
                    'notice-bg' => '#06A599',
                    'notice-text' => '#ffffff',
                    'update-bg' => '#77559D',
                    'update-text' => '#ffffff',
                    'critical-bg' => '#F45857',
                    'critical-text' => '#ffffff',
                    'content-highlight' => '#ffffd7'
                ],
                'name' => NULL
            ],
            'custom_footer' => NULL,
            'custom_css' => NULL,
            'custom_presets' => NULL
        ],
        'hide_page_types' => [
            0 => 'default',
            1 => 'external',
            2 => 'form',
            3 => 'modular',
            4 => 'root',
            5 => 'error',
            6 => 'flex-object'
        ],
        'show_beta_msg' => NULL,
        'hide_modular_page_types' => [
            0 => 'default',
            1 => 'external',
            2 => 'form',
            3 => 'modular',
            4 => 'root',
            5 => 'error',
            6 => 'flex-object'
        ],
        'pagemedia' => [
            'resize_width' => 0,
            'resize_height' => 0,
            'res_min_width' => 0,
            'res_min_height' => 0,
            'res_max_width' => 0,
            'res_max_height' => 0,
            'resize_quality' => 0.8
        ]
    ]
];
