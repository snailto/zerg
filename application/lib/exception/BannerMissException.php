<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/11/19 Time: 9:24
// +----------------------------------------------------------------------

/**
 * Banner 错误类
 */

namespace app\lib\exception;


class BannerMissException extends BaseExcepiton {

    // 定义错误属性
    public $code = 404;
    // 错误描述
    public $msg = '请求Banner不存在';
    // 错误码
    public $errorCode = 40000;





}