<?php
class SubmitResume extends CWidget {

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
          $resume = Yii::app()->db->createCommand()
            ->select('*')
            ->from('resume')
            ->where(array('and', "id = $this->resumeid", "userid =  $userid  "))
//            ->order('id desc')
            ->queryRow();

//        echo "<pre>";
//        print_r($resume['url'] ); exit();


        $this->render('resume/submitresume', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
           'resume' => $resume,
        ) );
    }



	
	
	
}