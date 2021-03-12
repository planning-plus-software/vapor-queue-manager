<?php

return [
    'enabled' => true,

    'default_queue' => 'oflow-app-staging',

    'table_name' => 'queue_jobs',

    'limits' => [
        'oflow-app-staging' => ['allow' => 1, 'every' => 60, 'funnel' => 1],
        'virtual-queue-1' => ['allow' => 1, 'every' => 60, 'funnel' => 1],
    ]
];
