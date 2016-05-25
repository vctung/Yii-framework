<?php

/**
 * This is the model class for table "resume".
 *
 * The followings are the available columns in table 'resume':
 * @property integer $id
 * @property integer $userid
 * @property string $datecreate
 * @property string $updated
 * @property string $public
 * @property string $weight
 * @property string $location
 * @property string $url
 * @property string $showsalary
 * @property string $showphone
 * @property integer $template
 * @property string $language
 */
class Resume extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resume';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, datecreate, public, weight', 'required'),
			array('userid, template', 'numerical', 'integerOnly'=>true),
			array('public, showsalary, showphone', 'length', 'max'=>3),
			array('weight, language', 'length', 'max'=>10),
			array('url', 'length', 'max'=>255),
			array('updated, location', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, userid, datecreate, updated, public, weight, location, url, showsalary, showphone, template, language', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userid' => 'Userid',
			'datecreate' => 'Datecreate',
			'updated' => 'Updated',
			'public' => 'Public',
			'weight' => 'Weight',
			'location' => 'Location',
			'url' => 'Url',
			'showsalary' => 'Showsalary',
			'showphone' => 'Showphone',
			'template' => 'Template',
			'language' => 'Language',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('public',$this->public,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('showsalary',$this->showsalary,true);
		$criteria->compare('showphone',$this->showphone,true);
		$criteria->compare('template',$this->template);
		$criteria->compare('language',$this->language,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resume the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
