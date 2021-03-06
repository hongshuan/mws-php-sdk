<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * NumberOfOfferListingsList
 *
 * Properties:
 * <ul>
 * <li>OfferListingCount: array</li>
 * </ul>
 */
class NumberOfOfferListingsList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'OfferListingCount' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\OfferListingCountType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the OfferListingCount property.
     *
     * @return List<OfferListingCountType> OfferListingCount.
     */
    public function getOfferListingCount()
    {
        if ($this->_fields['OfferListingCount']['FieldValue'] == null) {
            $this->_fields['OfferListingCount']['FieldValue'] = array();
        }
        return $this->_fields['OfferListingCount']['FieldValue'];
    }

    /**
     * Set the value of the OfferListingCount property.
     *
     * @param array offerListingCount
     * @return this instance
     */
    public function setOfferListingCount($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['OfferListingCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OfferListingCount.
     */
    public function unsetOfferListingCount()
    {
        $this->_fields['OfferListingCount']['FieldValue'] = array();
    }

    /**
     * Check to see if OfferListingCount is set.
     *
     * @return true if OfferListingCount is set.
     */
    public function isSetOfferListingCount()
    {
        return !empty($this->_fields['OfferListingCount']['FieldValue']);
    }

    /**
     * Add values for OfferListingCount, return this.
     *
     * @param offerListingCount
     *             New values to add.
     *
     * @return This instance.
     */
    public function withOfferListingCount()
    {
        foreach (func_get_args() as $OfferListingCount) {
            $this->_fields['OfferListingCount']['FieldValue'][] = $OfferListingCount;
        }
        return $this;
    }
}
