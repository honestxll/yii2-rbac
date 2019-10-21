<?php

namespace app\controllers\common;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

// 是以后所有控制器的基类，并且集成常用公用方法
class BaseController extends Controller 
{
    // 获取 post 参数的方法
    public function post($key, $default = '')
    {
        return Yii::$app->request->post($key, $default);
    }

    // 获取 get 参数的方法
    public function get($key, $default = '')
    {
        return Yii::$app->request->get($key, $default);
    }

    /**
     * 封装 json 返回值，主要用于 js ajax 和后台交互返回格式
     * data: 数据
     * msg: 提示消息
     * code: 状态码 200 成功
     */
    protected function renderJSON($data = [], $msg = 'ok', $code = 200)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
            'req_id' => uniqid()
        ]);
        return Yii::$app->end();
    }
}