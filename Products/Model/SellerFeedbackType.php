<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;


/**
 * SellerFeedbackType
 *
 * Properties:
 * <ul>
 * <li>SellerPositiveFeedbackRating: float</li>
 * <li>FeedbackCount: int</li>
 * </ul>
 */
class SellerFeedbackType extends MarketplaceWebServiceProducts_Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerPositiveFeedbackRating' => array('FieldValue' => null, 'FieldType' => 'float'),
            'FeedbackCount'                => array('FieldValue' => null, 'FieldType' => 'int'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerPositiveFeedbackRating property.
     *
     * @return Double SellerPositiveFeedbackRating.
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->_fields['SellerPositiveFeedbackRating']['FieldValue'];
    }

    /**
     * Set the value of the SellerPositiveFeedbackRating property.
     *
     * @param float sellerPositiveFeedbackRating
     * @return this instance
     */
    public function setSellerPositiveFeedbackRating($value)
    {
        $this->_fields['SellerPositiveFeedbackRating']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerPositiveFeedbackRating is set.
     *
     * @return true if SellerPositiveFeedbackRating is set.
     */
    public function isSetSellerPositiveFeedbackRating()
    {
        return !is_null($this->_fields['SellerPositiveFeedbackRating']['FieldValue']);
    }

    /**
     * Set the value of SellerPositiveFeedbackRating, return this.
     *
     * @param sellerPositiveFeedbackRating
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerPositiveFeedbackRating($value)
    {
        $this->setSellerPositiveFeedbackRating($value);
        return $this;
    }

    /**
     * Get the value of the FeedbackCount property.
     *
     * @return long FeedbackCount.
     */
    public function getFeedbackCount()
    {
        return $this->_fields['FeedbackCount']['FieldValue'];
    }

    /**
     * Set the value of the FeedbackCount property.
     *
     * @param int feedbackCount
     * @return this instance
     */
    public function setFeedbackCount($value)
    {
        $this->_fields['FeedbackCount']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if FeedbackCount is set.
     *
     * @return true if FeedbackCount is set.
     */
    public function isSetFeedbackCount()
    {
        return !is_null($this->_fields['FeedbackCount']['FieldValue']);
    }

    /**
     * Set the value of FeedbackCount, return this.
     *
     * @param feedbackCount
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withFeedbackCount($value)
    {
        $this->setFeedbackCount($value);
        return $this;
    }
}
