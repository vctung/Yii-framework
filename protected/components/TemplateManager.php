<?php
class TemplateManager extends CWidget {
	
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
    
	
        $templates = Yii::app()->db->createCommand()
            ->select('*')
            ->from('template')
            //->where(array('and', "resumeid = $this->resumeid", "userid =  $userid  "))
           ->order('id desc')
            ->queryAll();
        $tmp = array();
        foreach ( $templates as $key => $value) {
            if($value['id'] == $this->resume_infos['template']) {
                $tmp = $value;
                unset($templates[$key]);
                array_unshift($templates , $tmp);
            }
        }
//        echo "<pre>";
//        print_r($templates); exit();
        $this->render('resume/templatemanager', array(
            'resumeid' => $this->resumeid,
            'resume_infos' => $this->resume_infos,
            'templates' => $templates,
        ) );
    }




}