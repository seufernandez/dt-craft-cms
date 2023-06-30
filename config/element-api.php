<?php
use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        'api/entries.json' => function() {
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'blog'],
                'transformer' => function(Entry $entry) {
                    return [
                      'title' => $entry->title,
                      'url' => UrlHelper::url("entries/{$entry->slug}"),
                      'contentTable' => $entry->contentTable ,
                        
                    ];
                },
            ];
        },
    ]
];
