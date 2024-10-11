<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/themes/gasl/blueprints/portfolio.yaml',
    'modified' => 1728677426,
    'size' => 631,
    'data' => [
        'title' => 'Pagina Portfolio',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'label' => 'Titolo',
                                    'autofocus' => true
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'type' => 'select',
                                            'label' => 'Seleziona Template',
                                            'default' => 'portfolio',
                                            'options' => [
                                                'default' => 'Standard',
                                                'portfolio' => 'Portfolio'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
