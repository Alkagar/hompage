<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args= array(
        'category_name' => '',
        'paged' => $paged
    );
    query_posts($args);
