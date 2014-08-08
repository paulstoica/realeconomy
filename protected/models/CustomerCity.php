<?php

/**
 * This is the model class for table "customer_city".
 *
 * The followings are the available columns in table 'customer_city':
 * @property integer $id
 * @property string $country_code
 * @property string $region_code
 * @property string $city
 * @property string $postalCode
 * @property string $latitude
 * @property string $longitude
 * @property string $metroCode
 * @property string $areaCode
 */
class CustomerCity extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer_city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('country_code, region_code, city, postalCode, latitude, longitude, metroCode, areaCode', 'required'),
			array('country_code, region_code, city', 'length', 'max'=>255),
			array('postalCode, latitude, longitude, metroCode, areaCode', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, country_code, region_code, city, postalCode, latitude, longitude, metroCode, areaCode', 'safe', 'on'=>'search'),
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
			'country_code' => 'Country Code',
			'region_code' => 'Region Code',
			'city' => 'City',
			'postalCode' => 'Postal Code',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'metroCode' => 'Metro Code',
			'areaCode' => 'Area Code',
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
		$criteria->compare('country_code',$this->country_code,true);
		$criteria->compare('region_code',$this->region_code,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('postalCode',$this->postalCode,true);
		$criteria->compare('latitude',$this->latitude,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('metroCode',$this->metroCode,true);
		$criteria->compare('areaCode',$this->areaCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerCity the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
