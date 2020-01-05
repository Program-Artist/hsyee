<?php
/**
 * Created by IntelliJ IDEA.
 * User: Bill
 * Date: 2020/1/5
 * Time: 13:27
 */

class ScoresController extends BaseController
{
    public function actionEntryScores()
    {
        if (Yii::app()->request->isPostRequest) {
            $data = $_POST['info'];
            foreach ($data as $v) {
                if($v[1]==null)
                    $v[1]=0;
                Yii::app()->db->createCommand()->update('scores', array(
                    'score1' => $v[1]
                ),
                    "sid=:sid", array(':sid' => $v[0])
                );
            }
        }

        $sql = "select * 
                from (
                select s_id,s_name
                from student
                where grade=1 and class=1  
                )as student
                left outer join(
                select sid,score1
                from scores
                where year=2019 and subject=1
                ) as scores on s_id=sid";
        $res = Yii::app()->db->createCommand($sql)->query();
        $result = $res->readAll();

        return $this->render('entryScores', array('scores_list' => $result));
    }

    function saveData($model, $post)
    {
        $model->attributes = $post;
        show_status($model->save(), '保存成功', get_cookie('_currentUrl_'), '保存失败');
    }
}