<?php 
$redis = new Redis();
 $redis->connect('redis', 6379);
 echo "Connection to server sucessfully";
 $redis->set("tutorial-name", "Redis tutorial");
 echo "Stored string in redis:: " . $redis->get("tutorial-name");