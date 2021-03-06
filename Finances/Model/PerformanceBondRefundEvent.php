<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * PerformanceBondRefundEvent
 *
 * Properties:
 * <ul>
 * <li>MarketplaceCountryCode: string</li>
 * <li>Amount: Currency</li>
 * <li>ProductGroupList: array</li>
 * </ul>
 */
class PerformanceBondRefundEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'MarketplaceCountryCode' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Amount'                 => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
            'ProductGroupList'       => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'ProductGroup'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceCountryCode property.
     *
     * @return String MarketplaceCountryCode.
     */
    public function getMarketplaceCountryCode()
    {
        return $this->_fields['MarketplaceCountryCode']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceCountryCode property.
     *
     * @param string marketplaceCountryCode
     * @return this instance
     */
    public function setMarketplaceCountryCode($value)
    {
        $this->_fields['MarketplaceCountryCode']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceCountryCode is set.
     *
     * @return true if MarketplaceCountryCode is set.
     */
    public function isSetMarketplaceCountryCode()
    {
        return !is_null($this->_fields['MarketplaceCountryCode']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceCountryCode, return this.
     *
     * @param marketplaceCountryCode
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceCountryCode($value)
    {
        $this->setMarketplaceCountryCode($value);
        return $this;
    }

    /**
     * Get the value of the Amount property.
     *
     * @return Currency Amount.
     */
    public function getAmount()
    {
        return $this->_fields['Amount']['FieldValue'];
    }

    /**
     * Set the value of the Amount property.
     *
     * @param Currency amount
     * @return this instance
     */
    public function setAmount($value)
    {
        $this->_fields['Amount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Amount is set.
     *
     * @return true if Amount is set.
     */
    public function isSetAmount()
    {
        return !is_null($this->_fields['Amount']['FieldValue']);
    }

    /**
     * Set the value of Amount, return this.
     *
     * @param amount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmount($value)
    {
        $this->setAmount($value);
        return $this;
    }

    /**
     * Get the value of the ProductGroupList property.
     *
     * @return List<String> ProductGroupList.
     */
    public function getProductGroupList()
    {
        if ($this->_fields['ProductGroupList']['FieldValue'] == null) {
            $this->_fields['ProductGroupList']['FieldValue'] = array();
        }
        return $this->_fields['ProductGroupList']['FieldValue'];
    }

    /**
     * Set the value of the ProductGroupList property.
     *
     * @param array productGroupList
     * @return this instance
     */
    public function setProductGroupList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['ProductGroupList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ProductGroupList.
     */
    public function unsetProductGroupList()
    {
        $this->_fields['ProductGroupList']['FieldValue'] = array();
    }

    /**
     * Check to see if ProductGroupList is set.
     *
     * @return true if ProductGroupList is set.
     */
    public function isSetProductGroupList()
    {
        return !empty($this->_fields['ProductGroupList']['FieldValue']);
    }

    /**
     * Add values for ProductGroupList, return this.
     *
     * @param productGroupList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withProductGroupList()
    {
        foreach (func_get_args() as $ProductGroupList) {
            $this->_fields['ProductGroupList']['FieldValue'][] = $ProductGroupList;
        }
        return $this;
    }
}
