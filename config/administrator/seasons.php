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
            'title' => 'Date Start'
        ],
        'date_end' => [
            'title' => 'Date End'
        ],
        'serial_id' => [
            'title' => 'Serial'
        ],
        'number' => [
            'title' => 'Number'
        ],
    ],
    /**
     * The editable fields
     */
    'edit_fields' => [
        'number' => [
            'type' => 'text',
            'title' => 'Number',
        ],
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