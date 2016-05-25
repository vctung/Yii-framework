<?php
class Education extends CWidget {

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
		  $userid = Yii::app()->User->getState('id');
           $educations_list = Yii::app()->db->createCommand()
            ->select('*')
            ->from('educations')
            ->where(array('and', "resumeid = $this->resumeid", "userid =  $userid  "))
//            ->order('id desc')
            ->queryAll();


        $this->render('resume/education', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
           'educations_list' => $educations_list,
        ) );
    }



	
	
	
}