<?php

namespace Amazon\MWS\MerchantFulfillment\Model;

use Amazon\MWS\MerchantFulfillment\Model;

/**
 * ShippingService
 *
 * Properties:
 * <ul>
 * <li>ShippingServiceName: string</li>
 * <li>CarrierName: string</li>
 * <li>ShippingServiceId: string</li>
 * <li>ShippingServiceOfferId: string</li>
 * <li>ShipDate: string</li>
 * <li>EarliestEstimatedDeliveryDate: string</li>
 * <li>LatestEstimatedDeliveryDate: string</li>
 * <li>Rate: CurrencyAmount</li>
 * <li>ShippingServiceOptions: ShippingServiceOptions</li>
 * </ul>
 */
class ShippingService extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ShippingServiceName'           => array('FieldValue' => null, 'FieldType' => 'string'),
            'CarrierName'                   => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShippingServiceId'             => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShippingServiceOfferId'        => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipDate'                      => array('FieldValue' => null, 'FieldType' => 'string'),
            'EarliestEstimatedDeliveryDate' => array('FieldValue' => null, 'FieldType' => 'string'),
            'LatestEstimatedDeliveryDate'   => array('FieldValue' => null, 'FieldType' => 'string'),
            'Rate'                          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\CurrencyAmount'),
            'ShippingServiceOptions'        => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ShippingServiceOptions'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ShippingServiceName property.
     *
     * @return String ShippingServiceName.
     */
    public function getShippingServiceName()
    {
        return $this->_fields['ShippingServiceName']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceName property.
     *
     * @param string shippingServiceName
     * @return this instance
     */
    public function setShippingServiceName($value)
    {
        $this->_fields['ShippingServiceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceName is set.
     *
     * @return true if ShippingServiceName is set.
     */
    public function isSetShippingServiceName()
    {
        return !is_null($this->_fields['ShippingServiceName']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceName, return this.
     *
     * @param shippingServiceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceName($value)
    {
        $this->setShippingServiceName($value);
        return $this;
    }

    /**
     * Get the value of the CarrierName property.
     *
     * @return String CarrierName.
     */
    public function getCarrierName()
    {
        return $this->_fields['CarrierName']['FieldValue'];
    }

    /**
     * Set the value of the CarrierName property.
     *
     * @param string carrierName
     * @return this instance
     */
    public function setCarrierName($value)
    {
        $this->_fields['CarrierName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierName is set.
     *
     * @return true if CarrierName is set.
     */
    public function isSetCarrierName()
    {
        return !is_null($this->_fields['CarrierName']['FieldValue']);
    }

    /**
     * Set the value of CarrierName, return this.
     *
     * @param carrierName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierName($value)
    {
        $this->setCarrierName($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceId property.
     *
     * @return String ShippingServiceId.
     */
    public function getShippingServiceId()
    {
        return $this->_fields['ShippingServiceId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceId property.
     *
     * @param string shippingServiceId
     * @return this instance
     */
    public function setShippingServiceId($value)
    {
        $this->_fields['ShippingServiceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceId is set.
     *
     * @return true if ShippingServiceId is set.
     */
    public function isSetShippingServiceId()
    {
        return !is_null($this->_fields['ShippingServiceId']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceId, return this.
     *
     * @param shippingServiceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceId($value)
    {
        $this->setShippingServiceId($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOfferId property.
     *
     * @return String ShippingServiceOfferId.
     */
    public function getShippingServiceOfferId()
    {
        return $this->_fields['ShippingServiceOfferId']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOfferId property.
     *
     * @param string shippingServiceOfferId
     * @return this instance
     */
    public function setShippingServiceOfferId($value)
    {
        $this->_fields['ShippingServiceOfferId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOfferId is set.
     *
     * @return true if ShippingServiceOfferId is set.
     */
    public function isSetShippingServiceOfferId()
    {
        return !is_null($this->_fields['ShippingServiceOfferId']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceOfferId, return this.
     *
     * @param shippingServiceOfferId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOfferId($value)
    {
        $this->setShippingServiceOfferId($value);
        return $this;
    }

    /**
     * Get the value of the ShipDate property.
     *
     * @return XMLGregorianCalendar ShipDate.
     */
    public function getShipDate()
    {
        return $this->_fields['ShipDate']['FieldValue'];
    }

    /**
     * Set the value of the ShipDate property.
     *
     * @param string shipDate
     * @return this instance
     */
    public function setShipDate($value)
    {
        $this->_fields['ShipDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipDate is set.
     *
     * @return true if ShipDate is set.
     */
    public function isSetShipDate()
    {
        return !is_null($this->_fields['ShipDate']['FieldValue']);
    }

    /**
     * Set the value of ShipDate, return this.
     *
     * @param shipDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipDate($value)
    {
        $this->setShipDate($value);
        return $this;
    }

    /**
     * Get the value of the EarliestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar EarliestEstimatedDeliveryDate.
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the EarliestEstimatedDeliveryDate property.
     *
     * @param string earliestEstimatedDeliveryDate
     * @return this instance
     */
    public function setEarliestEstimatedDeliveryDate($value)
    {
        $this->_fields['EarliestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EarliestEstimatedDeliveryDate is set.
     *
     * @return true if EarliestEstimatedDeliveryDate is set.
     */
    public function isSetEarliestEstimatedDeliveryDate()
    {
        return !is_null($this->_fields['EarliestEstimatedDeliveryDate']['FieldValue']);
    }

    /**
     * Set the value of EarliestEstimatedDeliveryDate, return this.
     *
     * @param earliestEstimatedDeliveryDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEarliestEstimatedDeliveryDate($value)
    {
        $this->setEarliestEstimatedDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the LatestEstimatedDeliveryDate property.
     *
     * @return XMLGregorianCalendar LatestEstimatedDeliveryDate.
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'];
    }

    /**
     * Set the value of the LatestEstimatedDeliveryDate property.
     *
     * @param string latestEstimatedDeliveryDate
     * @return this instance
     */
    public function setLatestEstimatedDeliveryDate($value)
    {
        $this->_fields['LatestEstimatedDeliveryDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LatestEstimatedDeliveryDate is set.
     *
     * @return true if LatestEstimatedDeliveryDate is set.
     */
    public function isSetLatestEstimatedDeliveryDate()
    {
        return !is_null($this->_fields['LatestEstimatedDeliveryDate']['FieldValue']);
    }

    /**
     * Set the value of LatestEstimatedDeliveryDate, return this.
     *
     * @param latestEstimatedDeliveryDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLatestEstimatedDeliveryDate($value)
    {
        $this->setLatestEstimatedDeliveryDate($value);
        return $this;
    }

    /**
     * Get the value of the Rate property.
     *
     * @return CurrencyAmount Rate.
     */
    public function getRate()
    {
        return $this->_fields['Rate']['FieldValue'];
    }

    /**
     * Set the value of the Rate property.
     *
     * @param CurrencyAmount rate
     * @return this instance
     */
    public function setRate($value)
    {
        $this->_fields['Rate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Rate is set.
     *
     * @return true if Rate is set.
     */
    public function isSetRate()
    {
        return !is_null($this->_fields['Rate']['FieldValue']);
    }

    /**
     * Set the value of Rate, return this.
     *
     * @param rate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRate($value)
    {
        $this->setRate($value);
        return $this;
    }

    /**
     * Get the value of the ShippingServiceOptions property.
     *
     * @return ShippingServiceOptions ShippingServiceOptions.
     */
    public function getShippingServiceOptions()
    {
        return $this->_fields['ShippingServiceOptions']['FieldValue'];
    }

    /**
     * Set the value of the ShippingServiceOptions property.
     *
     * @param ShippingServiceOptions shippingServiceOptions
     * @return this instance
     */
    public function setShippingServiceOptions($value)
    {
        $this->_fields['ShippingServiceOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingServiceOptions is set.
     *
     * @return true if ShippingServiceOptions is set.
     */
    public function isSetShippingServiceOptions()
    {
        return !is_null($this->_fields['ShippingServiceOptions']['FieldValue']);
    }

    /**
     * Set the value of ShippingServiceOptions, return this.
     *
     * @param shippingServiceOptions
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingServiceOptions($value)
    {
        $this->setShippingServiceOptions($value);
        return $this;
    }
}
