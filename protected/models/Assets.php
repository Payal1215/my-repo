<?php

/**
 * This is the model class for table "assets".
 *
 * The followings are the available columns in table 'assets':
 * @property integer $asset_id
 * @property integer $folder_id
 * @property string $asset_current_path
 * @property string $asset_cloud_path
 * @property string $asset_name
 * @property string $thumbnail_path
 * @property string $time_log
 *
 * The followings are the available model relations:
 * @property Folder $folder
 */
class Assets extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Assets the static model class
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
		return 'assets';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('folder_id, asset_current_path, asset_cloud_path, asset_name, thumbnail_path', 'required'),
			array('folder_id', 'numerical', 'integerOnly'=>true),
			array('asset_current_path, asset_cloud_path, asset_name, thumbnail_path', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('asset_id, folder_id, asset_current_path, asset_cloud_path, asset_name, thumbnail_path, time_log', 'safe', 'on'=>'search'),
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
			'folder' => array(self::BELONGS_TO, 'Folder', 'folder_id'),
			
		);

	}

	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'asset_id' => 'Asset',
			'folder_id' => 'Folder',
			'asset_current_path' => 'Asset Current Path',
			'asset_cloud_path' => 'Asset Cloud Path',
			'asset_name' => 'Asset Name',
			'thumbnail_path' => 'Thumbnail Path',
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

		$criteria->compare('asset_id',$this->asset_id);
		$criteria->compare('folder_id',$this->folder_id);
		$criteria->compare('asset_current_path',$this->asset_current_path,true);
		$criteria->compare('asset_cloud_path',$this->asset_cloud_path,true);
		$criteria->compare('asset_name',$this->asset_name,true);
		$criteria->compare('thumbnail_path',$this->thumbnail_path,true);
		$criteria->compare('time_log',$this->time_log,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}