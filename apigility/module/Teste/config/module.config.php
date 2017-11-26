<?php
return [
    'controllers' => [
        'factories' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => \Teste\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'teste.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'Teste\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'teste.rpc.ping',
        ],
    ],
    'zf-rpc' => [
        'Teste\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'Ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'teste.rpc.ping',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'Teste\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'Teste\\V1\\Rpc\\Ping\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Teste\\V1\\Rpc\\Ping\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'Nome',
                'description' => 'ACK',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'Descricao',
                'description' => 'Reconhecer o pedido com um carimbo de data / hora',
            ],
        ],
    ],
];
