<?php

namespace Amazon\MWS\Reports\Model;

use Amazon\MWS\Reports\Model;

/**
 * ReportSchedule
 *
 * Properties:
 * <ul>
 * <li>ReportType: string</li>
 * <li>Schedule: string</li>
 * <li>ScheduledDate: string</li>
 * </ul>
 */
class ReportSchedule extends Model
{
    /**
     * Construct new ReportSchedule
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     * <li>ReportType: string</li>
     * <li>Schedule: string</li>
     * <li>ScheduledDate: string</li>
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
            'ReportType'    => array('FieldValue' => null, 'FieldType' => 'string'),
            'Schedule'      => array('FieldValue' => null, 'FieldType' => 'string'),
            'ScheduledDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        );
        parent::__construct($data);
    }

    /**
     * Gets the value of the ReportType property.
     *
     * @return string ReportType
     */
    public function getReportType()
    {
        return $this->fields['ReportType']['FieldValue'];
    }

    /**
     * Sets the value of the ReportType property.
     *
     * @param string ReportType
     * @return this instance
     */
    public function setReportType($value)
    {
        $this->fields['ReportType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReportType and returns this instance
     *
     * @param string $value ReportType
     * @return ReportSchedule instance
     */
    public function withReportType($value)
    {
        $this->setReportType($value);
        return $this;
    }


    /**
     * Checks if ReportType is set
     *
     * @return bool true if ReportType  is set
     */
    public function isSetReportType()
    {
        return !is_null($this->fields['ReportType']['FieldValue']);
    }

    /**
     * Gets the value of the Schedule property.
     *
     * @return string Schedule
     */
    public function getSchedule()
    {
        return $this->fields['Schedule']['FieldValue'];
    }

    /**
     * Sets the value of the Schedule property.
     *
     * @param string Schedule
     * @return this instance
     */
    public function setSchedule($value)
    {
        $this->fields['Schedule']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Schedule and returns this instance
     *
     * @param string $value Schedule
     * @return ReportSchedule instance
     */
    public function withSchedule($value)
    {
        $this->setSchedule($value);
        return $this;
    }


    /**
     * Checks if Schedule is set
     *
     * @return bool true if Schedule  is set
     */
    public function isSetSchedule()
    {
        return !is_null($this->fields['Schedule']['FieldValue']);
    }

    /**
     * Gets the value of the ScheduledDate property.
     *
     * @return string ScheduledDate
     */
    public function getScheduledDate()
    {
        return $this->fields['ScheduledDate']['FieldValue'];
    }

    /**
     * Sets the value of the ScheduledDate property.
     *
     * @param string ScheduledDate
     * @return this instance
     */
    public function setScheduledDate($value)
    {
        $this->fields['ScheduledDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ScheduledDate and returns this instance
     *
     * @param string $value ScheduledDate
     * @return ReportSchedule instance
     */
    public function withScheduledDate($value)
    {
        $this->setScheduledDate($value);
        return $this;
    }


    /**
     * Checks if ScheduledDate is set
     *
     * @return bool true if ScheduledDate  is set
     */
    public function isSetScheduledDate()
    {
        return !is_null($this->fields['ScheduledDate']['FieldValue']);
    }
}
