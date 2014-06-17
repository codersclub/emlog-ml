<?php if(!defined('EMLOG_ROOT')) {exit('error!');} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  dir="ltr" lang="<?php echo EMLOG_LANGUAGE; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>upload</title>
<link href="./views/css/css-att.css?v=<?php echo Option::EMLOG_VERSION; ?>" type="text/css" rel="stylesheet">
<script>
function uploadfile(){
	var as_logid = parent.document.getElementById('as_logid').value
	document.upload.action = "attachment.php?action=upload&logid="+as_logid;
	document.upload.submit();
}
function showupload(multi){
	var as_logid = parent.document.getElementById('as_logid').value
	window.location.href="attachment.php?action=selectFile&logid="+as_logid+"&multi="+multi;	
}
function showattlib(){
	var as_logid = parent.document.getElementById('as_logid').value
	window.location.href="attachment.php?action=attlib&logid="+as_logid;	
}
function addattachfrom() {
	var newnode = document.getElementById('attachbodyhidden').firstChild.cloneNode(true);
	document.getElementById('attachbody').appendChild(newnode);
}
function removeattachfrom() {
	document.getElementById('attachbody').childNodes.length > 1 && document.getElementById('attachbody').lastChild ? document.getElementById('attachbody').removeChild(document.getElementById('attachbody').lastChild) : 0;
}
</script>
<body>
<div id="media-upload-header">
<!--vot--><span id="curtab"><a href="javascript:showupload(0);"><?=lang('attachment_upload')?></a></span>
<!--vot--><span><a href="javascript:showupload(1);"><?=lang('bulk_upload')?></a></span>
	<span><a href="javascript:showattlib();"><?=lang('attachment_library')?> (<?php echo $attachnum; ?>)</a></span>
</div>
<form enctype="multipart/form-data" method="post" name="upload" action="">
<div id="media-upload-body">
<!--vot--><p>(<?=lang('attach_max_size')?>: <?php echo $maxsize ;?>, <?=lang('types_allowed')?>: <?php echo $att_type_str; ?>)
	<div id="attachbodyhidden" style="display:none"><span><input type="file" name="attach[]"></span></div>
	<div id="attachbody"><span><input type="file" name="attach[]" /></span></div>
<!--vot--><input type="button" name="html-upload" value="<?=lang('upload')?>" onclick="uploadfile();"/>
	<span style="margin-left:10px">
<!--vot--><a id="attach" title="<?=lang('attachment_add')?>" onclick="addattachfrom()" href="javascript:;" name="attach">[ + ]</a> 
<!--vot--><a id="attach" title="<?=lang('attach_reduce')?>" onclick="removeattachfrom()" href="javascript:;" name="attach">[ - ]</a>
    </span>
	</p>
</div>
</form>
</body>
</html>
