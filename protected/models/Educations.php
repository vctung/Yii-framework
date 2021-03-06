<?php

/**
 * This is the model class for table "educations".
 *
 * The followings are the available columns in table 'educations':
 * @property integer $id
 * @property integer $resumeid
 * @property integer $userid
 * @property string $logo
 * @property string $degree
 * @property string $major
 * @property string $schoolname
 * @property string $from
 * @property string $to
 * @property string $description
 */
class Educations extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'educations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('resumeid, userid', 'required'),
			array('resumeid, userid', 'numerical', 'integerOnly'=>true),
			array('degree', 'length', 'max'=>255),
			array('from, to', 'length', 'max'=>20),
			array('logo, major, schoolname, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, resumeid, userid, logo, degree, major, schoolname, from, to, description', 'safe', 'on'=>'search'),
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
			'resumeid' => 'Resumeid',
			'userid' => 'Userid',
			'logo' => 'Logo',
			'degree' => 'Degree',
			'major' => 'Major',
			'schoolname' => 'Schoolname',
			'from' => 'From',
			'to' => 'To',
			'description' => 'Description',
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
		$criteria->compare('resumeid',$this->resumeid);
		$criteria->compare('userid',$this->userid);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('degree',$this->degree,true);
		$criteria->compare('major',$this->major,true);
		$criteria->compare('schoolname',$this->schoolname,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Educations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
