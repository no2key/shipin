<?php
return array (
  'db_type' => 'mysql',
  'db_host' => 'localhost',
  'db_name' => 'ppvod25',
  'db_user' => 'root',
  'db_pwd' => '123456',
  'db_port' => '3306',
  'db_prefix' => 'ff_',
  'db_charset' => 'utf8',
  'default_theme' => 'defalut',
  'site_name' => '飞飞影视系统',
  'site_path' => '/',
  'site_url' => 'http://127.0.0.1/',
  'site_keywords' => '飞飞影视系统PHP版,PHP电影程序',
  'site_description' => '努力打造飞飞影视系统为最好的PHP影视系统!',
  'site_email' => '110119@qq.com',
  'site_copyright' => '本网站为非赢利性站点，本网站所有内容均来源于互联网相关站点自动搜索采集信息，相关链接已经注明来源。',
  'site_hot' => '大笑江湖
宫锁心玉
php电影程序
飞飞影视系统
电视剧
大笑江湖
宫锁心玉
php电影程序|http://www.feifeicms.com
电视剧',
  'site_tongji' => '<script language="javascript" type="text/javascript" src="http://js.users.51.la/14834816.js"></script>',
  'site_icp' => 'ICP备2010111号',
  'url_html_suffix' => '.html',
  'url_num_admin' => '18',
  'admin_time_edit' => true,
  'admin_ads_file' => 'detail',
  'admin_order_type' => 'addtime',
  'admin_time_limit' => '300',
  'home_pagenum' => '3',
  'home_pagego' => 'pagego',
  'upload_path' => 'Uploads',
  'upload_style' => 'Y-m-d',
  'upload_class' => 'jpg,gif,png,jpeg',
  'upload_thumb' => false,
  'upload_thumb_w' => '120',
  'upload_thumb_h' => '140',
  'upload_water' => false,
  'upload_water_img' => './Public/images/water.gif',
  'upload_water_pct' => '75',
  'upload_water_pos' => '9',
  'upload_http' => false,
  'upload_http_down' => '30',
  'upload_http_prefix' => '',
  'upload_ftp' => false,
  'upload_ftp_host' => '',
  'upload_ftp_user' => '',
  'upload_ftp_pass' => '',
  'upload_ftp_port' => '',
  'upload_ftp_dir' => '',
  'play_show' => '0',
  'play_width' => '640',
  'play_height' => '460',
  'play_qvod' => 'http://union.feifeicms.com/install/down.php?id=qvod',
  'play_gvod' => 'http://union.feifeicms.com/install/down.php?id=gvod',
  'play_pvod' => 'http://union.feifeicms.com/install/down.php?id=pvod',
  'play_web9' => 'http://union.feifeicms.com/install/down.php?id=web9',
  'play_bdhd' => 'http://union.feifeicms.com/install/down.php?id=bdhd',
  'play_playad' => 'http://union.feifeicms.com/loading/show.html',
  'play_second' => 8,
  'play_language' => '粤语,台语,国语,韩语,日语,英语',
  'play_area' => '中国,美国,内地,香港,台湾,大陆,韩国,日本,英国,法国,德国,意大利,加拿大,西班牙',
  'play_year' => '2013,2012,2011,2010,2009,2008,2007,2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992',
  'play_server' => 
  array (
    'down_a' => 'http://www.163.com/',
    'down_b' => 'http://www.baidu.com/',
  ),
  'play_urllist' => '1',
  'play_collect_time' => '2',
  'play_collect_name' => '0',
  'play_collect' => false,
  'play_collect_content' => 
  array (
    0 => '',
  ),
  'tmpl_cache_on' => false,
  'html_cache_on' => false,
  'html_cache_time' => 0,
  'html_read_type' => 0,
  'html_file_suffix' => '.html',
  'html_cache_index' => '1',
  'html_cache_list' => '1.5',
  'html_cache_content' => '12',
  'html_cache_play' => '12',
  'html_cache_script' => '12',
  'html_cache_iframe' => '12',
  '_htmls_' => 
  array (
    'home:index:index' => 
    array (
      0 => '{:action}',
      1 => 3600,
    ),
    'home:vod:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 5400,
    ),
    'home:news:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 5400,
    ),
    'home:vod:read' => 
    array (
      0 => '{:module}_{:action}/{id|md5}',
      1 => 43200,
    ),
    'home:news:read' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
    'home:vod:play' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
    'home:my:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 43200,
    ),
  ),
  'url_html' => '0',
  'url_dir_a' => '2',
  'url_dir_b' => '5',
  'url_time' => '2',
  'url_number' => '20',
  'url_vodlist' => '{listdir}/index.html',
  'url_voddata' => '{listdir}/{id}/index.html',
  'url_vodplay' => 'vod/player/',
  'url_newslist' => '{listdir}/index.html',
  'url_newsdata' => '{listdir}/{id}/index.html',
  'url_play' => '{listdir}/{id}/play.html',
  'url_html_list' => '1',
  'url_html_play' => '1',
  'url_rewrite' => '0',
  'url_map' => 'detail/',
  'url_mytpl' => 'detail/',
  'user_gbcm' => false,
  'user_second' => '60',
  'user_replace' => '她妈|它妈|他妈|你妈|去死|贱人|留言',
  'user_gbnum' => '8',
  'user_cmnum' => '5',
  'user_vcode' => '0',
  'html_cache_ajax' => '12',
  'user_register' => '0',
  'html_home_suffix' => '.html',
  'upload_ftp_del' => '0',
  'rand_hits' => '999',
  'rand_updown' => '99',
  'rand_gold' => '8',
  'rand_golder' => '9',
  'user_post' => '0',
  'user_check' => '0',
  'rand_tag' => '0',
  'url_special' => 'detail/',
);
?>