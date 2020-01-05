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
        $criteria = new CDbCriteria();
        $criteria->condition = "grade = 7 and class = 7";
        $criteria->order = 's_id';
        $model = new Student;
        $result = $model->findAll($criteria);
        return $this->render("student",array('s_list'=>$result));
    }

}