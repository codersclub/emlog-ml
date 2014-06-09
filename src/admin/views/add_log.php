<?php if(!defined('EMLOG_ROOT')) {exit('error!');}?>
<script charset="utf-8" src="./editor/kindeditor.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<!--vot--><script charset="utf-8" src="./editor/lang/<? echo str_replace('-','_', EMLOG_LANGUAGE); ?>.js?v=<?php echo Option::EMLOG_VERSION; ?>"></script>
<div class=containertitle><b><? echo $lang['post_add'];?></b><span id="msg_2"></span></div>
<div id="msg"></div>
<form action="save_log.php?action=add" method="post" enctype="multipart/form-data" id="addlog" name="addlog">
<div id="post">
<div>
    <label for="title" id="title_label"><? echo $lang['article_title']; ?></label>
    <input type="text" maxlength="200" name="title" id="title"/>
</div>
<div id="post_bar">
	<div>
	    <span onclick="displayToggle('FrameUpload', 0);autosave(1);" class="show_advset"><? echo $lang['upload_insert']; ?></span>
	    <?php doAction('adm_writelog_head'); ?>
	    <span id="asmsg"></span>
	    <input type="hidden" name="as_logid" id="as_logid" value="-1">
    </div>
    <div id="FrameUpload" style="display: none;">
        <iframe width="860" height="330" frameborder="0" src="attachment.php?action=selectFile"></iframe>
    </div>
</div>
<div>
    <textarea id="content" name="content" style="width:845px; height:460px;"></textarea>
</div>
<div style="margin:10px 0px 5px 0px;">
<!--vot--><label for="tag" id="tag_label"><?=lang('post_tags_separated')?></label>
    <input name="tag" id="tag" maxlength="200"/>
<!--vot--> <span style="color:#2A9DDB;cursor:pointer;margin-right: 40px;"><a href="javascript:displayToggle('tagbox', 0);"><?=lang('tags_have')?></a></span>
    <select name="sort" id="sort" style="width:130px;">
        <option value="-1"><? echo $lang['category_choose']; ?></option>
        <?php 
        foreach($sorts as $key=>$value):
        if ($value['pid'] != 0) {
            continue;
        }
        ?>
        <option value="<?php echo $value['sid']; ?>"><?php echo $value['sortname']; ?></option>
        <?php
            $children = $value['children'];
            foreach ($children as $key):
            $value = $sorts[$key];
        ?>
        <option value="<?php echo $value['sid']; ?>">&nbsp; &nbsp; &nbsp; <?php echo $value['sortname']; ?></option>
        <?php
        endforeach;
        endforeach;
        ?>
    </select>
    <? echo $lang['posted_on']; ?>: <input maxlength="200" style="width:139px;" name="postdate" id="postdate" value="<?php echo $postDate; ?>"/>
    <input name="date" id="date" type="hidden" value="" >
</div>
<div id="tagbox">
<?php
    if ($tags) {
        foreach ($tags as $val){
            echo " <a href=\"javascript: insertTag('{$val['tagname']}','tag');\">{$val['tagname']}</a> ";
        }
    } else {
/*vot*/ echo lang('tag_not_set');
    }
?>
</div>
<div class="show_advset" onclick="displayToggle('advset', 1);"><? echo $lang['advanced_options']; ?></div>
<div id="advset">
<div><? echo $lang['article_summary']; ?>:</div>
<div><textarea id="excerpt" name="excerpt" style="width:845px; height:260px;"></textarea></div>
<div><span id="alias_msg_hook"></span><? echo $lang['article_link_alias']; ?>: (<? echo $lang['link_alias_need_to']; ?><a href="./seo.php" target="_blank"><? echo $lang['link_alias_enable']; ?></a>)<span id="alias_msg_hook"></span></div>
<div><input name="alias" id="alias" /></div>
<div style="margin-top:3px;">
    <? echo $lang['post_password']; ?>: <input type="text" value="" name="password" id="password" style="width:80px;" />
    <span id="post_options">
        <input type="checkbox" value="y" name="top" id="top" />
        <label for="top"><? echo $lang['post_pin']; ?></label>
		<input type="checkbox" value="y" name="sortop" id="sortop" />
        <label for="sortop"><? echo $lang['category_top']; ?></label>
        <input type="checkbox" value="y" name="allow_remark" id="allow_remark" checked="checked" />
        <label for="allow_remark"><? echo $lang['comments_allow']; ?></label>
    </span>
</div>
</div>
<div id="post_button">
    <input name="token" id="token" value="<?php echo LoginAuth::genToken(); ?>" type="hidden" />
    <input type="hidden" name="ishide" id="ishide" value="">
    <input type="submit" value="<? echo $lang['post_publish'];?>" onclick="return checkform();" class="button" />
    <input type="hidden" name="author" id="author" value=<?php echo UID; ?> />
    <input type="button" name="savedf" id="savedf" value="<? echo $lang['post_save_draft'];?>" onclick="autosave(2);" class="button" />
</div>
</div>
</form>
<div class=line></div>
<script>
KindEditor.ready(function(K) {
	var editor1 = KindEditor.create('#content', {
	});
	var editor2 = KindEditor.create('#excerpt', {
	});
});
$("#menu_wt").addClass('sidebarsubmenu1');
$("#advset").css('display', $.cookie('em_advset') ? $.cookie('em_advset') : '');
$("#alias").keyup(function(){checkalias();});
$("#title").focus(function(){$("#title_label").hide();});
$("#title").blur(function(){if($("#title").val() == '') {$("#title_label").show();}});
$("#tag").focus(function(){$("#tag_label").hide();});
$("#tag").blur(function(){if($("#tag").val() == '') {$("#tag_label").show();}});
setTimeout("autosave(0)",60000);
</script>