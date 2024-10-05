<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/themes/gasl/blueprints/standard.yaml',
    'modified' => 1727722483,
    'size' => 997,
    'data' => [
        'title' => 'Pagina Standard',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'unset@' => true
                                        ]
                                    ]
                                ],
                                'column1' => [
                                    'fields' => [
                                        'header.body_classes' => [
                                            'unset@' => true
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
