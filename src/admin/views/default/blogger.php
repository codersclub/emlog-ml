<?php if(!defined('EMLOG_ROOT')) {exit('error!');}?>
<script>setTimeout(hideActived,2600);</script>
<div class="containertitle2">
<?php if (ROLE == 'admin'):?>
<a class="navi1" href="./configure.php"><? echo $lang['base_settings']; ?></a>
<a class="navi4" href="./permalink.php"><? echo $lang['permalink']; ?></a>
<a class="navi2" href="./blogger.php"><? echo $lang['personal_data']; ?></a>
<?php else:?>
<a class="navi1" href="./blogger.php"><? echo $lang['personal_data']; ?></a>
<?php endif;?>
<?php if(isset($_GET['active_edit'])):?><span class="actived"><? echo $lang['personal_data_saved_ok'];?></span><?php endif;?>
<?php if(isset($_GET['active_del'])):?><span class="actived"><? echo $lang['photo_deleted_ok'];?></span><?php endif;?>
</div>
<div style="margin-left:20px;">
<form action="blogger.php?action=update" method="post" name="blooger" id="blooger" enctype="multipart/form-data" class="mb-8">
<div>
	<li><? echo $lang['nickname'];?></li>
	<li><input maxlength="50" style="width:245px;" value="<?php echo $nickname; ?>" name="name" /></li>
	<li><? echo $lang['email'];?></li>
	<li><input name="email" value="<?php echo $email; ?>" style="width:245px;" maxlength="200" /></li>
	<li><?php echo $icon; ?><input type="hidden" name="photo" value="<?php echo $photo; ?>"/></li>
	<li><? echo $lang['photo_info'];?></li>
	<li><input name="photo" type="file" style="width:245px;" /></li>
	<li><? echo $lang['personal_description'];?></li>
	<li><textarea name="description" rows="5" cols="" style="width:300px;" type="text" maxlength="500"><?php echo $description; ?></textarea></li>
	<li><input type="submit" value="<? echo $lang['personal_data_save'];?>" class="submit" /></li>
</div>
</form>
<div class="containertitle"><b><? echo $lang['modify_login_password'];?></b></div>
<div class=line></div>
<form action="blogger.php?action=update_pwd" method="post" name="blooger" id="blooger">
<div>
	<li><? echo $lang['password_current'];?></li>
	<li><input type="password" maxlength="200" style="width:200px;" value="" name="oldpass" /></li>
	<li><? echo $lang['password_new'];?></li>
	<li><input type="password" maxlength="200" style="width:200px;" value="" name="newpass" /></li>
	<li><? echo $lang['password_new_confirm'];?></li>
	<li><input type="password" maxlength="200" style="width:200px;" value="" name="repeatpass" /></li>
	<li><? echo $lang['user_name'];?></li>
	<li><input maxlength="200" style="width:200px;" name="username" /></li>
	<li></li>
	<li><input type="submit" value="<? echo $lang['save changes'];?>" class="submit" /></li>
</div>
</form>
</div>