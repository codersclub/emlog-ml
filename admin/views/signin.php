<?php if (!defined('EMLOG_ROOT')) {
	exit('error!');
} ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-10 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
<!--vot-->                          <h1 class="h4 text-gray-900 mb-4"><?=lang('log_in')?></h1>
                                </div>
								<?php if (isset($_GET['succ_reg'])): ?>
<!--vot-->                          <div class="alert alert-success"><?=lang('em_reg_ok')?></div><?php endif ?>
								<?php if (isset($_GET['succ_reset'])): ?>
<!--vot-->                          <div class="alert alert-success"><?=lang('password_reset_ok')?></div><?php endif ?>
								<?php if (isset($_GET['err_ckcode'])): ?>
<!--vot-->                          <div class="alert alert-danger"><?=lang('validation_error')?></div><?php endif ?>
								<?php if (isset($_GET['err_login'])): ?>
<!--vot-->                          <div class="alert alert-danger"><?=lang('password_invalid')?></div><?php endif ?>
                                <form method="post" class="user" action="./account.php?action=dosignin&s=<?= $admin_path_code ?>">
                                    <div class="form-group">
<!--vot-->                              <input type="text" class="form-control form-control-user" id="user" name="user" aria-describedby="emailHelp" placeholder="<?=lang('user_name')?>" required
                                               autofocus>
                                    </div>
                                    <div class="form-group">
<!--vot-->                              <input type="password" class="form-control form-control-user" id="pw" name="pw" placeholder="<?=lang('password')?>" required>
                                    </div>
									<?php if ($login_code): ?>
                                        <div class="form-group form-inline">
<!--vot-->                                  <input type="text" name="login_code" class="form-control form-control-user" id="login_code" placeholder="<?=lang('captcha')?>" required>
                                            <img src="../include/lib/checkcode.php" id="checkcode" class="mx-2">
                                        </div>
									<?php endif ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="ispersis" name="ispersis" value="1">
<!--vot-->                                  <label class="custom-control-label" for="ispersis"><?=lang('remember_me')?></label>
                                        </div>
                                    </div>
<!--vot-->                          <button class="btn btn-primary btn-user btn-block" type="submit"><?=lang('login')?></button>
                                    <?php if($is_signup): ?>
<!--vot-->                          <a class="btn btn-success btn-user btn-block" type="button" href="./account.php?action=signup"><?=lang('account_register')?></a>
                                    <?php endif ?>
                                    <div><?php doAction('login_ext') ?></div>
                                    <hr>
<!--vot-->                          <div class="text-center"><a class="small" href="./account.php?action=reset"><?=lang('password_forget')?></a></div>
                                    <hr>
<!--vot-->                          <div class="text-center"><a href="../" class="small" role="button">&larr;<?=lang('back_home')?></a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script>
    setTimeout(hideActived, 5000);
    $('#checkcode').click(function () {
        var timestamp = new Date().getTime();
        $(this).attr("src", "../include/lib/checkcode.php?" + timestamp);
    });
</script>
