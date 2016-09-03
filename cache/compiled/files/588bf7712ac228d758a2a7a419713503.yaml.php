<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/themes/antimatter/blueprints/modular/cards.yaml',
    'modified' => 1472596917,
    'data' => [
        'title' => 'Cards',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'features' => [
                            'type' => 'tab',
                            'title' => 'Cards',
                            'fields' => [
                                'header.cards' => [
                                    'name' => 'cards',
                                    'type' => 'list',
                                    'label' => 'Cards',
                                    'fields' => [
                                        '.header' => [
                                            'type' => 'text',
                                            'label' => 'BrianRox'
                                        ],
                                        '.paragraph' => [
                                            'type' => 'text',
                                            'label' => 'Paragraph'
                                        ],
                                        '.link1' => [
                                            'type' => 'text',
                                            'label' => 'Link 1'
                                        ],
                                        '.link2' => [
                                            'type' => 'text',
                                            'label' => 'Link 2'
                                        ],
                                        '.link3' => [
                                            'type' => 'text',
                                            'label' => 'Link 3'
                                        ],
                                        '.link4' => [
                                            'type' => 'text',
                                            'label' => 'Link 4'
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
