<?php
class Experience extends CWidget {

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
           $experience_list = Yii::app()->db->createCommand()
            ->select('*')
            ->from('experiences')
            ->where(array('and', "resumeid = $this->resumeid", "userid =  $userid  "))
//            ->order('id desc')
            ->queryAll();

//        echo "<pre>";
//        print_r($experience_list['0']['description'] ); exit();


        $this->render('resume/experience', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
           'experience_list' => $experience_list,
        ) );
    }



	
	
	
}