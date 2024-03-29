<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/system/blueprints/pages/modular.yaml',
    'modified' => 1472475210,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MODULAR',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'options' => [
                                        '@self.modular' => 'Modular Children'
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'PLUGIN_ADMIN.FOLDER',
                                        'title' => 'PLUGIN_ADMIN.TITLE',
                                        'date' => 'PLUGIN_ADMIN.DATE',
                                        'default' => 'PLUGIN_ADMIN.DEFAULT'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'PLUGIN_ADMIN.ASCENDING',
                                        'desc' => 'PLUGIN_ADMIN.DESCENDING'
                                    ]
                                ],
                                'header.process' => [
                                    'type' => 'ignore'
                                ],
                                'content' => [
                                    'type' => 'ignore'
                                ],
                                'uploads' => [
                                    'type' => 'ignore'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
