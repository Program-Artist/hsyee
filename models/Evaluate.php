<?php
class Evaluate extends BaseModel{
    public function tableName()
    {
        return '{{evaluate}}';
    }



    public function attributeLabels()
    {
        return array(
            's_id' => '学号',
            's_name' => '姓名',
            's_gender' => '性别',
            'grade' => '年级',
            'class' => '班级'
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className); // TODO: Change the autogenerated stub
    }
}