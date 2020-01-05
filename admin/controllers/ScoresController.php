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
                        "subject=0 and sid=:sid", array(':sid' => $v[0])
                );
            }
        }

        $sql = "select * 
                from (
                select s_id,s_name
                from student
                where grade=7 and class=7
                )as student
                left outer join(
                select sid,score1
                from scores
                where year='2019-2020' and subject=0
                ) as scores on s_id=sid
                order by s_id";
        $res = Yii::app()->db->createCommand($sql)->query();
        $result = $res->readAll();

        return $this->render('entryScores', array('scores_list' => $result));
    }

    function saveData($model, $post)
    {
        $model->attributes = $post;
        show_status($model->save(), '保存成功', get_cookie('_currentUrl_'), '保存失败');
    }

    public function actionScore(){
        $sql = "select s_id,s_name,pe_score1,ch_score1,math_score1,en_score1,ph_score1,chem_score1
        ,bi_score1,po_score1,hi_score1,geo_score1 
        from s_scores
        where  grade =7 and class =7 
        order by s_id";
        $res = Yii::app()->db->createCommand($sql)->query();
        $result = $res->readAll();
        return $this->render("score",array('sc_list'=>$result));
    }
}