<?php
return [
    'title' => 'Users',
    'single' => 'user',
    'model' => 'App\User',
    /**
     * The display columns
     */
    'columns' => [
        'id' => [
            'title' => '#'
        ],
        'name' => [
            'title' => 'Name'
        ],
        'email' => [
            'title' => 'Email'
        ],
        'is_admin' => [
            'title' => 'Email'
        ],
    ],
    /**
     * The editable fields
     */
    'edit_fields' => [
        'name' => [
            'type' => 'text',
            'title' => 'Name'
        ],
        'email' => [
            'type' => 'text',
            'title' => 'Email'
        ],
        'password' => [
            'type' => 'password',
            'title' => 'Password',
        ],
        'is_admin' => [
            'type' => 'text',
            'title' => 'Is admin'
        ],
    ],
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => [
        'id',
        'name' => [
            'title' => 'Name',
        ],
        'email' => [
            'title' => 'Email',
        ],
    ],
];