<?php
return array(

    'LANG_SWITCH_ON' => true,   // 开启语言包功能

    'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效

    'LANG_LIST'        => 'zh-cn,zh-tw,en-us,nn-nn,tg-tg,yn-yn', // 允许切换的语言列表 用逗号分隔

    'VAR_LANGUAGE'     => 'l', // 默认语言切换变量

    'DEFAULT_LANG'     =>  'zh-cn', // 默认语言

    
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '47.92.89.230', // 服务器地址
    'DB_NAME'               =>  'dudu',          // 数据库名

    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'rsmysql123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'             =>  array(), // 数据库连接参数
    'DB_DEBUG'              =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
);