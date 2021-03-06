<?php
/**
 * 通用配置文件.
 * 
 * @author 水木清华 <admin@4u4v.net>
 * @author GenialX <admin@ihuxu.com>
 */
$filename        = strtolower(GXBS_MODE);
$filepath        = WEB_PATH . 'Conf/Web/web.php';
$sysConfig       = require $filepath; 
$config = array(
        'APP_GROUP_LIST'       => 'Admin,Home',     // 分组
        'TMPL_FILE_DEPR'       => '_',              // 模板文件MODULE_NAME与ACTION_NAME之间的分割符，只对项目分组部署有效
        'DEFAULT_GROUP'        => 'Home',           // 默认分组
        'URL_MODEL'            => 2,                // URL兼容模式
        'URL_HTML_SUFFIX'      => '',               // URL伪静态后缀设置
        'URL_CASE_INSENSITIVE' => true,             // URL是否不区分大小写 默认区分大小写
        'DB_FIELDTYPE_CHECK'   => true,             // 是否进行字段类型检查
        'DATA_CACHE_SUBDIR'    => true,             // 哈希子目录动态缓存的方式
        'DATA_PATH_LEVEL'      => 2,
        'TMPL_STRIP_SPACE'     => false,            //是否去除模板文件里面的html空格与换行
        
        'TOKEN_ON'             => false,            // 是否开启令牌验证
        'TOKEN_NAME'           => '__hash__',       // 令牌验证的表单隐藏字段名称
        'TOKEN_TYPE'           => 'md5',            //令牌哈希验证规则 默认为MD5
        'TOKEN_RESET'          => true,             //令牌验证出错后是否重置令牌 默认为true

        'TMPL_ACTION_ERROR'    => 'tips/tips',      // 默认错误跳转对应的模板文件
        'TMPL_ACTION_SUCCESS'  => 'tips/tips',      // 默认成功跳转对应的模板文件
        'ERROR_PAGE'           => 'tips/error',     // 异常和错误
        
        'SHOW_PAGE_TRACE'      => true,             // 显示TRACE页面
            
        //多语言配置
        'LANG_SWITCH_ON'       => true,             // 开启多语言功能
        'LANG_AUTO_DETECT'     => true,             // 自动侦测语言 开启多语言功能后有效
        'DEFAULT_LANG'         => 'zh-cn',          // 默认语言
        'LANG_LIST'            => 'zh-cn,en-us',    // 允许切换的语言列表 用逗号分隔
        'VAR_LANGUAGE'         => 'l',              // 默认语言切换变量
        
        'APP_DEBUG'            => true,
);
return array_merge($config, $sysConfig);