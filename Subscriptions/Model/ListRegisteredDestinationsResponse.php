<?php

namespace Amazon\MWS\Subscriptions\Model;

/**
 * ListRegisteredDestinationsResponse
 *
 * Properties:
 * <ul>
 * <li>ListRegisteredDestinationsResult: ListRegisteredDestinationsResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 * </ul>
 */
class ListRegisteredDestinationsResponse extends Model
{
    public function __construct($data = null)
    {
        $this->_fields = array (
            'ListRegisteredDestinationsResult' => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ListRegisteredDestinationsResult'),
            'ResponseMetadata'                 => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseMetadata'),
            'ResponseHeaderMetadata'           => array('FieldValue' => null, 'FieldType' => __NAMESPACE__.'\\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ListRegisteredDestinationsResult property.
     *
     * @return ListRegisteredDestinationsResult ListRegisteredDestinationsResult.
     */
    public function getListRegisteredDestinationsResult()
    {
        return $this->_fields['ListRegisteredDestinationsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListRegisteredDestinationsResult property.
     *
     * @param ListRegisteredDestinationsResult listRegisteredDestinationsResult
     * @return this instance
     */
    public function setListRegisteredDestinationsResult($value)
    {
        $this->_fields['ListRegisteredDestinationsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListRegisteredDestinationsResult is set.
     *
     * @return true if ListRegisteredDestinationsResult is set.
     */
    public function isSetListRegisteredDestinationsResult()
    {
        return !is_null($this->_fields['ListRegisteredDestinationsResult']['FieldValue']);
    }

    /**
     * Set the value of ListRegisteredDestinationsResult, return this.
     *
     * @param listRegisteredDestinationsResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListRegisteredDestinationsResult($value)
    {
        $this->setListRegisteredDestinationsResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct ListRegisteredDestinationsResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListRegisteredDestinationsResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListRegisteredDestinationsResponse']");
        if ($response->length == 1) {
            return new ListRegisteredDestinationsResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct ListRegisteredDestinationsResponse from provided XML.
                                  Make sure that ListRegisteredDestinationsResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ListRegisteredDestinationsResponse xmlns=\"http://mws.amazonservices.com/schema/Subscriptions/2013-07-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListRegisteredDestinationsResponse>";
        return $xml;
    }
}
