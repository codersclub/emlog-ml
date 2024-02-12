<?php
$lang = array(

//---------------------------
//install.php

'php_required'			=> 'Для нормальной работы Emlog требуется PHP5.6 или выше (рекомендуется 7.4)',//'PHP版本太低，请使用5.6及以上版本(推荐7.4)',
'installation'			=> 'Установка Emlog v.',//'Install Emlog v.',//'安装程序emlog ',
'mysql_settings'		=> 'Параметры MySQL',//'MySQL数据库设置',
'mysql_required'		=> 'Версия MySQL (%s) слишком старая, требуется установить версию 5.6 или выше',//'MySQL版本太低(%s)，请使用5.6及以上版本',
'db_hostname'			=> 'Имя хоста БД',//'数据库地址',
'db_hostname_info'		=> 'Обычно 127.0.0.1 (или с указанием порта: 127.0.0.1:3306)',//'通常为 127.0.0.1 或者指定端口 127.0.0.1:3306',
'db_user'			=> 'Пользователь БД',//'数据库用户名',
'db_password'			=> 'Пароль к БД',//'数据库密码',
'db_name'			=> 'Имя базы данных',//'数据库名',
'db_name_info'			=> 'Внимание! Вы должны создать Базу Данных вручную до начала установки!',//'程序不会自动创建数据库，请提前创建一个空数据库或使用已有数据库',
'db_prefix'			=> 'Префикс имени таблиц БД',//'DB prefix',//'数据库前缀',
'db_prefix_info'		=> 'Обычно менять не требуется. Допускаются только латинские буквы и цифры, должен завершаться символом подчеркивания.',//'通常默认即可，不必修改。由英文字母、数字、下划线组成，且必须以下划线结束',
'admin_settings'		=> 'Вход администратора',//'Administrator account',//'管理员设置',
'admin_name'			=> 'Имя пользователя',//'User name',//'登录名',
'admin_password'		=> 'Пароль',//'Password',//'登录密码',
'admin_password_info'		=> 'Минимум 5 символов',//'Minimum 5 characters',//'不小于5位',
'admin_password_repeat'		=> 'Повторите пароль',//'Repeat password',//'重复密码',
'email'				=> 'E-Mail',//'邮箱',
'email_prompt'			=> 'используется для восстановления пароля, должно быть заполнено',//'可用于找回密码，建议填写',
'install_emlog'			=> 'Начать установку!',//'Start the installation',//'开始安装',
'db_prefix_empty'		=> 'Префикс не должен быть пустым!',//'Database prefix can not be empty!',//'数据库前缀不能为空!',
'db_prefix_invalid'		=> 'Недопустимый префикс!',//'Database prefix is incorrect!',//'数据库前缀格式错误!',
'username_password_empty'	=> 'Имя пользователя и пароль не могут быть пустыми!',//'Username and password can not be empty!',//'登录名和密码不能为空!',
'password_short'		=> 'Длина пароля должен быть не менее 5 символов!',//'Password can not be less than 5 characters',//'登录密码不得小于5位',
'password_not_equal'		=> 'Пароли должны совпадать!',//'Two passwords are not equal',//'两次输入的密码不一致',
'already_installed'		=> 'Похоже, что Emlog уже установлен!<br>При продолжении все имеющиеся данные будут затёрты.<br>Вы уверены, что хотите продолжить?<br>',//'It seems the Emlog is already installed!<br>Continue this process will overwrite the original data.<br>Are you sure to continue?<br>',//'你的emlog看起来已经安装过了。继续安装将会覆盖原有数据，确定要继续吗？',
'continue'			=> 'Продолжить&raquo;',//'Continue&raquo;',//'继续&raquo;',
'return'			=> '&laquo;Вернуться назад',//'&laquo;Return back',//'&laquo;点击返回',
'config_not_writable'		=> 'Нет прав на запись файла конфигурации (config.php). В ситемах Unix/Linux установите права 666. В системе Windows обратитесь за помощью к сисадмину.',//'Configuration file (config.php) is not writable. If you are using a Unix / Linux hosts, modify the file permissions to 777. If you are using a Windows host, please contact the administrator.',//'配置文件(config.php)不可写。如果您使用的是Unix/Linux主机，请修改该文件的权限为777。如果您使用的是Windows主机，请联系管理员，将此文件设为可写',
'cache_not_writable'		=> 'Нет прав на запись данных в кэш (content/cache).  В ситемах Unix/Linux установите права 776 для content/cache, и права 666 для всех вложенных файлов. В системе Windows обратитесь за помощью к сисадмину.',//'Cache is not writable. If you are using a Unix / Linux host, modify the permissions of all files in the directory (content/cache) to 777.',//'缓存文件不可写。如果您使用的是Unix/Linux主机，请修改缓存目录 (content/cache) 下所有文件的权限为777。如果您使用的是Windows主机，请联系管理员，将该目录下所有文件设为可写',
'emlog_welcome'			=> 'Добро пожаловать в emlog',//'Welcome to emlog',//'欢迎使用emlog',
'emlog_install_congratulation'	=> 'Поздравляем! Вы успешно установили emlog. Первый пост в блоге создан.\n\nОтредактируйте его или просто удалите, и начинайте наполнять своё собственное содержание!',//'Congratulations, you have successfully installed the emlog. The first entry is ready. Just edit or delete it and start a blog!',//'恭喜您成功安装了emlog，这是系统自动生成的演示文章。编辑或者删除它，然后开始您的创作吧！',
'my_blog'			=> 'Мой блог',//'点滴记忆',
'emlog_powered'			=> 'Powered by emlog',//'使用emlog搭建的站点',
'emlog_official_site'		=> 'Официальный сайт emlog',//'emlog官方主页',
'emlog_ml_official_site'	=> 'Официальный сайт Emlog.ML',//'emlog.ML官方主页',
'home'				=> 'Начало',//'首页',
'twitters'			=> 'Заметки',//'笔记',
'login'				=> 'Вход',//'Login',//'登录',
'test_twit'			=> 'Это первая тестовая заметка... :)',//'使用微语记录您身边的新鲜事',
'emlog_installed'		=> 'Поздравляем! Ваш блог готов к использованию!',//'Congratulations, your blog is ready to use!',//'恭喜，安装成功！',
'emlog_installed_info'		=> 'Теперь вы можете заняться наполнением блога. Это действительно просто!',//'Now you can start to create your content. It\'s really simple!',//'您的emlog已经安装好了，现在可以开始您的创作了，就这么简单!',
'user_name'			=> 'Имя пользователя',//'User name',//'用户名',
'password'			=> 'Пароль',//'Password',//'密 码',
'password_entered'		=> 'который Вы только-что создали',//'you have created a two seconds ago',//'您刚才设定的密码',
'delete_install'		=> 'ВНИМАНИЕ! В целях безопасности удалите файл istall.php !',//'Warning! Please delete the installation file install.php',//'警告：请手动删除根目录下安装文件：install.php',
'go_to_front'			=> 'Зайти в блог',//'Visit the Blog',//'访问首页',
'go_to_admincp'			=> 'Зайти в Админ-Панель',//'Go to Administration Control Panel',//'登录后台',

);
