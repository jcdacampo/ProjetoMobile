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
            'teste.rest.projeto-mobile' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/projeto-mobile[/:projeto_mobile_id]',
                    'defaults' => [
                        'controller' => 'Teste\\V1\\Rest\\ProjetoMobile\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'teste.rpc.ping',
            1 => 'teste.rest.projeto-mobile',
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
            'Teste\\V1\\Rest\\ProjetoMobile\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
            'Teste\\V1\\Rest\\ProjetoMobile\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Teste\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
            ],
            'Teste\\V1\\Rest\\ProjetoMobile\\Controller' => [
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
    'service_manager' => [
        'factories' => [
            \Teste\V1\Rest\ProjetoMobile\ProjetoMobileResource::class => \Teste\V1\Rest\ProjetoMobile\ProjetoMobileResourceFactory::class,
        ],
    ],
    'zf-rest' => [
        'Teste\\V1\\Rest\\ProjetoMobile\\Controller' => [
            'listener' => \Teste\V1\Rest\ProjetoMobile\ProjetoMobileResource::class,
            'route_name' => 'teste.rest.projeto-mobile',
            'route_identifier_name' => 'projeto_mobile_id',
            'collection_name' => 'projeto_mobile',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Teste\V1\Rest\ProjetoMobile\ProjetoMobileEntity::class,
            'collection_class' => \Teste\V1\Rest\ProjetoMobile\ProjetoMobileCollection::class,
            'service_name' => 'ProjetoMobile',
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Teste\V1\Rest\ProjetoMobile\ProjetoMobileEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.projeto-mobile',
                'route_identifier_name' => 'projeto_mobile_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Teste\V1\Rest\ProjetoMobile\ProjetoMobileCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.projeto-mobile',
                'route_identifier_name' => 'projeto_mobile_id',
                'is_collection' => true,
            ],
        ],
    ],
];
