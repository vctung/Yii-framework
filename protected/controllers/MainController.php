<?php
class MainController extends Controller
{

    // public $layout='//layouts/page';
   public $layout='//layouts/resume_index';


   public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('cv','login','register','index','sethistory','error'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('settingcv','cv','managecv','addmoreresume','createcv','update','logout', 'test'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('index','dashboard','delete','addproject','deleteajax','editproject','userprojectlist','sethistory','test'),
                'expression'=>'(Yii::app()->user->getState("role")=="admin")',
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete','addproject'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }





    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
        );
    }




    public function actionIndex()
    {
        
        $this->render('index',array(   
           // 'categories' =>$categories,
           // 'list_service' =>$list_service,
           // 'partner' =>$partner,
        ));//end render

    }

    /**
         * Displays the register page
         */
        public function actionRegister()
        {
                $this->layout='//layouts/resume_login';
                $model=new RegisterForm;
                $newUser = new User;
                
                // if it is ajax validation request
                if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
                {
                        echo CActiveForm::validate($model);
                        Yii::app()->end();
                }



                // collect user input data
                if(isset($_POST['RegisterForm']))
                {
                     

                        $model->attributes=$_POST['RegisterForm'];
                        $newUser->username = $model->username;
                        $newUser->password = $model->password;
                        $newUser->email = $model->email;
                        $newUser->datecreate = date('Y-m-d H:i:s');
                                
                        echo "<pre>";

                        var_dump( $newUser->save()  );
                        exit();


                        if( $newUser->save() ) {
                                $identity=new UserIdentity($newUser->username,$model->password);
                                $identity->authenticate();
                                Yii::app()->user->login($identity,0);
                                //redirect the user to page he/she came from
                                $this->redirect(Yii::app()->user->returnUrl);
                        }
                                
                }
                // display the register form
                $this->render('register',array('model'=>$model));
        }

    public function actionLogin()
    {
        $this->layout='//layouts/resume_login';

        $model=new LoginForm;
        if(!Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->homeUrl);
        }
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['LoginForm']))
        {
            $model->attributes=$_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()) {
                $this->redirect(array('main/sethistory'));
            }

//
//            var_dump(Yii::app()->user->isGuest);
        }


        $this->render('login',array(
            'model' => $model,
        ));
    }

    public function actionMessage()
    {
       
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionSethistory()
    {
        $login = new Loginhistory();
        $a['time'] = date('Y-m-d H:i:s');
        $a['userid'] = Yii::app()->User->getState('id');
        $login->attributes = $a;
        if($login->save())
        {
            $this->redirect(array('main/index'));
        }

    }

    public  function actionManagecv()
    {
        $userid = Yii::app()->User->getState('id');
        $list_resume = Yii::app()->db->createCommand()
            ->select('resumeid, name,headline,adds,updated,showsalary,avatar,salary,url, r.id ')
            ->from('resume r')
            ->join('resumedetail rd', 'r.id=rd.resumeid')
            ->where("userid = $userid")
            ->queryAll();

//        echo "<pre>";
//        print_r($resume_infos); exit();


        $this->layout='//layouts/resume_page';
        $this->render('managecv',array(
            'list_resume' => $list_resume,
        ));
    }

    public  function  actionAddmoreresume()
    {
        $resume = new Resume();
        $resume_info['userid'] = Yii::app()->User->getState('id');
        $resume_info['datecreate'] = date('Y-m-d H:i:s');
        $resume_info['updated'] = date('Y-m-d H:i:s');
        $resume_info['public'] = 'yes';
        $resume_info['weight'] = 0;
        $resume_info['location'] = '';
        $resume_info['url'] = '';
        $resume_info['showsalary'] = 'yes';
        $resume_info['showphone'] = 'yes';
        $resume_info['template'] = '1';
        $resume->attributes = $resume_info;

        if($resume->save())
        {
            $reumeDetail = new Resumedetail();
            $reumeDetail_info['resumeid'] = $resume->id;
            $reumeDetail->attributes = $reumeDetail_info;
            $reumeDetail->save();


            $education = new Education();
            $education_Info['resumeid'] = $resume->id;
            $education_Info['userid'] = Yii::app()->User->getState('id');
            $education->attributes = $education_Info;
            $education->save();


            $exp = new Experience();
            $exp_Info['resumeid'] = $resume->id;
            $exp_Info['userid'] = Yii::app()->User->getState('id');
            $exp->attributes = $exp_Info;
            $exp->save();

            $this->redirect(array('main/createcv', 'id'=>$resume->id)); echo "It can be ";
            // $this->redirect(array('main/createcv', 'param1'=>'value1', 'param2'=>'value2',...))
            //Yii::app()->createUrl('/news/default/view', array('id' => $data->primaryKey))

        } else {
            echo "<pre>";
            print_r($resume->getErrors());
        }


    }

    public function actionCreatecv()
    {
        /** @var $_GET TYPE_NAME */
        if ( !isset( $_GET['q']  ) ) {
            $this->redirect(array('main/error'));
        }
        $resumeid = decryptIt($_GET['q']);

        $userid = Yii::app()->User->getState('id');
        $resume_infos = Yii::app()->db->createCommand()
            ->select('*')
            ->from('resume r')
            ->join('resumedetail rd', 'r.id=rd.resumeid')
            ->where("r.id=$resumeid")
            ->queryRow();
        $n = count($resume_infos);

        if ($userid != $resume_infos['userid'] || Yii::app()->user->isGuest || $n=0 ) {
            $this->redirect(array('main/error'));
        }
//        echo "<pre>";
//        print_r($resume_infos); exit();


        $this->layout='//layouts/resume_add';
        $this->render('createcv',array(
            'resumeid' => $resumeid,
            'userid' => $userid,
                'resume_infos' => $resume_infos,
        ));

    }

    public function  actionSettingcv() {

        if ( !isset( $_GET['q']  ) ) {
            $this->redirect(array('main/error'));
        } /* Auth*/

        $resumeid = decryptIt($_GET['q']); /* get id resume*/
        $userid = Yii::app()->User->getState('id'); /* get user id */
        $resume = Yii::app()->db->createCommand()
            ->select('*')
            ->from('resume r')
            ->join('resumedetail rd', 'r.id=rd.resumeid')
            ->where("r.id=$resumeid")
            ->queryRow();



//        echo "<pre>";
//        print_r($resume_infos); exit();


        $this->layout='//layouts/resume_page';
        $this->render('settingcv',array(
            'resume_infos' => $resume,
            'resumeid' => $resumeid,
            'userid' => $userid,
        ));

    }
    public function actionCv()
    {
        $this->layout='//layouts/template/default';
        if ( !isset( $_GET['q']  ) ) {
            $this->redirect(array('main/error'));
        } /* Auth*/
        $resumeid = decryptIt($_GET['q']); /* get id resume*/
        //$userid = Yii::app()->User->getState('id'); /* get user id */
        $resume = Yii::app()->db->createCommand()
            ->select('*')
            ->from('resume r')
            ->join('resumedetail rd', 'r.id=rd.resumeid')
            ->where("r.id=$resumeid")
            ->queryRow();
        $userid =   $resume['userid'];
         
        /*Skill*/
        $skills = Yii::app()->db->createCommand()
            ->select('*')
            ->from('skills')
            ->where(array('and', "resumeid = $resumeid", "userid = $userid"))
            ->queryAll();

        /* Experience:: */
        $exps = Yii::app()->db->createCommand()
            ->select('*')
            ->from('experiences')
            ->where(array('and', "resumeid = $resumeid", "userid = $userid"))
            ->queryAll();


        /* Education*/
        $educations = Yii::app()->db->createCommand()
            ->select('*')
            ->from('educations')
            ->where(array('and', "resumeid = $resumeid", "userid = $userid"))
            ->queryAll();

        $n = count($resume);
        if ($n=0 ) {
            $this->redirect(array('main/error'));
        } /* Auth*/


        $templateid = $resume['template'] ;
        if ($templateid  == 1) {

            $filename = 'default';
        } else {
            $filename = Yii::app()->db->createCommand()
                ->select('viewname')
                ->from('template')
                ->where("id = $templateid  ")
                ->queryRow();
            $filename =$filename["viewname"];
        }


        $this->render('template/'.$filename,array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume' => $resume,
            'skills' => $skills,
            'exps' => $exps,
            'educations' => $educations,
        ));

//        echo "<pre>";
//        print_r($resume);


    } /* END :: action cv */

    public  function actionError()
    {
        $this->layout='//layouts/404';
        $this->render('error',array(
//            'resumeid' => $resumeid,
//            'userid' => $userid,
//            'resume_infos' => $resume_infos,
        ));
    }



}
//end class