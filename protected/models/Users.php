<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $user_id
 * @property string $lmw_id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property string $create_at
 * @property string $lastvisit_at
 *
 * The followings are the available model relations:
 * @property Folder[] $folders
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lmw_id, user_name, email, password', 'required'),
			array('lmw_id, password', 'length', 'max'=>20),
			array('user_name, email', 'length', 'max'=>50),
			array('lastvisit_at', 'safe'),
			array('user_name', 'length', 'max'=>20, 'min' => 3,'message' => "Incorrect username (length between 3 and 20 characters)."),
			array('password', 'length', 'max'=>128, 'min' => 4,'message' => "Incorrect password (minimal length 4 symbols)."),
			array('email', 'email'),
			array('user_name', 'unique', 'message' => "This user's name already exists."),
			array('email', 'unique', 'message' => "This user's email address already exists."),
			array('user_name', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u','message' => "Incorrect symbols (A-z0-9)."),
			array('create_at', 'default', 'value' => date('Y-m-d H:i:s'), 'setOnEmpty' => true, 'on' => 'insert'),
            array('lastvisit_at', 'default', 'value' => '0000-00-00 00:00:00', 'setOnEmpty' => true, 'on' => 'insert'),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, lmw_id, user_name, email, password, create_at, lastvisit_at', 'safe', 'on'=>'search'),
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
			'folders' => array(self::HAS_MANY, 'Folder', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'lmw_id' => 'Lmw ID',
			'user_name' => 'User Name',
			'email' => 'Email',
			'password' => 'Password',
			'create_at' => 'Create At',
			'lastvisit_at' => 'Lastvisit At',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('lmw_id',$this->lmw_id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvisit_at',$this->lastvisit_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}