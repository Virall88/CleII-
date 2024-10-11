<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/themes/gasl/blueprints/standard.yaml',
    'modified' => 1728677446,
    'size' => 995,
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
                                            'type' => 'select',
                                            'label' => 'Seleziona Template',
                                            'default' => 'default',
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
