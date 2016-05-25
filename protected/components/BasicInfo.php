<?php
class BasicInfo extends CWidget {

    public $resumeid;
    public $userid;
    public $resume_infos;
//    public function init(){
//
//        if(!isset($this->resumeid) || !$this->resumeid)
//            $this->title=Shk::getTitle();
//
//    }

    public  function run()
    {

        $place = Yii::app()->db->createCommand()
            ->select('name')
            ->from('place')
//            ->where("$fieldName=:fieldName", array(':fieldName'=>$fieldData ))
//            ->order('id desc')
            ->queryAll();


        $this->render('resume/basicinfo', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
            'place' => $place,
        ) );
    }



	
	
	
}