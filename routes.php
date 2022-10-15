<?php

$return = [
    "#^$#" => ["Page1", "read", []],
    "#^Authorization$#" => ["Authorization", "render", []],
    "#^Registration$#" => ["Registration", "action", []],
    /*"#^Catalog$#" => ["Catalog", "action", []],
   /* "#^Catalog/(\d+)$#" => ["Catalog", "action", []],*/
    "#^PagePromo$#" => ["PagePromo", "read", []],
   /* "#^Promo/(\d+)$#" => ["Promo", "action", []],
    "#^Cabinet$#" => ["Promo", "action", ["num" => 1]],*/

    
    "#^PageCategoryList/(\d+)$#" => ["PageCategoryList", "read", ["num" => 1]],
    "#^PageCardProduct/(\d+)$#" => ["PageCardProduct", "read", ["num" => 1]]
    
    
    /*"#^PageCategoryList/1$#" => ["PageCategoryList", "read", ["category" => 1]],
    "#^PageCategoryList/2$#" => ["PageCategoryList", "read", ["category" => 2]],
    "#^PageCategoryList/3$#" => ["PageCategoryList", "read", ["category" => 3]],    
    "#^PageCategoryList/6$#" => ["PageCategoryList", "read", ["category" => 6]],
    "#^PageCategoryList/4$#" => ["PageCategoryList", "read", ["category" => 4]],   
    "#^PageCategoryList/5$#" => ["PageCategoryList", "read", ["category" => 5]],
    
    
    
    "#^PageCardProduct/1$#" => ["PageCardProduct", "read", ["num" => 1]],
    "#^PageCardProduct/2$#" => ["PageCardProduct", "read", ["num" => 2]],
    "#^PageCardProduct/3$#" => ["PageCardProduct", "read", ["num" => 3]],
    "#^PageCardProduct/4$#" => ["PageCardProduct", "read", ["num" => 4]],
    "#^PageCardProduct/5$#" => ["PageCardProduct", "read", ["num" => 5]],
    "#^PageCardProduct/6$#" => ["PageCardProduct", "read", ["num" => 6]]*/
    
   /* "#^Pages1$#" => ["page", "index", []],
    "#^Pages1/(\d+)$#" => ["page", "index", ["num" => 1]]*/
   
];



