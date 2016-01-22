<?php
return [
    'title' => 'Epizod',
    'single' => 'Epizod',
    'model' => 'App\Epizod',

    /**
     * The display columns
     */
    'columns' => [
        'id' => [
            'title' => '#'
        ],
        'name' => [
            'title' => 'Epizode Name'
        ],
        'description' => [
            'title' => 'Description'
        ],
        'date_start' => [
            'title' => 'Date Start'
        ],
        'images' => [
            'title' => 'Images'
        ],
        'directed' => [
            'title' => 'Directer'
        ],
        'producer' => [
            'title' => 'Producer'
        ],
        'running_time' => [
            'title' => 'Running Time'
        ],
        'season_id' => [
            'title' => 'Season'
        ],
    ],
    /**
     * The editable fields
     */
    'edit_fields' => [
        'name' => [
            'type' => 'text',
            'title' => 'Epizode Name'
        ],
        'description' => [
            'type' => 'text',
            'title' => 'Description'
        ],
        'date_start' => [
            'type' => 'text',
            'title' => 'Date Start'
        ],
        'images' => [
            'type' => 'text',
            'title' => 'Images'
        ],
        'directed' => [
            'type' => 'text',
            'title' => 'Directer'
        ],
        'producer' => [
            'type' => 'text',
            'title' => 'Producer'
        ],
        'running_time' => [
            'type' => 'time',
            'title' => 'Running Time'
        ],
        'season_id' => [
            'type' => 'text',
            'title' => 'Season'
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
        'name' => [
            'title' => 'Epizod Name',
        ],
    ],
];