<?php if (!defined('EMLOG_ROOT')) {
    exit('error!');
} ?>
<?php if (isset($_GET['error_login'])): ?>
<!--vot--><div class="alert alert-danger"><?=lang('user_name_empty')?></div><?php endif; ?>
<?php if (isset($_GET['error_exist'])): ?>
<!--vot--><div class="alert alert-danger"><?=lang('user_name_exists')?></div><?php endif; ?>
<?php if (isset($_GET['error_pwd_len'])): ?>
<!--vot--><div class="alert alert-danger"><?=lang('password_length_short')?></div><?php endif; ?>
<?php if (isset($_GET['error_pwd2'])): ?>
<!--vot--><div class="alert alert-danger"><?=lang('passwords_not_equal')?></div><?php endif; ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=lang('user_manage')?></h1>

    <form action="user.php?action=update" method="post">
        <div class="form-group">
<!--vot-->  <li><input type="text" value="<?= $username ?>" name="username" style="width:200px;" class="form-control"> <?=lang('user_name')?></li>
<!--vot-->  <li><input type="text" value="<?= $nickname ?>" name="nickname" style="width:200px;" class="form-control"> <?=lang('nickname')?></li>
<!--vot-->  <li><input type="password" value="" name="password" style="width:200px;" class="form-control"> <?=lang('password_new')?></li>
<!--vot-->  <li><input type="password" value="" name="password2" style="width:200px;" class="form-control"> <?=lang('password_new_repeat')?></li>
<!--vot-->  <li><input type="text" value="<?= $email ?>" name="email" style="width:200px;" class="form-control"> <?=lang('email')?></li>
            <li>
                <select name="role" id="role" class="form-control">
<!--vot-->          <option value="writer" <?= $ex1 ?>><?=lang('user')?></option>
<!--vot-->          <option value="admin" <?= $ex2 ?>><?=lang('admin')?></option>
                </select>
            </li>
            <li id="ischeck">
                <select name="ischeck" class="form-control">
<!--vot-->          <option value="n" <?= $ex3 ?>><?=lang('posts_not_need_audit')?></option>
<!--vot-->          <option value="y" <?= $ex4 ?>><?=lang('posts_need_audit')?></option>
                </select>
            </li>
<!--vot-->  <li><?=lang('personal_description')?><br>
                <textarea name="description" rows="5" style="width:260px;" class="form-control"><?php echo $description; ?></textarea></li>
            <li>
                <input name="token" id="token" value="<?php echo LoginAuth::genToken(); ?>" type="hidden"/>
                <input type="hidden" value="<?php echo $uid; ?>" name="uid"/>
<!--vot-->      <input type="submit" value="<?=lang('save')?>" class="btn btn-primary">
<!--vot-->      <input type="button" value="<?=lang('cancel')?>" class="btn btn-default" onclick="window.location='user.php';"></li>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
<script>
    setTimeout(hideActived, 2600);
    $("#menu_user").addClass('active');
    if ($("#role").val() == 'admin') $("#ischeck").hide();
    $("#role").change(function () {
        $("#ischeck").toggle()
    })
</script>
