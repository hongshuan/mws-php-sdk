<?php

namespace Amazon\MWS\FBAInbound\Model;

use Amazon\MWS\FBAInbound\Model;

/**
 * GetPrepInstructionsForASINRequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>AsinList: AsinList</li>
 * <li>ShipToCountryCode: string</li>
 * </ul>
 */
class GetPrepInstructionsForASINRequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'AsinList'          => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\AsinList'),
            'ShipToCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string mwsAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return true if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the AsinList property.
     *
     * @return AsinList AsinList.
     */
    public function getAsinList()
    {
        return $this->_fields['AsinList']['FieldValue'];
    }

    /**
     * Set the value of the AsinList property.
     *
     * @param AsinList asinList
     * @return this instance
     */
    public function setAsinList($value)
    {
        $this->_fields['AsinList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AsinList is set.
     *
     * @return true if AsinList is set.
     */
    public function isSetAsinList()
    {
        return !is_null($this->_fields['AsinList']['FieldValue']);
    }

    /**
     * Set the value of AsinList, return this.
     *
     * @param asinList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAsinList($value)
    {
        $this->setAsinList($value);
        return $this;
    }

    /**
     * Get the value of the ShipToCountryCode property.
     *
     * @return String ShipToCountryCode.
     */
    public function getShipToCountryCode()
    {
        return $this->_fields['ShipToCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the ShipToCountryCode property.
     *
     * @param string shipToCountryCode
     * @return this instance
     */
    public function setShipToCountryCode($value)
    {
        $this->_fields['ShipToCountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipToCountryCode is set.
     *
     * @return true if ShipToCountryCode is set.
     */
    public function isSetShipToCountryCode()
    {
        return !is_null($this->_fields['ShipToCountryCode']['FieldValue']);
    }

    /**
     * Set the value of ShipToCountryCode, return this.
     *
     * @param shipToCountryCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShipToCountryCode($value)
    {
        $this->setShipToCountryCode($value);
        return $this;
    }
}
