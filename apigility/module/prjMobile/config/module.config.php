<?php
return [
    'router' => [
        'routes' => [
            'prj-mobile.rest.produtos' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/produtos[/:produtos_id]',
                    'defaults' => [
                        'controller' => 'prjMobile\\V1\\Rest\\Produtos\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'prj-mobile.rest.produtos',
        ],
    ],
    'zf-rest' => [
        'prjMobile\\V1\\Rest\\Produtos\\Controller' => [
            'listener' => 'prjMobile\\V1\\Rest\\Produtos\\ProdutosResource',
            'route_name' => 'prj-mobile.rest.produtos',
            'route_identifier_name' => 'produtos_id',
            'collection_name' => 'produtos',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'DELETE',
                2 => 'PUT',
                3 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \prjMobile\V1\Rest\Produtos\ProdutosEntity::class,
            'collection_class' => \prjMobile\V1\Rest\Produtos\ProdutosCollection::class,
            'service_name' => 'produtos',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'prjMobile\\V1\\Rest\\Produtos\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'prjMobile\\V1\\Rest\\Produtos\\Controller' => [
                0 => 'application/vnd.prj-mobile.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'prjMobile\\V1\\Rest\\Produtos\\Controller' => [
                0 => 'application/vnd.prj-mobile.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \prjMobile\V1\Rest\Produtos\ProdutosEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'prj-mobile.rest.produtos',
                'route_identifier_name' => 'produtos_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \prjMobile\V1\Rest\Produtos\ProdutosCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'prj-mobile.rest.produtos',
                'route_identifier_name' => 'produtos_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'prjMobile\\V1\\Rest\\Produtos\\ProdutosResource' => [
                'adapter_name' => 'ProjetoMobile',
                'table_name' => 'produtos',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'prjMobile\\V1\\Rest\\Produtos\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'prjMobile\\V1\\Rest\\Produtos\\ProdutosResource\\Table',
            ],
        ],
    ],
    'zf-content-validation' => [
        'prjMobile\\V1\\Rest\\Produtos\\Controller' => [
            'input_filter' => 'prjMobile\\V1\\Rest\\Produtos\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'prjMobile\\V1\\Rest\\Produtos\\Validator' => [
            0 => [
                'name' => 'id',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            1 => [
                'name' => 'descricao',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'quantidade',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'valorunit',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'valortotal',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'prjMobile\\V1\\Rest\\Produtos\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
