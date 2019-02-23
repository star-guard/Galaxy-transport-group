<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/22
 * Time: 14:33
 */

namespace app\controllers;


use yii\web\Controller;

class DealWithTheFreightController extends Controller
{
    public function actionIndex()
    {
        //模拟数据
        $data = [

        ];

        return $this->render("index",['data'=>$data]);
    }
}