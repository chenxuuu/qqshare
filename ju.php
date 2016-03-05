<!DOCTYPE html>
 
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<meta name="format-detection" content="telephone=no">
<?php
$title=base64_decode($_GET['title']);
 
$text=base64_decode($_GET['text']);

$url='http://t.cn/'.$_GET['url'];
 
if($title=='')
{
	if($text=='')
	{
		echo '<SCRIPT language=JavaScript>alert("参数错误！（来自自定义QQ分享工具）")</SCRIPT>';
		echo '<meta http-equiv="refresh" content="0.1;url=http://www.chenxublog.com/2016/02/15/diy-qq-share.html">';
		return 0;
	}
}

function strreplace($str){
	$str = str_replace(chr(10).chr(13),"<br>",$str);
	$str = str_replace('<',"&#60;",$str);
	$str = str_replace('"',"“",$str);
	return $str;
}
$title=strreplace($title);
$text=strreplace($text);
?>
<meta name="description" itemprop="description" content="<?php echo $text;?>">
<meta itemprop="name" content="<?php echo $title;?>">
<script>var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?8046c22ce63d834b486ba6adf51571f0";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();</script>
<script type="text/javascript" src="http://qqshare.papapoi.com/zDrag.js"></script>
<script type="text/javascript" src="http://qqshare.papapoi.com/zDialognew.js"></script>
</head>
<body>



<div class="title"><?php echo $title;?></div>
<div class="red-message"><?php echo $text;?></div><br>
<br>
本页面被访问了<img src="http://i13.tietuku.com/e93874aa92295baf.gif" id="display_count"><script type="text/javascript">function loadImage(id,src,callback){var imgloader= new window.Image();imgloader.onload =function(evt){if(typeof(imgloader.readyState)=='undefined'){imgloader.readyState = 'undefined';}if((imgloader.readyState=='complete'||imgloader.readyState=="loaded")||imgloader.complete){callback({'msg':'ok','src':src,'id':id});}else{imgloader.onreadystatechange(evt);}};imgloader.onerror = function(evt){callback({'msg':'error','id':id});};imgloader.src=src;}var loadResult = function(data){data=data||{};if(typeof(data.msg)!='undefined'){if(data.msg=='ok'){document.getElementById(''+data.id).src=data.src;}else{document.getElementById(''+data.id).src='http://i13.tietuku.com/a7100d5168d3c7e6.png';}}};var surl = 'http://cc.amazingcounters.com/counter.php?i=3200694&c=9602395';loadImage('display_count',surl,loadResult);</script>次。<br>
本页面由<a href="http://qqshare.papapoi.com/" target="_blank">自定义QQ分享工具</a>生成<br><a href="http://qqshare.papapoi.com/" target="_blank">我也要制作自己的QQ分享</a><br><br>本站由<a href="http://www.chenxublog.com"target="_blank">晨旭</a>提供支持<br><a href="http://www.chenxublog.com/2016/02/15/diy-qq-share.html"target="_blank">点我提交建议和汇报问题</a><br>
<img src='http://i12.tietuku.com/683e05e6796e2ed5.png'>
<div class="ds-thread"data-thread-key="1"data-title="自定义QQ分享生成器"data-url="http://qqshare.papapoi.com/"></div><script type="text/rocketscript">var duoshuoQuery={short_name:"qqsharediy"};(function(){var ds=document.createElement('script');ds.type='text/javascript';ds.async=true;ds.src=(document.location.protocol=='https:'?'https:':'http:')+'//static.duoshuo.com/embed.js';ds.charset='UTF-8';(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(ds)})();</script>
<script>
	var diag = new Dialog();
	diag.Modal = false;
	diag.Width = 1080;
	diag.Height = 720;
	diag.Left = 400;
	diag.Title = "制作分享链接的人同时分享了这个网站";
	diag.URL = "<?php echo $url;?>";
	diag.show();
</script>

</body>
</html>