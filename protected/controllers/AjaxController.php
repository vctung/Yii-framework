<?php
class AjaxController extends Controller
{



	public function actionIndex()
	{	

		// echo "<pre>";
		$username = 'boss';
		
		$check_username = Yii::app()->db->createCommand()
	    ->select('*')
	    ->from('user')
	      ->where('username=:username', array(':username'=>$username ))
	    // ->limit('4')
	    // ->join('projectcategories pc', 'p.catid=pc.id')
	     ->order('id desc')
	  //  ->
	    ->queryAll();

		print_r($check_username);
		echo count($check_username);

 		exit();
		
	}


	public function actionCheckusername()
	{

			if (  isset($_POST['username'] )  ) {
                $modelName = "user";
                $fieldName = "username";
				$fieldData = $_POST['username'];

					$check = Yii::app()->db->createCommand()
				    ->select('*')
				    ->from($modelName)
				    ->where("$fieldName=:fieldName", array(':fieldName'=>$fieldData ))
				    ->order('id desc')
				  	->queryAll();
				  	echo count($check);
			} else {
				echo 'false';
			}
		   
	}


    public function actionCheckemail()
    {

        if (  isset($_POST['email'] )  ) {
            $modelName = "user";
            $fieldName = "email";
            $fieldData = $_POST['email'];

            $check = Yii::app()->db->createCommand()
                ->select('*')
                ->from($modelName)
                ->where("$fieldName=:fieldName", array(':fieldName'=>$fieldData ))
                ->order('id desc')
                ->queryAll();
            echo count($check);
        } else {
            echo 'false';
        }

    }

    public function actionRegister()
    {

        if (  isset($_POST)) {
            $data = $_POST;
            $model = new User();
            $model->username = $data['username'];
            $model->email = $data['email'];
            $model->password = md5($data['password']);
            $model->datecreate = date('Y-m-d');
            $model->role = "user";
            $model->avatar = "noavatar.jpg";
            if( $model->validate() )
            {
                if ( $model->save() ) {
                    echo 1;
                } else {
                    echo 0;
                }
            }else {
                echo "Cannot validate";
            }


        }


    }


    public function actionUpdateresume()
    {

        if ( !Yii::app()->user->isGuest ) {

            if (  isset($_POST ) && !empty($_POST) ) {
                $userid = Yii::app()->User->getState('id');
                $id = decryptIt($_POST['token']);
                $resumeid = $_POST['resumeid'];
                $modelName = $_POST['modelName'];
                $fieldName = $_POST['fieldName'];
                $data[$fieldName] = $_POST['fieldData'];

                /* Check Suitable user and resume */
                $check = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from($modelName)
                    ->where(array("and","id =$id "))
                    ->order('id desc')
                    ->queryRow();

//                var_dump($id);
//                var_dump($modelName);
//                var_dump($check);
//                echo $check->getQuery();
//                exit();

                if ( $check == 0 ) {
                    echo "false";

                } else {

                    $check[$fieldName] = $_POST['fieldData'];
                    $modelName =ucfirst($modelName);

                    $model = $modelName::model()->find(array(
                        'select'=>'*',
                        "condition"=>"id=$id",
                    ));
                    $model->attributes =$check;


                    if($model->save())
                    {
                        echo "Save";
                    }else {
                        echo "<pre>";
                        print_r($model->getErrors());
                    }
                }
            }

        } else {
            echo "login_error";
        }

    }



/*where(array('and', 'id=1', array('or', 'type=2', 'type=3')))
// WHERE `id` IN (1, 2) */

    public  function actionGetplace()
    {
        $place = Yii::app()->db->createCommand()
            ->select('name')
            ->from('place')
//            ->where("$fieldName=:fieldName", array(':fieldName'=>$fieldData ))
//            ->order('id desc')
            ->queryAll();

//        echo "<pre>";
        echo json_encode($place);
    }


    public function actionChangeImage()
    {
//                echo "<pre>";
//        var_dump($_POST);
//
//        exit;
        //'/'.$name.'__'.$data['type'].

        $data = $_POST;
        $id = decryptIt($_POST['token']);
        /* kick base64 to  image*/
        $img = $data['fieldData'];
        $img = str_replace('data:image/jpeg;base64,', '', $img);
        $img = str_replace('data:image/png;base64,', '', $img);
        $name = md5(Yii::app()->User->getState('id')."___".$id);
        file_put_contents('images/resume/'.$data['type'].'/'.$name.'.jpg', base64_decode($img));
        /* kick base64 to  image*/


        /* Save to database*/
        $check[ $_POST['fieldName'] ] = $name.'.jpg';
        $modelName = ucfirst($_POST['modelName']);

        $model = $modelName::model()->find(array(
            'select'=>'*',
            "condition"=>"id=$id",
        ));

        $model->attributes =$check;


        if($model->save())
        {
            echo "Save";
        }else {
            echo "<pre>";
            print_r($model->getErrors());
        }
        /* END :: Save to database*/



    } /*Funtion upload image base 64*/

    public function actionAddbox()
    {

        $data = $_POST;
        $save['resumeid'] = $data['resumeid'];
        $save['userid'] = Yii::app()->User->getState('id');

        switch($data['type'])
        {
            case "skills":
                $model = new Skills();
                break;
            case "educations":
                $save['logo'] = "logo-default.png";
                $model = new Educations();
                break;
            case "experience":
                $save['logo'] = "logo-default.png";
                $model = new Experiences();
                break;
        }

        $model->attributes = $save;

            if ( $model->save() ) {
                echo  encryptIt($model->id);
            } else {
                echo 0;
            }

    }

    public  function actionRemoveItem()
    {
        $data = $_POST;
        $resumeid = $data['resumeid'];
        $id = decryptIt($data['token']);
        $model = $data['type'];
        $userid = Yii::app()->User->getState('id');

        $resume_infos = Yii::app()->db->createCommand()
            ->select('userid')
            ->from('resume r')
            ->join('resumedetail rd', 'r.id=rd.resumeid')
            ->where("r.id=$resumeid")
            ->queryRow();

//        echo "<pre>";
        if ($resume_infos['userid'] ==  $userid ) {
            $modelName = ucfirst(  $model );
            $model=$modelName::model()->findByPk($id);
            if($model->delete() ) {
                echo "ok";
            } else if($model===null) {
                throw new CHttpException(404,'The requested page does not exist.');
            }
        } else {
            echo 'false';
        }
    }

    public  function actionPortfolio()
    {
        $data = $_POST;
        $resumeid = $data['resumeid'];
        $userid = Yii::app()->User->getState('id');

        switch($data['action']) {
            case "get";
                $portfolios_cat = Yii::app()->db->createCommand()
                    ->select('*')
                    ->from('portfolios')
                    ->where(array('and', "resumeid = $resumeid", "userid =  $userid "))
                    ->order('id desc')
                    ->queryAll();
                $n = count($portfolios_cat);
                if ($n=0 ) {
                    echo "Error";
                } /* Auth*/ else {
                    echo json_encode($portfolios_cat);
                }
            break;
        }

    }

    public  function actionTest()
    {
        $lang ='vi';
        $code = "TEST";
        echo $a = Trans($lang, $code);


    }




}
//end class
