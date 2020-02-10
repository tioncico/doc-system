<?php
return [
    'SERVER_NAME' => "EasySwoole",
    'MAIN_SERVER' => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT'           => 9501,
        'SERVER_TYPE'    => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE'      => SWOOLE_TCP,
        'RUN_MODEL'      => SWOOLE_PROCESS,
        'SETTING'        => [
            'worker_num'    => 8,
            'reload_async'  => true,
            'max_wait_time' => 3
        ],
        'TASK'           => [
            'workerNum'     => 4,
            'maxRunningNum' => 128,
            'timeout'       => 15
        ]
    ],
    'TEMP_DIR'    => '/tmp/es',
    'LOG_DIR'     => null,
    "DOC"         => [
        'PATH'    => EASYSWOOLE_ROOT . '/Doc',
        'ROOT'    => EASYSWOOLE_ROOT . '/Doc/Cn',
        'DEFAULT' => true,
        'domain'  => 'www.easyswoole.com'
    ]
];
