<?php

namespace Amazon\MWS\Finances\Model;

use Amazon\MWS\Finances\Model;

/**
 * RentalTransactionEvent
 *
 * Properties:
 * <ul>
 * <li>AmazonOrderId: string</li>
 * <li>RentalEventType: string</li>
 * <li>ExtensionLength: int</li>
 * <li>PostedDate: string</li>
 * <li>RentalChargeList: array</li>
 * <li>RentalFeeList: array</li>
 * <li>MarketplaceName: string</li>
 * <li>RentalInitialValue: Currency</li>
 * <li>RentalReimbursement: Currency</li>
 * </ul>
 */
class RentalTransactionEvent extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'AmazonOrderId'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'RentalEventType'     => array('FieldValue' => null, 'FieldType' => 'string'),
            'ExtensionLength'     => array('FieldValue' => null, 'FieldType' => 'int'),
            'PostedDate'          => array('FieldValue' => null, 'FieldType' => 'string'),
            'RentalChargeList'    => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\ChargeComponent'), 'ListMemberName' => 'ChargeComponent'),
            'RentalFeeList'       => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\FeeComponent'), 'ListMemberName' => 'FeeComponent'),
            'MarketplaceName'     => array('FieldValue' => null, 'FieldType' => 'string'),
            'RentalInitialValue'  => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
            'RentalReimbursement' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Currency'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the AmazonOrderId property.
     *
     * @return String AmazonOrderId.
     */
    public function getAmazonOrderId()
    {
        return $this->_fields['AmazonOrderId']['FieldValue'];
    }

    /**
     * Set the value of the AmazonOrderId property.
     *
     * @param string amazonOrderId
     * @return this instance
     */
    public function setAmazonOrderId($value)
    {
        $this->_fields['AmazonOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if AmazonOrderId is set.
     *
     * @return true if AmazonOrderId is set.
     */
    public function isSetAmazonOrderId()
    {
        return !is_null($this->_fields['AmazonOrderId']['FieldValue']);
    }

    /**
     * Set the value of AmazonOrderId, return this.
     *
     * @param amazonOrderId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withAmazonOrderId($value)
    {
        $this->setAmazonOrderId($value);
        return $this;
    }

    /**
     * Get the value of the RentalEventType property.
     *
     * @return String RentalEventType.
     */
    public function getRentalEventType()
    {
        return $this->_fields['RentalEventType']['FieldValue'];
    }

    /**
     * Set the value of the RentalEventType property.
     *
     * @param string rentalEventType
     * @return this instance
     */
    public function setRentalEventType($value)
    {
        $this->_fields['RentalEventType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RentalEventType is set.
     *
     * @return true if RentalEventType is set.
     */
    public function isSetRentalEventType()
    {
        return !is_null($this->_fields['RentalEventType']['FieldValue']);
    }

    /**
     * Set the value of RentalEventType, return this.
     *
     * @param rentalEventType
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRentalEventType($value)
    {
        $this->setRentalEventType($value);
        return $this;
    }

    /**
     * Get the value of the ExtensionLength property.
     *
     * @return Integer ExtensionLength.
     */
    public function getExtensionLength()
    {
        return $this->_fields['ExtensionLength']['FieldValue'];
    }

    /**
     * Set the value of the ExtensionLength property.
     *
     * @param int extensionLength
     * @return this instance
     */
    public function setExtensionLength($value)
    {
        $this->_fields['ExtensionLength']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ExtensionLength is set.
     *
     * @return true if ExtensionLength is set.
     */
    public function isSetExtensionLength()
    {
        return !is_null($this->_fields['ExtensionLength']['FieldValue']);
    }

    /**
     * Set the value of ExtensionLength, return this.
     *
     * @param extensionLength
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withExtensionLength($value)
    {
        $this->setExtensionLength($value);
        return $this;
    }

    /**
     * Get the value of the PostedDate property.
     *
     * @return XMLGregorianCalendar PostedDate.
     */
    public function getPostedDate()
    {
        return $this->_fields['PostedDate']['FieldValue'];
    }

    /**
     * Set the value of the PostedDate property.
     *
     * @param string postedDate
     * @return this instance
     */
    public function setPostedDate($value)
    {
        $this->_fields['PostedDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if PostedDate is set.
     *
     * @return true if PostedDate is set.
     */
    public function isSetPostedDate()
    {
        return !is_null($this->_fields['PostedDate']['FieldValue']);
    }

    /**
     * Set the value of PostedDate, return this.
     *
     * @param postedDate
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withPostedDate($value)
    {
        $this->setPostedDate($value);
        return $this;
    }

    /**
     * Get the value of the RentalChargeList property.
     *
     * @return List<ChargeComponent> RentalChargeList.
     */
    public function getRentalChargeList()
    {
        if ($this->_fields['RentalChargeList']['FieldValue'] == null) {
            $this->_fields['RentalChargeList']['FieldValue'] = array();
        }
        return $this->_fields['RentalChargeList']['FieldValue'];
    }

    /**
     * Set the value of the RentalChargeList property.
     *
     * @param array rentalChargeList
     * @return this instance
     */
    public function setRentalChargeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RentalChargeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RentalChargeList.
     */
    public function unsetRentalChargeList()
    {
        $this->_fields['RentalChargeList']['FieldValue'] = array();
    }

    /**
     * Check to see if RentalChargeList is set.
     *
     * @return true if RentalChargeList is set.
     */
    public function isSetRentalChargeList()
    {
        return !empty($this->_fields['RentalChargeList']['FieldValue']);
    }

    /**
     * Add values for RentalChargeList, return this.
     *
     * @param rentalChargeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRentalChargeList()
    {
        foreach (func_get_args() as $RentalChargeList) {
            $this->_fields['RentalChargeList']['FieldValue'][] = $RentalChargeList;
        }
        return $this;
    }

    /**
     * Get the value of the RentalFeeList property.
     *
     * @return List<FeeComponent> RentalFeeList.
     */
    public function getRentalFeeList()
    {
        if ($this->_fields['RentalFeeList']['FieldValue'] == null) {
            $this->_fields['RentalFeeList']['FieldValue'] = array();
        }
        return $this->_fields['RentalFeeList']['FieldValue'];
    }

    /**
     * Set the value of the RentalFeeList property.
     *
     * @param array rentalFeeList
     * @return this instance
     */
    public function setRentalFeeList($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['RentalFeeList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear RentalFeeList.
     */
    public function unsetRentalFeeList()
    {
        $this->_fields['RentalFeeList']['FieldValue'] = array();
    }

    /**
     * Check to see if RentalFeeList is set.
     *
     * @return true if RentalFeeList is set.
     */
    public function isSetRentalFeeList()
    {
        return !empty($this->_fields['RentalFeeList']['FieldValue']);
    }

    /**
     * Add values for RentalFeeList, return this.
     *
     * @param rentalFeeList
     *             New values to add.
     *
     * @return This instance.
     */
    public function withRentalFeeList()
    {
        foreach (func_get_args() as $RentalFeeList) {
            $this->_fields['RentalFeeList']['FieldValue'][] = $RentalFeeList;
        }
        return $this;
    }

    /**
     * Get the value of the MarketplaceName property.
     *
     * @return String MarketplaceName.
     */
    public function getMarketplaceName()
    {
        return $this->_fields['MarketplaceName']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceName property.
     *
     * @param string marketplaceName
     * @return this instance
     */
    public function setMarketplaceName($value)
    {
        $this->_fields['MarketplaceName']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceName is set.
     *
     * @return true if MarketplaceName is set.
     */
    public function isSetMarketplaceName()
    {
        return !is_null($this->_fields['MarketplaceName']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceName, return this.
     *
     * @param marketplaceName
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceName($value)
    {
        $this->setMarketplaceName($value);
        return $this;
    }

    /**
     * Get the value of the RentalInitialValue property.
     *
     * @return Currency RentalInitialValue.
     */
    public function getRentalInitialValue()
    {
        return $this->_fields['RentalInitialValue']['FieldValue'];
    }

    /**
     * Set the value of the RentalInitialValue property.
     *
     * @param Currency rentalInitialValue
     * @return this instance
     */
    public function setRentalInitialValue($value)
    {
        $this->_fields['RentalInitialValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RentalInitialValue is set.
     *
     * @return true if RentalInitialValue is set.
     */
    public function isSetRentalInitialValue()
    {
        return !is_null($this->_fields['RentalInitialValue']['FieldValue']);
    }

    /**
     * Set the value of RentalInitialValue, return this.
     *
     * @param rentalInitialValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRentalInitialValue($value)
    {
        $this->setRentalInitialValue($value);
        return $this;
    }

    /**
     * Get the value of the RentalReimbursement property.
     *
     * @return Currency RentalReimbursement.
     */
    public function getRentalReimbursement()
    {
        return $this->_fields['RentalReimbursement']['FieldValue'];
    }

    /**
     * Set the value of the RentalReimbursement property.
     *
     * @param Currency rentalReimbursement
     * @return this instance
     */
    public function setRentalReimbursement($value)
    {
        $this->_fields['RentalReimbursement']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if RentalReimbursement is set.
     *
     * @return true if RentalReimbursement is set.
     */
    public function isSetRentalReimbursement()
    {
        return !is_null($this->_fields['RentalReimbursement']['FieldValue']);
    }

    /**
     * Set the value of RentalReimbursement, return this.
     *
     * @param rentalReimbursement
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withRentalReimbursement($value)
    {
        $this->setRentalReimbursement($value);
        return $this;
    }
}
