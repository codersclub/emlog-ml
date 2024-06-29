<?php
/*
Template Name: Default template
Version:1.1.9
Template Url:https://www.emlog.net/template/detail/1167
Description: EMLOG Default template
Author: emlog
Author Url:https://www.emlog.net/author/index/577
*/

defined('EMLOG_ROOT') || exit('access denied!');
require_once View::getView('module');
$v = '1717917042';
if (!function_exists('_g')) {
    emMsg(lang('enable_tpl_settings'));
}

?>
<!doctype html>
<html lang="<?= LANG ?>" dir="<?= LANG_DIR ?>" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $site_title ?></title>
    <meta name="keywords" content="<?= $site_key ?>"/>
    <meta name="description" content="<?= $site_description ?>"/>
    <base href="<?= BLOG_URL ?>"/>
    <link href="<?= empty(_g('favicon')) ? BLOG_URL . 'favicon.ico' : _g('favicon'); ?>" rel="icon">
    <link rel="alternate" title="RSS" href="<?= BLOG_URL ?>rss.php" type="application/rss+xml"/>
    <link href="<?= TEMPLATE_URL ?>css/style.css?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>" rel="stylesheet"/>
    <link href="<?= TEMPLATE_URL ?>css/icon/iconfont.css?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>" rel="stylesheet"/>
    <link href="<?= TEMPLATE_URL ?>css/markdown.css?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>" rel="stylesheet"/>
    <script src="<?= TEMPLATE_URL ?>js/jquery.min.3.5.1.js?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>"></script>
    <script>    var em_lang = '<?= LANG ?>';</script>
    <script src="<?= BLOG_URL ?>lang/<?= LANG ?>/lang_js.js"></script>
    <script src="<?= TEMPLATE_URL ?>js/common_tpl.js?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>"></script>
    <script src="<?= TEMPLATE_URL ?>js/zoom.js?v=<?= $v ?>&t=<?= Option::EMLOG_VERSION_TIMESTAMP ?>"></script>
    <?php doAction('index_head') ?>
    <script>
        // Calendar generation and page turning
        function sendinfo(url) {
            $("#calendar").load(url)
        }

        // Switch to dark mode theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.documentElement.setAttribute('data-theme', savedTheme);
        }
    </script>
</head>
<body>
<nav class="blog-header">
    <div class="blog-header-c container">
        <?php if (_em('logotype') == 1): ?>
            <a class="blog-header-title" href="<?= BLOG_URL ?>"><?= $blogname ?></a>
            <div class="blog-header-subtitle subtitle-overflow" title="<?= $bloginfo ?>"><?= $bloginfo ?></div>
        <?php else: ?>
            <a href="<?= BLOG_URL; ?>" title="<?= $bloginfo; ?>"><img src="<?= _em('logoimg'); ?>" alt="<?= $blogname; ?>"/></a>
        <?php endif; ?>
        <div class="blog-header-toggle">
            <svg class="blogtoggle-icon">
                <rect x="1" y="1" fill="#5F5F5F" width="26" height="1.6"/>
                <rect x="1" y="8" fill="#5F5F5F" width="26" height="1.6"/>
                <rect x="1" y="15" fill="#5F5F5F" width="26" height="1.6"/>
            </svg>
        </div>
        <?php blog_navi() ?>
        <?php doAction('index_navi_ext') ?>
    </div>
</nav>
