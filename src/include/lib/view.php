<?php
/**
 * View control
 * @copyright (c) Emlog All Rights Reserved
 * $Id$
 */

class View {

	public static function getView($template, $ext = '.php'){
	    global $lang;
	    if (!is_dir(TEMPLATE_PATH)){
	        emMsg($lang['template_damaged'], BLOG_URL . 'admin/template.php');
	    }
	    return TEMPLATE_PATH.$template.$ext;
	}

    public static function output() {
        $content = ob_get_clean();
	    if (Option::get('isgzipenable') == 'y' && function_exists('ob_gzhandler')){
	        ob_start('ob_gzhandler');
	    } else {
	        ob_start();
	    }
        echo $content;
        ob_end_flush();
        exit;
    }
}
