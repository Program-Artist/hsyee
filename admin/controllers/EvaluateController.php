<?php


class EvaluateController extends BaseController
{


    public function actionIndex(){
        // 班主任点击时传入其年级和班级
        $model = new Student;
        $criteria = new CDbCriteria();
        $criteria->condition = 'grade = 7 and class = 7';
        $criteria->order = 's_id'; //ASC - 升序, DESC - 降序
        $result = $model->findAll($criteria);
        return $this->render('index', array('s_list' => $result));
    }

    public function actionEdit(){
        $id = Yii::app()->request->getParam('id');
        $model = new Scores;
        $criteria = new CDbCriteria();
        $criteria->addInCondition('sid', array($id));
        $criteria->order = 'subject';
        $result = $model->findAll($criteria);
//        for($i=0; $i<10; $i++)
//        {
//            echo "数组第".($i+1)."个元素是：";
//            print_r($result[$i]->score1) ;
//            echo "<br>";
//        }
        $this->render('edit', array('s_list' => $result));
    }

    public function actionCheck(){
        $year = $this->getYear();
        $evaluate = $this->getTerm() == 1 ? 'evaluate1' : 'evaluate2';
        $model = new Evaluate;
        $result = $model->findAll();
        return $this->render('check', array('s_list' => $result));
    }

    public function getTerm() {
        $month = date('M');

        $arr = array(3, 4, 5, 6, 7);

        if (in_array($month, $arr)) { return 2; }
        else { return 1; }
    }

    public function getYear() {
        $year = date('Y');
        $month = date('M');

        $arr = array(2, 3, 4, 5, 6, 7);

        if (in_array($month, $arr)) {
            return $year - 1 . '-' . $year;
        }
        else {
            return $year . '-' . ($year + 1);
        }
    }
}