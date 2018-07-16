<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/7/16 Time: 9:46
// +----------------------------------------------------------------------



namespace app\api\model;

use think\Db;
use think\Model;

class Banner
{

    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerByID($id)
    {

        //第一种方法 直接写SQL
        //$result = Db::query('select * from banner_item where banner_id=?',[$id]);

        //第二种方法 使用TP自带的函数
        // 表达法
//        $result = Db::table('banner_item')
//            ->where('banner_id','=',$id)
//            ->select();

        // 闭包
//        $result = Db::table('banner_item')
//            ->where(function($query) use ($id) {
//                $query->where('banner_id','=',$id);
//            })
//            ->select();


        return $result;
    }
}
