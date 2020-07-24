<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The Application's roles
    |--------------------------------------------------------------------------
    |
    | Here you can define the different roles fo this application. A role
    | has permissions which dictate what action a user can accomplish
    | upon a certain resource.
    |
    */

    'roles' => [
        'administrator' => [
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => [
                'create-parent' => true,
            ],
        ],
        'parent' => [
            'name' => 'Parent',
            'slug' => 'parent',
            'permissions' => [
                'lock-location' => true,
            ],
        ],
        'bus-operator' => [
            'name' => 'Bus Operator',
            'slug' => 'bus-operator',
            'permissions' => [
                'send-message' => true,
            ],
        ],
    ],
];
