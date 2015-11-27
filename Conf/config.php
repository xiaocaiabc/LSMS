<?php
//'配置项'=>'配置值'
return array(
	'DB_DSN'=>'mysql://root:root@127.0.0.1:3306/xuanzuo',
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',
    'SHOW_PAGE_TRACE'=>true,
    
    'TMPL_PARSE_STRING'=>array(
        '__CSS__'=>__ROOT__.'/Public/Css',
        '__JS__'=>__ROOT__.'/Public/Js',
        '__IMG__'=>__ROOT__.'/Public/Images',
        '__SOUND__'=>__ROOT__.'/Public/Sounds',
    
    )
);