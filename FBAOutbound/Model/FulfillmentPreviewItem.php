<?php

namespace Amazon\MWS\FBAOutbound\Model;

use Amazon\MWS\FBAOutbound\Model;

/**
 * FulfillmentPreviewItem
 *
 * Properties:
 * <ul>
 * <li>SellerSKU: string</li>
 * <li>Quantity: int</li>
 * <li>SellerFulfillmentOrderItemId: string</li>
 * <li>EstimatedShippingWeight: Weight</li>
 * <li>ShippingWeightCalculationMethod: string</li>
 * </ul>
 */
class FulfillmentPreviewItem extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'SellerSKU'                       => array('FieldValue' => null, 'FieldType' => 'string'),
            'Quantity'                        => array('FieldValue' => null, 'FieldType' => 'int'),
            'SellerFulfillmentOrderItemId'    => array('FieldValue' => null, 'FieldType' => 'string'),
            'EstimatedShippingWeight'         => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\Weight'),
            'ShippingWeightCalculationMethod' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return this instance
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Get the value of the Quantity property.
     *
     * @return int Quantity.
     */
    public function getQuantity()
    {
        return $this->_fields['Quantity']['FieldValue'];
    }

    /**
     * Set the value of the Quantity property.
     *
     * @param int quantity
     * @return this instance
     */
    public function setQuantity($value)
    {
        $this->_fields['Quantity']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Quantity is set.
     *
     * @return true if Quantity is set.
     */
    public function isSetQuantity()
    {
        return !is_null($this->_fields['Quantity']['FieldValue']);
    }

    /**
     * Set the value of Quantity, return this.
     *
     * @param quantity
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withQuantity($value)
    {
        $this->setQuantity($value);
        return $this;
    }

    /**
     * Get the value of the SellerFulfillmentOrderItemId property.
     *
     * @return String SellerFulfillmentOrderItemId.
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'];
    }

    /**
     * Set the value of the SellerFulfillmentOrderItemId property.
     *
     * @param string sellerFulfillmentOrderItemId
     * @return this instance
     */
    public function setSellerFulfillmentOrderItemId($value)
    {
        $this->_fields['SellerFulfillmentOrderItemId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerFulfillmentOrderItemId is set.
     *
     * @return true if SellerFulfillmentOrderItemId is set.
     */
    public function isSetSellerFulfillmentOrderItemId()
    {
        return !is_null($this->_fields['SellerFulfillmentOrderItemId']['FieldValue']);
    }

    /**
     * Set the value of SellerFulfillmentOrderItemId, return this.
     *
     * @param sellerFulfillmentOrderItemId
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withSellerFulfillmentOrderItemId($value)
    {
        $this->setSellerFulfillmentOrderItemId($value);
        return $this;
    }

    /**
     * Get the value of the EstimatedShippingWeight property.
     *
     * @return Weight EstimatedShippingWeight.
     */
    public function getEstimatedShippingWeight()
    {
        return $this->_fields['EstimatedShippingWeight']['FieldValue'];
    }

    /**
     * Set the value of the EstimatedShippingWeight property.
     *
     * @param Weight estimatedShippingWeight
     * @return this instance
     */
    public function setEstimatedShippingWeight($value)
    {
        $this->_fields['EstimatedShippingWeight']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if EstimatedShippingWeight is set.
     *
     * @return true if EstimatedShippingWeight is set.
     */
    public function isSetEstimatedShippingWeight()
    {
        return !is_null($this->_fields['EstimatedShippingWeight']['FieldValue']);
    }

    /**
     * Set the value of EstimatedShippingWeight, return this.
     *
     * @param estimatedShippingWeight
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withEstimatedShippingWeight($value)
    {
        $this->setEstimatedShippingWeight($value);
        return $this;
    }

    /**
     * Get the value of the ShippingWeightCalculationMethod property.
     *
     * @return String ShippingWeightCalculationMethod.
     */
    public function getShippingWeightCalculationMethod()
    {
        return $this->_fields['ShippingWeightCalculationMethod']['FieldValue'];
    }

    /**
     * Set the value of the ShippingWeightCalculationMethod property.
     *
     * @param string shippingWeightCalculationMethod
     * @return this instance
     */
    public function setShippingWeightCalculationMethod($value)
    {
        $this->_fields['ShippingWeightCalculationMethod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShippingWeightCalculationMethod is set.
     *
     * @return true if ShippingWeightCalculationMethod is set.
     */
    public function isSetShippingWeightCalculationMethod()
    {
        return !is_null($this->_fields['ShippingWeightCalculationMethod']['FieldValue']);
    }

    /**
     * Set the value of ShippingWeightCalculationMethod, return this.
     *
     * @param shippingWeightCalculationMethod
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withShippingWeightCalculationMethod($value)
    {
        $this->setShippingWeightCalculationMethod($value);
        return $this;
    }
}
