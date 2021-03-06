<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * BuyBoxEligibleOffers
 *
 * Properties:
 * <ul>
 * <li>OfferCount: array</li>
 * </ul>
 */
class BuyBoxEligibleOffers extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'OfferCount' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\OfferCountType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the OfferCount property.
     *
     * @return List<OfferCountType> OfferCount.
     */
    public function getOfferCount()
    {
        if ($this->_fields['OfferCount']['FieldValue'] == null) {
            $this->_fields['OfferCount']['FieldValue'] = array();
        }
        return $this->_fields['OfferCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferCount property.
     *
     * @param array offerCount
     * @return this instance
     */
    public function setOfferCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OfferCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OfferCount.
     */
    public function unsetOfferCount()
    {
        $this->_fields['OfferCount']['FieldValue'] = array();
    }

    /**
     * Check to see if OfferCount is set.
     *
     * @return true if OfferCount is set.
     */
    public function isSetOfferCount()
    {
        return !empty($this->_fields['OfferCount']['FieldValue']);
    }

    /**
     * Add values for OfferCount, return this.
     *
     * @param offerCount
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOfferCount()
    {
        foreach (func_get_args() as $OfferCount) {
            $this->_fields['OfferCount']['FieldValue'][] = $OfferCount;
        }
        return $this;
    }
}
