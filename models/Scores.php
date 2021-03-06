<?php


class Scores extends BaseModel
{
    public function tableName()
    {
        return '{{scores}}';
    }

    public function  attributeLabels()
    {
        return Array('s_id'=>'学号',
            's_name'=>'姓名',
            'year'=>'学年',
            'score_id'=>'考试标号',
            'pe_score'=>'体育成绩',
            'ch_score'=>'语文成绩',
            'math_score'=>'数学成绩',
            'en_score'=>'英语成绩',
            'ph_score'=>'物理成绩',
            'chem_score'=>'化学成绩',
            'bi_score'=>'生物成绩',
            'po_score'=>'政治成绩',
            'hi_score'=>'历史成绩',
            'geo_score'=>'地理成绩'
            );
    }

//    public function attributeLabels()
//    {
//        return array(
//            'year' => '学年',
//            'subject' => '学科',
//            'sid' => '学号',
//            'score1' => '第1学期期中成绩',
//            'score2' => '第1学期期末成绩',
//            'score3' => '第2学期期中成绩',
//            'score4' => '第2学期期末成绩'
//        );
//    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }
}