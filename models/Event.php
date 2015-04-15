<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property string $id
 * @property string $member_id
 * @property string $category_id
 * @property string $title
 * @property string $short_description
 * @property string $description
 * @property string $attach_file
 * @property string $state
 * @property string $request_date
 * @property string $due_date
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property Category $category
 * @property Member $member
 * @property MemberEventCc[] $memberEventCcs
 * @property MemberEventTo[] $memberEventTos
 */
class Event extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, category_id', 'required'),
			array('member_id, category_id, state', 'length', 'max'=>10),
			array('title, attach_file', 'length', 'max'=>64),
			array('short_description, description, request_date, due_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, member_id, category_id, title, short_description, description, attach_file, state, request_date, due_date', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comment', 'event_id'),
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
			'memberEventCcs' => array(self::HAS_MANY, 'MemberEventCc', 'event_id'),
			'memberEventTos' => array(self::HAS_MANY, 'MemberEventTo', 'event_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'member_id' => 'Member',
			'category_id' => 'Category',
			'title' => 'Title',
			'short_description' => 'Short Description',
			'description' => 'Description',
			'attach_file' => 'Attach File',
			'state' => 'State',
			'request_date' => 'Request Date',
			'due_date' => 'Due Date',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('category_id',$this->category_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('short_description',$this->short_description,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('attach_file',$this->attach_file,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('request_date',$this->request_date,true);
		$criteria->compare('due_date',$this->due_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
