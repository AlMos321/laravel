<?php
return [
    'title' => 'Season',
    'single' => 'Season',
    'model' => 'App\Season',
    /**
     * The display columns
     */
    'columns' => [
        'id' => [
            'title' => '#'
        ],
        'count_epizdes' => [
            'title' => 'Epizodes'
        ],
        'country' => [
            'title' => 'Country'
        ],
        'description' => [
            'title' => 'Description'
        ],
        'date_start' => [
            'title' => 'Production'
        ],
        'date_end' => [
            'title' => 'Producer'
        ],
        'serial_id' => [
            'title' => 'Serial'
        ],
    ],
    /**
     * The editable fields
     */
    'edit_fields' => [
        'country' => [
            'type' => 'text',
            'title' => 'Country'
        ],
        'count_epizdes' => [
            'type' => 'text',
            'title' => 'Epizodes',
        ],
        'date_start' => [
            'type' => 'date',
            'title' => 'Start date',
        ],
        'date_end' => [
            'type' => 'date',
            'title' => 'End Date',
        ],
        'description' => [
            'type' => 'text',
            'title' => 'Description',
        ],
        'serial_id' => [
            'type' => 'text',
            'title' => 'Serial',
        ],
    ],
    /**
     * The filter fields
     *
     * @type array
     */
    'filters' => [
        'id',
        'date_start' => [
            'title' => 'Start data',
        ],
    ],
];