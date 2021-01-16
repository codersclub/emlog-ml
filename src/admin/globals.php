<?php
/**
 * Load Background Global items
 * @copyright (c) Emlog All Rights Reserved
 */

require_once '../init.php';

define('ADMIN_TEMPLATE', 'default'); //Admin Template
define('TEMPLATE_PATH', EMLOG_ROOT.'/admin/templates/'.ADMIN_TEMPLATE.'/');//AdminCP current template path
define('OFFICIAL_SERVICE_HOST', 'http://www.emlog.net/');//Official Service Domain

/*vot*/ load_language('admin');

$sta_cache = $CACHE->readCache('sta');
$user_cache = $CACHE->readCache('user');
$action = isset($_GET['action']) ? addslashes($_GET['action']) : '';

//Login authentication
if ($action == 'login') {
    $username = isset($_POST['user']) ? addslashes(trim($_POST['user'])) : '';
    $password = isset($_POST['pw']) ? addslashes(trim($_POST['pw'])) : '';
    $ispersis = isset($_POST['ispersis']) ? intval($_POST['ispersis']) : false;
    $img_code = Option::get('login_code') == 'y' && isset($_POST['imgcode']) ? addslashes(trim(strtoupper($_POST['imgcode']))) : '';

    $loginAuthRet = LoginAuth::checkUser($username, $password, $img_code);
    
    if ($loginAuthRet === true) {
        LoginAuth::setAuthCookie($username, $ispersis);
        emDirect("./");
    } else{
        LoginAuth::loginPage($loginAuthRet);
    }
}

//Logout
if ($action == 'logout') {
    setcookie(AUTH_COOKIE_NAME, ' ', time() - 31536000, '/');
    emDirect("../");
}

if (ISLOGIN === false) {
    LoginAuth::loginPage();
}

$request_uri = strtolower(substr(basename($_SERVER['SCRIPT_NAME']), 0, -4));
if (ROLE == ROLE_WRITER && !in_array($request_uri, array('write_log','admin_log','attachment','blogger','comment','index','save_log'))) {
/*vot*/    emMsg(lang('no_permission'),'./');
}
