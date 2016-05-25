<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


	public function beforeAction($action) {
    if( parent::beforeAction($action) ) {
        /* @var $cs CClientScript */
        $cs = Yii::app()->clientScript;
        /* @var $theme CTheme */
        $theme = Yii::app()->theme;
        $cs->registerPackage('jquery');
        $cs->registerPackage('history');
        $cs->registerScriptFile( Yii::app()->request->baseUrl . '/js/ohsnap.js' );
        
        // $cs->registerScriptFile( $theme->getBaseUrl() . '/js/jquery.scrollTo-1.4.3.1-min.js' );
        //$cs->registerScriptFile( $theme->getBaseUrl() . '/js/jquery.scrollTo-min.js' );
        // $cs->registerScriptFile( $theme->getBaseUrl() . '/js/script.js' );
        // $cs->registerCssFile($theme->getBaseUrl() . '/css/reset.css');
        // $cs->registerCssFile($theme->getBaseUrl() . '/css/main.css');
        return true;
    }
    return false;
}


}