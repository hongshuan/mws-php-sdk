<?php

namespace Amazon\MWS\Products\Model;

use Amazon\MWS\Products\Model;

/**
 * GetMyPriceForSKURequest
 *
 * Properties:
 * <ul>
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>MarketplaceId: string</li>
 * <li>SellerSKUList: SellerSKUListType</li>
 * </ul>
 */
class GetMyPriceForSKURequest extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerId'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken'  => array('FieldValue' => null, 'FieldType' => 'string'),
            'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerSKUList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\SellerSKUListType'),
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
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return this instance
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Get the value of the SellerSKUList property.
     *
     * @return SellerSKUListType SellerSKUList.
     */
    public function getSellerSKUList()
    {
        return $this->_fields['SellerSKUList']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKUList property.
     *
     * @param SellerSKUListType sellerSKUList
     * @return this instance
     */
    public function setSellerSKUList($value)
    {
        $this->_fields['SellerSKUList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKUList is set.
     *
     * @return true if SellerSKUList is set.
     */
    public function isSetSellerSKUList()
    {
        return !is_null($this->_fields['SellerSKUList']['FieldValue']);
    }

    /**
     * Set the value of SellerSKUList, return this.
     *
     * @param sellerSKUList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKUList($value)
    {
        $this->setSellerSKUList($value);
        return $this;
    }
}
