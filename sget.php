<?php

$urlget=$_GET['url']; 

if($urlget=='')
{
	echo '';
	return 0;
}
if(!strstr($urlget, 'http://'))
{
	if(!strstr($urlget, 'https://'))
	{
		$urlget='http://'.$urlget;
	}
}

function shorturl($long_url){
	$apiKey='23333333';//要修改这里的key再测试哦
	$apiUrl='http://api.t.sina.com.cn/short_url/shorten.json?source='.$apiKey.'&url_long='.$long_url;
	$response = file_get_contents($apiUrl);
	$json = json_decode($response);
	return $json[0]->url_short;
}

$urlget=shorturl($urlget);

if($urlget=='')
{
	echo '';
	return 0;
}
echo str_replace('http://t.cn/','',$urlget);
?>