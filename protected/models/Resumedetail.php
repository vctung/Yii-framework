<?php

/**
 * This is the model class for table "resumedetail".
 *
 * The followings are the available columns in table 'resumedetail':
 * @property integer $id
 * @property string $name
 * @property string $headline
 * @property string $descriptions
 * @property string $adds
 * @property string $website
 * @property string $salary
 * @property string $age
 * @property string $email
 * @property string $phone
 * @property string $tags
 * @property string $cover
 * @property string $avatar
 * @property string $facebook
 * @property string $google
 * @property string $skype
 * @property string $linkedin
 * @property integer $resumeid
 */
class Resumedetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'resumedetail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('resumeid', 'numerical', 'integerOnly'=>true),
			array('salary, age, email, phone, tags, facebook, google, skype, linkedin', 'length', 'max'=>255),
			array('name, headline, descriptions, adds, website, cover, avatar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, headline, descriptions, adds, website, salary, age, email, phone, tags, cover, avatar, facebook, google, skype, linkedin, resumeid', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'headline' => 'Headline',
			'descriptions' => 'Descriptions',
			'adds' => 'Adds',
			'website' => 'Website',
			'salary' => 'Salary',
			'age' => 'Age',
			'email' => 'Email',
			'phone' => 'Phone',
			'tags' => 'Tags',
			'cover' => 'Cover',
			'avatar' => 'Avatar',
			'facebook' => 'Facebook',
			'google' => 'Google',
			'skype' => 'Skype',
			'linkedin' => 'Linkedin',
			'resumeid' => 'Resumeid',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('headline',$this->headline,true);
		$criteria->compare('descriptions',$this->descriptions,true);
		$criteria->compare('adds',$this->adds,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('salary',$this->salary,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('cover',$this->cover,true);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('google',$this->google,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('linkedin',$this->linkedin,true);
		$criteria->compare('resumeid',$this->resumeid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Resumedetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
