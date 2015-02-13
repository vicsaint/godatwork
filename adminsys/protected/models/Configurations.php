<?php

/**
 * This is the model class for table "configurations".
 *
 * The followings are the available columns in table 'configurations':
 * @property integer $settingid
 * @property string $name
 * @property string $value
 * @property string $description
 * @property string $filename
 * @property string $createdon
 * @property integer $createdby
 * @property string $updatedon
 * @property integer $updatedby
 * @property integer $status
 */
class Configurations extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Configurations the static model class
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
		return 'configurations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, value, description, updatedon, updatedby, status', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('value, description', 'length', 'max'=>255),
			array('filename', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('settingid, name, value, description, filename, createdon, createdby, updatedon, updatedby, status', 'safe', 'on'=>'search'),
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
			'settingid' => 'Settingid',
			'name' => 'Name',
			'value' => 'Value',
			'description' => 'Description',
			'filename' => 'Filename',
			'createdon' => 'Createdon',
			'createdby' => 'Createdby',
			'updatedon' => 'Updatedon',
			'updatedby' => 'Updatedby',
			'status' => 'Status',
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

		$criteria->compare('settingid',$this->settingid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('createdon',$this->createdon,true);
		$criteria->compare('createdby',$this->createdby);
		$criteria->compare('updatedon',$this->updatedon,true);
		$criteria->compare('updatedby',$this->updatedby);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}