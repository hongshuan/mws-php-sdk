<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * SellerSKUListType
 *
 * Properties:
 * <ul>
 * <li>SellerSKU: array</li>
 * </ul>
 */
class SellerSKUListType extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerSKU' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return List<String> SellerSKU.
     */
    public function getSellerSKU()
    {
        if ($this->_fields['SellerSKU']['FieldValue'] == null) {
            $this->_fields['SellerSKU']['FieldValue'] = array();
        }
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param array sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear SellerSKU.
     */
    public function unsetSellerSKU()
    {
        $this->_fields['SellerSKU']['FieldValue'] = array();
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !empty($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Add values for SellerSKU, return this.
     *
     * @param sellerSKU
     *             New values to add.
     *
     * @return This instance.
     */
    public function withSellerSKU()
    {
        foreach (func_get_args() as $SellerSKU) {
            $this->_fields['SellerSKU']['FieldValue'][] = $SellerSKU;
        }
        return $this;
    }
}
