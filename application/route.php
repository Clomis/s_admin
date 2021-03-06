<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    //路由分组,相当于下面的每个数组的key值都带上test,就如/:id加上test成为test/:id这样
    '[test]'     => [
        '/:id'   => ['Test/hello', ['method' => 'get'], ['id' => '\d+']],
    ],
];
