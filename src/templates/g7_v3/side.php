<?php 
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<div id="sidebar">
<div id="line_top"></div><div id="top"></div>
<div id="sidebar_frame">

<ul>
<li class="pagenav"><h2 onclick="showhidediv('blogger')">个人档</h2>
		<ul id="blogger">
		<p><?php echo $photo;?></p>
		<p><b><?php echo $name;?></b> <?php echo $blogger_des;?>
		</ul>
</li>

<li class="categories"><h2 onclick="showhidediv('calendar')">日历</h2>
		<ul>
			<div id="calendar"></div>
		</ul>
</li>
<script>sendinfo('$calendar_url','calendar');</script>

<li><h2 onclick="showhidediv('tag')">标签</h2>
		<ul id="tag">
		<li>
<?php
foreach($tag_cache as $value){
?>
<span style="font-size:<?php echo $value['fontsize'];?>px; height:30px;"><a href="./?action=taglog&tag=<?php echo $value['tagurl'];?>"><?php echo $value['tagname'];?></a></span>&nbsp;
<?php
}?>
		<a href="./index.php?action=tag" title="更多标签" >&gt;&gt;</a>
		</li>
		</ul>
<?php
if($index_twnum>0){
?>
<li><h2 onclick="showhidediv('twitter')">Twitter</h2>
<ul id="twitter">
<?php
$morebt = count($tw_cache)>$index_twnum?"<li id=\"twdate\"><a href=\"javascript:void(0);\" onclick=\"sendinfo('twitter.php?p=2','twitter')\">较早的&raquo;</a></li>":'';
foreach (array_slice($tw_cache,0,$index_twnum) as $value)
{
	$delbt = ISLOGIN === true?"<a href=\"javascript:void(0);\" onclick=\"isdel('{$value['id']}','twitter')\">删除</a>":'';
	$value['date'] = SmartyDate($localdate,$value['date']);
?>
<li> <?php echo $value['content'];?> <?php echo $delbt;?><br><span><?php echo $value['date'];?></span></li>
<?php
}
?>
<?php echo $morebt;?></ul>
<?php
if(ISLOGIN === true)
{
?>
<ul>
<li><a href="javascript:void(0);" onclick="showhidediv('addtw')">我要唠叨</a></li>
<li id='addtw' style="display: none;">
<textarea name="tw" id="tw" style="width:220px;" style="height:50px;"></textarea><br />
<input type="button" onclick="postinfo('./twitter.php?action=add','twitter');" value="提交">
</li>
</ul>
<?php
}
}
if($ismusic){
?>
<li class="some"><h2 onclick="showhidediv('music')">音乐</h2>
<ul id="music">
<?php echo $musicdes;?><object type="application/x-shockwave-flash" data="./images/player.swf?son=$music<?php echo $autoplay;?>&autoreplay=1" width="180" height="20"><param name="movie" value="./images/player.swf?son=$music<?php echo $autoplay;?>&autoreplay=1" /></object>
</p>
</ul>
</li>
<?php
}
?>

<li class="r_comments"><h2 onclick="showhidediv('comm')">评论</h2>
		<ul id="comm">
			<?php
foreach($com_cache as $value){
?>
		<li><?php echo $value['name'];?><br /><a href="<?php echo $value['url'];?>"><?php echo $value['content'];?></a></li>
<?php
}?>
		</ul>
</li>

<li class="archives"><h2 onclick="showhidediv('dang')">存档</h2>
		<ul id="dang">
<?php
foreach($dang_cache as $value){
?>
		<li><a href="<?php echo $value['url'];?>"><?php echo $value['record'];?>(<?php echo $value['lognum'];?>)</a></li>
<?php
}?>	
		</ul>
</li>

<li class="random"><h2 onclick="showhidediv('links')">友情链接</h2>
		<ul id="links">
<?php
foreach($link_cache as $value){
?>     	
		<li><a href="<?php echo $value['url'];?>" title="<?php echo $value['des'];?>" target="_blank"><?php echo $value['link'];?></a></li>
<?php
}?>	
		</ul>
</li>

<li><h2 onclick="showhidediv('goo')">搜索</h2>
		<ul id="goo">
			<li>
				<form name="keyform" method="get" action="index.php">
    <input name="keyword"  type="text" id="s" value="" size="15" maxlength="30" />
	<input name="action" type="hidden" value="search" size="12" />
    <input type="submit" value="Go" id="searchsubmit" onclick="return keyw()" />
   </form>
			</li>
		</ul>
</li>

<li class="statistics"><h2 onclick="showhidediv('sta')">统计</h2>
		<ul id="sta">
		<li>日志数量：<?php echo $sta_cache['lognum'];?></li>
		<li>评论数量：<?php echo $sta_cache['comnum'];?></li>
		<li>引用数量：<?php echo $sta_cache['tbnum'];?></li>
		<li>今日访问：<?php echo $sta_cache['day_view_count'];?></li>
		<li>总访问量：<?php echo $sta_cache['view_count'];?></li>
		</ul>
</li>
<?php
if(ISLOGIN === false){
	$login_code=='y'?
	$ckcode = "验证码:<br />
				<input name=\"imgcode\" type=\"text\"id=\"s2\">&nbsp&nbsp\n
				<img src=\"./lib/C_checkcode.php\" align=\"absmiddle\"></td></tr>\n":
	$ckcode = '';
?> 
<li><h2 onclick="showlogin('loginfm')">登录</h2>
<ul id="loginfm" style="display: none;">
<form name="f" method="post" action="index.php?action=login" id="commentform">
<li>
用户名:<br>
<input name="user" type="text" id="s"><br />
密  码:<br>
<input name="pw" type="password" id="s"><br>
<?php echo $ckcode;?> <br>
<input type="submit" value=" 登录">
</li>
</form>
</ul>
<?php
}?>
<a href="./rss.php"><img src="<?php echo $tpl_dir;?>g7_v3/rss.gif" alt="订阅Rss"/></a>
<?php echo $exarea;?>

</div>
<div id="tail"></div><div id="line_tail"></div>
</div>
<?php
?>