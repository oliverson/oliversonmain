<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $user_id
 * @property string $user_name
 * @property string $password
 * @property string $email
 * @property string $full_name
 * @property integer $is_management
 * @property integer $is_active
 * @property integer $is_ban
 * @property integer $is_delete
 * @property string $create_date
 * @property string $update_date
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
			array('user_name, password, email, full_name, create_date, update_date', 'required'),
			array('is_management, is_active, is_ban, is_delete', 'numerical', 'integerOnly'=>true),
			array('user_name, password', 'length', 'max'=>32),
			array('email', 'length', 'max'=>150),
			array('full_name', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_name, password, email, full_name, is_management, is_active, is_ban, is_delete, create_date, update_date', 'safe', 'on'=>'search'),
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
			'user_id' => Yii::t('backend','db.user_id'),
			'user_name' => Yii::t('backend','db.user_name'),
			'password' => Yii::t('backend','db.password'),
			'email' => Yii::t('backend','db.email'),
			'full_name' => Yii::t('backend','db.full_name'),
			'is_management' => Yii::t('backend','db.is_management'),
			'is_active' => Yii::t('backend','db.is_active'),
			'is_ban' => Yii::t('backend','db.is_ban'),
			'is_delete' => Yii::t('backend','db.is_delete'),
			'create_date' => Yii::t('backend','db.create_date'),
			'update_date' => Yii::t('backend','db.update_date'),
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
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('is_management',$this->is_management);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('is_ban',$this->is_ban);
		$criteria->compare('is_delete',$this->is_delete);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}