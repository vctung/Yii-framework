<?php
class Portfolio extends CWidget {
	
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

        $portfolios_cat = Yii::app()->db->createCommand()
            ->select('*')
            ->from('portfolios')
            ->where(array('and', "resumeid = $this->resumeid", "userid =  $this->userid  "))
            ->order('id desc')
            ->queryAll();

        $this->render('resume/portfolio', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
            'portfolios_cat' => $portfolios_cat,
        ) );
    }




}