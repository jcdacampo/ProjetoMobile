<?php
return [
    'controllers' => [
        'factories' => [
            'msys\\V1\\Rpc\\Service\\Controller' => \msys\V1\Rpc\Service\ServiceControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'msys.rpc.service' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/service',
                    'defaults' => [
                        'controller' => 'msys\\V1\\Rpc\\Service\\Controller',
                        'action' => 'service',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'msys.rpc.service',
        ],
    ],
    'zf-rpc' => [
        'msys\\V1\\Rpc\\Service\\Controller' => [
            'service_name' => 'Service',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'msys.rpc.service',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'msys\\V1\\Rpc\\Service\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'msys\\V1\\Rpc\\Service\\Controller' => [
                0 => 'application/vnd.msys.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'msys\\V1\\Rpc\\Service\\Controller' => [
                0 => 'application/vnd.msys.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'msys\\V1\\Rpc\\Service\\Controller' => [
            'input_filter' => 'msys\\V1\\Rpc\\Service\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'msys\\V1\\Rpc\\Service\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'Descricao',
                'description' => 'Descrição do produto',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'Quantidade',
                'description' => 'Retornará quantidade de cada produto.',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ValorUnitario',
                'description' => 'Campo nos retornará o valor individual de cada produto.',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ValorTotal',
                'description' => 'Esse campo deverá pegar a quantidade vezes o valor unitário nos devolvendo o valor total do produto.',
            ],
        ],
    ],
];
