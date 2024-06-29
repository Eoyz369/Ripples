<?php

// 获取文章阅读量并增加计数
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();

    // 检查是否有 views 字段
    $view = $db->fetchRow($db->select('int_value')
                             ->from($prefix.'fields')
                             ->where('cid = ? AND name = ?', $cid, 'views'))['int_value'];
    
    // 如果没有 views 字段，则创建并初始化
    if ($view === null) {
        $view = 0;
        $db->query($db->insert('table.fields')->rows(array(
            'cid'        => $cid,
            'name'       => 'views',
            'type'       => 'int',
            'str_value'  => '',
            'int_value'  => 0,
            'float_value'=> 0
        )));
    }

    // 更新阅读量
    if ($archive->is('single')) {
        $view++;
        $db->query($db->update('table.fields')
                      ->rows(array('int_value' => $view))
                      ->where('cid = ? AND name = ?', $cid, 'views'));
    }

    echo $view;
}

?>
