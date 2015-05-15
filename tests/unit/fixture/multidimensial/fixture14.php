<?php

/**
 * Fixture for
 *  - Multidimensional::testSuccessValidationInNestedArrayWithTwoArrays
 */

$schema = [
    'root' => [
        'name' => [
            '_type' => 'required_array',
            'en' => [
                '_type' => 'required_string'
            ],
            'ru' => [
                '_type' => 'required_string'
            ],
            'comments' => [
                '_type' => 'nested_array',
                'comment' => [
                    '_type' => 'required_string'
                ]
            ]
            
        ]
    ]
];

$arr = [
    'name' => [
        'en' => 'Serkin Alexander',
        'ru' => 'Серкин Александр',
        'comments' => [
            [
                'comment' => 'Comment'                
            ],
            [
                'comment' => 'Comment'                
            ],
        ],
    ]
];
