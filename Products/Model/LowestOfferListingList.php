<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * LowestOfferListingList
 *
 * Properties:
 * <ul>
 * <li>LowestOfferListing: array</li>
 * </ul>
 */
class LowestOfferListingList extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'LowestOfferListing' => array('FieldValue' => array(), 'FieldType' => array(__NAMESPACE__.'\\LowestOfferListingType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestOfferListing property.
     *
     * @return List<LowestOfferListingType> LowestOfferListing.
     */
    public function getLowestOfferListing()
    {
        if ($this->_fields['LowestOfferListing']['FieldValue'] == null) {
            $this->_fields['LowestOfferListing']['FieldValue'] = array();
        }
        return $this->_fields['LowestOfferListing']['FieldValue'];
    }

    /**
     * Set the value of the LowestOfferListing property.
     *
     * @param array lowestOfferListing
     * @return this instance
     */
    public function setLowestOfferListing($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array ($value);
        }
        $this->_fields['LowestOfferListing']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear LowestOfferListing.
     */
    public function unsetLowestOfferListing()
    {
        $this->_fields['LowestOfferListing']['FieldValue'] = array();
    }

    /**
     * Check to see if LowestOfferListing is set.
     *
     * @return true if LowestOfferListing is set.
     */
    public function isSetLowestOfferListing()
    {
        return !empty($this->_fields['LowestOfferListing']['FieldValue']);
    }

    /**
     * Add values for LowestOfferListing, return this.
     *
     * @param lowestOfferListing
     *             New values to add.
     *
     * @return This instance.
     */
    public function withLowestOfferListing()
    {
        foreach (func_get_args() as $LowestOfferListing) {
            $this->_fields['LowestOfferListing']['FieldValue'][] = $LowestOfferListing;
        }
        return $this;
    }
}
