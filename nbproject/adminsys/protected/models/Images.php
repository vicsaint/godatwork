<?php

/**
 * This is the model class for table "images".
 *
 * The followings are the available columns in table 'images':
 * @property string $title
 * @property string $filename
 * @property string $reference_code
 * @property string $reference
 * @property integer $createdon
 * @property string $createdby
 * @property string $updatedon
 * @property string $updatedby
 * @property integer $status
 * @property string $url
 */
class Images extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Images the static model class
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
		return 'images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, filename, reference_code, reference, createdon, createdby, updatedon, updatedby, status, url', 'required'),
			array('createdon, status', 'numerical', 'integerOnly'=>true),
			array('title, filename', 'length', 'max'=>100),
			array('reference_code, url', 'length', 'max'=>50),
			array('reference', 'length', 'max'=>1),
			array('createdby, updatedby', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('title, filename, reference_code, reference, createdon, createdby, updatedon, updatedby, status, url', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'filename' => 'Filename',
			'reference_code' => 'Reference Code',
			'reference' => 'Reference',
			'createdon' => 'Createdon',
			'createdby' => 'Createdby',
			'updatedon' => 'Updatedon',
			'updatedby' => 'Updatedby',
			'status' => 'Status',
			'url' => 'Url',
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

		$criteria->compare('title',$this->title,true);
		$criteria->compare('filename',$this->filename,true);
		$criteria->compare('reference_code',$this->reference_code,true);
		$criteria->compare('reference',$this->reference,true);
		$criteria->compare('createdon',$this->createdon);
		$criteria->compare('createdby',$this->createdby,true);
		$criteria->compare('updatedon',$this->updatedon,true);
		$criteria->compare('updatedby',$this->updatedby,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}