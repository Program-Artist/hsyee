<?php
/**
 * Created by IntelliJ IDEA.
 * User: acer
 * Date: 2020/1/4
 * Time: 17:12
 */

class MyClassController extends BaseController
{
    public function actionStudent(){
        $model = new Student;
        $result = $model->findAll(new CDbCriteria);
        return $this->render("student",array('s_list'=>$result));
    }

}