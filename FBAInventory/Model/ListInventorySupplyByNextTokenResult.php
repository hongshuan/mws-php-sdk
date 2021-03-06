<?php

namespace Amazon\MWS\FBAInventory\Model;

use Amazon\MWS\FBAInventory\Model;

/**
 * ListInventorySupplyByNextTokenResult
 *
 * Properties:
 * <ul>
 * <li>MarketplaceId: string</li>
 * <li>InventorySupplyList: InventorySupplyList</li>
 * <li>NextToken: string</li>
 * </ul>
 */
class ListInventorySupplyByNextTokenResult extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'MarketplaceId'       => array('FieldValue' => null, 'FieldType' => 'string'),
            'InventorySupplyList' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\InventorySupplyList'),
            'NextToken'           => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
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
     * Get the value of the InventorySupplyList property.
     *
     * @return InventorySupplyList InventorySupplyList.
     */
    public function getInventorySupplyList()
    {
        return $this->_fields['InventorySupplyList']['FieldValue'];
    }

    /**
     * Set the value of the InventorySupplyList property.
     *
     * @param InventorySupplyList inventorySupplyList
     * @return this instance
     */
    public function setInventorySupplyList($value)
    {
        $this->_fields['InventorySupplyList']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if InventorySupplyList is set.
     *
     * @return true if InventorySupplyList is set.
     */
    public function isSetInventorySupplyList()
    {
        return !is_null($this->_fields['InventorySupplyList']['FieldValue']);
    }

    /**
     * Set the value of InventorySupplyList, return this.
     *
     * @param inventorySupplyList
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withInventorySupplyList($value)
    {
        $this->setInventorySupplyList($value);
        return $this;
    }

    /**
     * Get the value of the NextToken property.
     *
     * @return String NextToken.
     */
    public function getNextToken()
    {
        return $this->_fields['NextToken']['FieldValue'];
    }

    /**
     * Set the value of the NextToken property.
     *
     * @param string nextToken
     * @return this instance
     */
    public function setNextToken($value)
    {
        $this->_fields['NextToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if NextToken is set.
     *
     * @return true if NextToken is set.
     */
    public function isSetNextToken()
    {
        return !is_null($this->_fields['NextToken']['FieldValue']);
    }

    /**
     * Set the value of NextToken, return this.
     *
     * @param nextToken
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withNextToken($value)
    {
        $this->setNextToken($value);
        return $this;
    }
}
