<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-02-24
 * Version      :   1.0
 */

namespace Controllers;


use Render\Abstracts\Controller;

class SiteController extends Controller
{
    /**
     * 模块测试，直接转向到dict模块
     * @throws \Exception
     */
    public function actionIndex()
    {
        $this->render('index');
    }
}