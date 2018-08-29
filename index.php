<?php
require_once('./sphinxapi.php');
$cl = new SphinxClient();
//链接sphinx服务，ip、端口
$cl->SetServer('127.0.0.1',9312);
//设置全文查询的匹配模式(SPH_MATCH_ALL:匹配所有查询词)
$cl->SetMatchMode(SPH_MATCH_ALL);
//设置结果返回数组
$cl->SetArrayResult(true);
//执行查询第一个参数搜索内容，第二个参数搜索的索引名字（*表示所有）
$res = $cl->Query('test',"*");
echo "<pre>";
var_dump($res);
echo "</pre>";