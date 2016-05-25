<?php
class Skill extends CWidget {

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
        $skils_list = Yii::app()->db->createCommand()
            ->select('*')
            ->from('skills')
            ->where(array('and', "resumeid = $this->resumeid", "userid =  $userid  "))
//            ->order('id desc')
            ->queryAll();

//        echo "<pre>";
//        var_dump($place);
//        exit();

        $this->render('resume/skill', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
            'skils_list' => $skils_list,
        ) );
    }



	
	
	
}