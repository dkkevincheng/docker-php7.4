<?php
//连接本地的 Redis 服务
$redis = new Redis();
$redis->connect('redis', 6379);
$redis->auth('123456');
echo "The connection is successfu. 
";

//查看服务是否运行
echo "Server is running: " . $redis->ping();