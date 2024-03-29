<?php

/**
 * This is the model class for table "folder".
 *
 * The followings are the available columns in table 'folder':
 * @property integer $folder_id
 * @property integer $user_id
 * @property integer $category_id
 * @property string $folder_name
 * @property string $folder_description
 * @property string $reference_link
 * @property string $time_log
 *
 * The followings are the available model relations:
 * @property Assets[] $assets
 * @property Users $user
 * @property Category $category
 */
class Folder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Folder the static model class
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
		return 'folder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' category_id, folder_name', 'required'),
			array(' category_id', 'numerical', 'integerOnly'=>true),
			array('folder_name, reference_link', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('folder_id, user_id, category_id, folder_name, folder_description, reference_link, time_log', 'safe', 'on'=>'search'),
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
			'assets' => array(self::HAS_MANY, 'Assets', 'folder_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
		);
			
	
	
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'folder_id' => 'Folder',
			'user_id' => 'User',
			'category_id' => 'Category',
			'folder_name' => 'Folder Name',
			'folder_description' => 'Folder Description',
			'reference_link' => 'Reference Link',
			'time_log' => 'Time Log',
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

		$criteria->compare('folder_id',$this->folder_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('folder_name',$this->folder_name,true);
		$criteria->compare('folder_description',$this->folder_description,true);
		$criteria->compare('reference_link',$this->reference_link,true);
		$criteria->compare('time_log',$this->time_log,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}