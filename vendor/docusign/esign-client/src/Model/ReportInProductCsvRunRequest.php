<?php
/**
 * ReportInProductCsvRunRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * ReportInProductCsvRunRequest Class Doc Comment
 *
 * @category    Class
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign eSignature PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportInProductCsvRunRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'reportInProductCsvRunRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_success_filter' => '?string',
        'custom_field_filter' => '?string',
        'date_range_custom_from_date' => '?string',
        'date_range_custom_to_date' => '?string',
        'date_range_filter' => '?string',
        'envelope_date_type_filter' => '?string',
        'envelope_recipient_name_contains_filter' => '?string',
        'envelope_status_filter' => '?string',
        'envelope_subject_contains_filter' => '?string',
        'fields' => '\DocuSign\eSign\Model\ReportInProductField[]',
        'for_download' => '?string',
        'is_dashboard' => '?string',
        'new_line' => '?string',
        'override_timezone_key' => '?string',
        'period_length_filter' => '?string',
        'quote' => '?string',
        'report_customized_id' => '?string',
        'report_description' => '?string',
        'report_id' => '?string',
        'report_invocation_type' => '?string',
        'report_name' => '?string',
        'sent_by_filter' => '?string',
        'sent_by_ids' => '?string',
        'separator' => '?string',
        'sort_direction' => '?string',
        'sort_field' => '?string',
        'start_position' => '?string',
        'verification_status_filter' => '?string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_success_filter' => null,
        'custom_field_filter' => null,
        'date_range_custom_from_date' => null,
        'date_range_custom_to_date' => null,
        'date_range_filter' => null,
        'envelope_date_type_filter' => null,
        'envelope_recipient_name_contains_filter' => null,
        'envelope_status_filter' => null,
        'envelope_subject_contains_filter' => null,
        'fields' => null,
        'for_download' => null,
        'is_dashboard' => null,
        'new_line' => null,
        'override_timezone_key' => null,
        'period_length_filter' => null,
        'quote' => null,
        'report_customized_id' => null,
        'report_description' => null,
        'report_id' => null,
        'report_invocation_type' => null,
        'report_name' => null,
        'sent_by_filter' => null,
        'sent_by_ids' => null,
        'separator' => null,
        'sort_direction' => null,
        'sort_field' => null,
        'start_position' => null,
        'verification_status_filter' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'authentication_success_filter' => 'authenticationSuccessFilter',
        'custom_field_filter' => 'customFieldFilter',
        'date_range_custom_from_date' => 'dateRangeCustomFromDate',
        'date_range_custom_to_date' => 'dateRangeCustomToDate',
        'date_range_filter' => 'dateRangeFilter',
        'envelope_date_type_filter' => 'envelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'envelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'envelopeStatusFilter',
        'envelope_subject_contains_filter' => 'envelopeSubjectContainsFilter',
        'fields' => 'fields',
        'for_download' => 'forDownload',
        'is_dashboard' => 'isDashboard',
        'new_line' => 'newLine',
        'override_timezone_key' => 'overrideTimezoneKey',
        'period_length_filter' => 'periodLengthFilter',
        'quote' => 'quote',
        'report_customized_id' => 'reportCustomizedId',
        'report_description' => 'reportDescription',
        'report_id' => 'reportId',
        'report_invocation_type' => 'reportInvocationType',
        'report_name' => 'reportName',
        'sent_by_filter' => 'sentByFilter',
        'sent_by_ids' => 'sentByIds',
        'separator' => 'separator',
        'sort_direction' => 'sortDirection',
        'sort_field' => 'sortField',
        'start_position' => 'startPosition',
        'verification_status_filter' => 'verificationStatusFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_success_filter' => 'setAuthenticationSuccessFilter',
        'custom_field_filter' => 'setCustomFieldFilter',
        'date_range_custom_from_date' => 'setDateRangeCustomFromDate',
        'date_range_custom_to_date' => 'setDateRangeCustomToDate',
        'date_range_filter' => 'setDateRangeFilter',
        'envelope_date_type_filter' => 'setEnvelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'setEnvelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'setEnvelopeStatusFilter',
        'envelope_subject_contains_filter' => 'setEnvelopeSubjectContainsFilter',
        'fields' => 'setFields',
        'for_download' => 'setForDownload',
        'is_dashboard' => 'setIsDashboard',
        'new_line' => 'setNewLine',
        'override_timezone_key' => 'setOverrideTimezoneKey',
        'period_length_filter' => 'setPeriodLengthFilter',
        'quote' => 'setQuote',
        'report_customized_id' => 'setReportCustomizedId',
        'report_description' => 'setReportDescription',
        'report_id' => 'setReportId',
        'report_invocation_type' => 'setReportInvocationType',
        'report_name' => 'setReportName',
        'sent_by_filter' => 'setSentByFilter',
        'sent_by_ids' => 'setSentByIds',
        'separator' => 'setSeparator',
        'sort_direction' => 'setSortDirection',
        'sort_field' => 'setSortField',
        'start_position' => 'setStartPosition',
        'verification_status_filter' => 'setVerificationStatusFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_success_filter' => 'getAuthenticationSuccessFilter',
        'custom_field_filter' => 'getCustomFieldFilter',
        'date_range_custom_from_date' => 'getDateRangeCustomFromDate',
        'date_range_custom_to_date' => 'getDateRangeCustomToDate',
        'date_range_filter' => 'getDateRangeFilter',
        'envelope_date_type_filter' => 'getEnvelopeDateTypeFilter',
        'envelope_recipient_name_contains_filter' => 'getEnvelopeRecipientNameContainsFilter',
        'envelope_status_filter' => 'getEnvelopeStatusFilter',
        'envelope_subject_contains_filter' => 'getEnvelopeSubjectContainsFilter',
        'fields' => 'getFields',
        'for_download' => 'getForDownload',
        'is_dashboard' => 'getIsDashboard',
        'new_line' => 'getNewLine',
        'override_timezone_key' => 'getOverrideTimezoneKey',
        'period_length_filter' => 'getPeriodLengthFilter',
        'quote' => 'getQuote',
        'report_customized_id' => 'getReportCustomizedId',
        'report_description' => 'getReportDescription',
        'report_id' => 'getReportId',
        'report_invocation_type' => 'getReportInvocationType',
        'report_name' => 'getReportName',
        'sent_by_filter' => 'getSentByFilter',
        'sent_by_ids' => 'getSentByIds',
        'separator' => 'getSeparator',
        'sort_direction' => 'getSortDirection',
        'sort_field' => 'getSortField',
        'start_position' => 'getStartPosition',
        'verification_status_filter' => 'getVerificationStatusFilter'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['authentication_success_filter'] = isset($data['authentication_success_filter']) ? $data['authentication_success_filter'] : null;
        $this->container['custom_field_filter'] = isset($data['custom_field_filter']) ? $data['custom_field_filter'] : null;
        $this->container['date_range_custom_from_date'] = isset($data['date_range_custom_from_date']) ? $data['date_range_custom_from_date'] : null;
        $this->container['date_range_custom_to_date'] = isset($data['date_range_custom_to_date']) ? $data['date_range_custom_to_date'] : null;
        $this->container['date_range_filter'] = isset($data['date_range_filter']) ? $data['date_range_filter'] : null;
        $this->container['envelope_date_type_filter'] = isset($data['envelope_date_type_filter']) ? $data['envelope_date_type_filter'] : null;
        $this->container['envelope_recipient_name_contains_filter'] = isset($data['envelope_recipient_name_contains_filter']) ? $data['envelope_recipient_name_contains_filter'] : null;
        $this->container['envelope_status_filter'] = isset($data['envelope_status_filter']) ? $data['envelope_status_filter'] : null;
        $this->container['envelope_subject_contains_filter'] = isset($data['envelope_subject_contains_filter']) ? $data['envelope_subject_contains_filter'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['for_download'] = isset($data['for_download']) ? $data['for_download'] : null;
        $this->container['is_dashboard'] = isset($data['is_dashboard']) ? $data['is_dashboard'] : null;
        $this->container['new_line'] = isset($data['new_line']) ? $data['new_line'] : null;
        $this->container['override_timezone_key'] = isset($data['override_timezone_key']) ? $data['override_timezone_key'] : null;
        $this->container['period_length_filter'] = isset($data['period_length_filter']) ? $data['period_length_filter'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['report_customized_id'] = isset($data['report_customized_id']) ? $data['report_customized_id'] : null;
        $this->container['report_description'] = isset($data['report_description']) ? $data['report_description'] : null;
        $this->container['report_id'] = isset($data['report_id']) ? $data['report_id'] : null;
        $this->container['report_invocation_type'] = isset($data['report_invocation_type']) ? $data['report_invocation_type'] : null;
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['sent_by_filter'] = isset($data['sent_by_filter']) ? $data['sent_by_filter'] : null;
        $this->container['sent_by_ids'] = isset($data['sent_by_ids']) ? $data['sent_by_ids'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['sort_direction'] = isset($data['sort_direction']) ? $data['sort_direction'] : null;
        $this->container['sort_field'] = isset($data['sort_field']) ? $data['sort_field'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['verification_status_filter'] = isset($data['verification_status_filter']) ? $data['verification_status_filter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets authentication_success_filter
     *
     * @return ?string
     */
    public function getAuthenticationSuccessFilter()
    {
        return $this->container['authentication_success_filter'];
    }

    /**
     * Sets authentication_success_filter
     *
     * @param ?string $authentication_success_filter 
     *
     * @return $this
     */
    public function setAuthenticationSuccessFilter($authentication_success_filter)
    {
        $this->container['authentication_success_filter'] = $authentication_success_filter;

        return $this;
    }

    /**
     * Gets custom_field_filter
     *
     * @return ?string
     */
    public function getCustomFieldFilter()
    {
        return $this->container['custom_field_filter'];
    }

    /**
     * Sets custom_field_filter
     *
     * @param ?string $custom_field_filter 
     *
     * @return $this
     */
    public function setCustomFieldFilter($custom_field_filter)
    {
        $this->container['custom_field_filter'] = $custom_field_filter;

        return $this;
    }

    /**
     * Gets date_range_custom_from_date
     *
     * @return ?string
     */
    public function getDateRangeCustomFromDate()
    {
        return $this->container['date_range_custom_from_date'];
    }

    /**
     * Sets date_range_custom_from_date
     *
     * @param ?string $date_range_custom_from_date 
     *
     * @return $this
     */
    public function setDateRangeCustomFromDate($date_range_custom_from_date)
    {
        $this->container['date_range_custom_from_date'] = $date_range_custom_from_date;

        return $this;
    }

    /**
     * Gets date_range_custom_to_date
     *
     * @return ?string
     */
    public function getDateRangeCustomToDate()
    {
        return $this->container['date_range_custom_to_date'];
    }

    /**
     * Sets date_range_custom_to_date
     *
     * @param ?string $date_range_custom_to_date 
     *
     * @return $this
     */
    public function setDateRangeCustomToDate($date_range_custom_to_date)
    {
        $this->container['date_range_custom_to_date'] = $date_range_custom_to_date;

        return $this;
    }

    /**
     * Gets date_range_filter
     *
     * @return ?string
     */
    public function getDateRangeFilter()
    {
        return $this->container['date_range_filter'];
    }

    /**
     * Sets date_range_filter
     *
     * @param ?string $date_range_filter 
     *
     * @return $this
     */
    public function setDateRangeFilter($date_range_filter)
    {
        $this->container['date_range_filter'] = $date_range_filter;

        return $this;
    }

    /**
     * Gets envelope_date_type_filter
     *
     * @return ?string
     */
    public function getEnvelopeDateTypeFilter()
    {
        return $this->container['envelope_date_type_filter'];
    }

    /**
     * Sets envelope_date_type_filter
     *
     * @param ?string $envelope_date_type_filter 
     *
     * @return $this
     */
    public function setEnvelopeDateTypeFilter($envelope_date_type_filter)
    {
        $this->container['envelope_date_type_filter'] = $envelope_date_type_filter;

        return $this;
    }

    /**
     * Gets envelope_recipient_name_contains_filter
     *
     * @return ?string
     */
    public function getEnvelopeRecipientNameContainsFilter()
    {
        return $this->container['envelope_recipient_name_contains_filter'];
    }

    /**
     * Sets envelope_recipient_name_contains_filter
     *
     * @param ?string $envelope_recipient_name_contains_filter 
     *
     * @return $this
     */
    public function setEnvelopeRecipientNameContainsFilter($envelope_recipient_name_contains_filter)
    {
        $this->container['envelope_recipient_name_contains_filter'] = $envelope_recipient_name_contains_filter;

        return $this;
    }

    /**
     * Gets envelope_status_filter
     *
     * @return ?string
     */
    public function getEnvelopeStatusFilter()
    {
        return $this->container['envelope_status_filter'];
    }

    /**
     * Sets envelope_status_filter
     *
     * @param ?string $envelope_status_filter 
     *
     * @return $this
     */
    public function setEnvelopeStatusFilter($envelope_status_filter)
    {
        $this->container['envelope_status_filter'] = $envelope_status_filter;

        return $this;
    }

    /**
     * Gets envelope_subject_contains_filter
     *
     * @return ?string
     */
    public function getEnvelopeSubjectContainsFilter()
    {
        return $this->container['envelope_subject_contains_filter'];
    }

    /**
     * Sets envelope_subject_contains_filter
     *
     * @param ?string $envelope_subject_contains_filter 
     *
     * @return $this
     */
    public function setEnvelopeSubjectContainsFilter($envelope_subject_contains_filter)
    {
        $this->container['envelope_subject_contains_filter'] = $envelope_subject_contains_filter;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \DocuSign\eSign\Model\ReportInProductField[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \DocuSign\eSign\Model\ReportInProductField[] $fields 
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets for_download
     *
     * @return ?string
     */
    public function getForDownload()
    {
        return $this->container['for_download'];
    }

    /**
     * Sets for_download
     *
     * @param ?string $for_download 
     *
     * @return $this
     */
    public function setForDownload($for_download)
    {
        $this->container['for_download'] = $for_download;

        return $this;
    }

    /**
     * Gets is_dashboard
     *
     * @return ?string
     */
    public function getIsDashboard()
    {
        return $this->container['is_dashboard'];
    }

    /**
     * Sets is_dashboard
     *
     * @param ?string $is_dashboard 
     *
     * @return $this
     */
    public function setIsDashboard($is_dashboard)
    {
        $this->container['is_dashboard'] = $is_dashboard;

        return $this;
    }

    /**
     * Gets new_line
     *
     * @return ?string
     */
    public function getNewLine()
    {
        return $this->container['new_line'];
    }

    /**
     * Sets new_line
     *
     * @param ?string $new_line 
     *
     * @return $this
     */
    public function setNewLine($new_line)
    {
        $this->container['new_line'] = $new_line;

        return $this;
    }

    /**
     * Gets override_timezone_key
     *
     * @return ?string
     */
    public function getOverrideTimezoneKey()
    {
        return $this->container['override_timezone_key'];
    }

    /**
     * Sets override_timezone_key
     *
     * @param ?string $override_timezone_key 
     *
     * @return $this
     */
    public function setOverrideTimezoneKey($override_timezone_key)
    {
        $this->container['override_timezone_key'] = $override_timezone_key;

        return $this;
    }

    /**
     * Gets period_length_filter
     *
     * @return ?string
     */
    public function getPeriodLengthFilter()
    {
        return $this->container['period_length_filter'];
    }

    /**
     * Sets period_length_filter
     *
     * @param ?string $period_length_filter 
     *
     * @return $this
     */
    public function setPeriodLengthFilter($period_length_filter)
    {
        $this->container['period_length_filter'] = $period_length_filter;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return ?string
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param ?string $quote 
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets report_customized_id
     *
     * @return ?string
     */
    public function getReportCustomizedId()
    {
        return $this->container['report_customized_id'];
    }

    /**
     * Sets report_customized_id
     *
     * @param ?string $report_customized_id 
     *
     * @return $this
     */
    public function setReportCustomizedId($report_customized_id)
    {
        $this->container['report_customized_id'] = $report_customized_id;

        return $this;
    }

    /**
     * Gets report_description
     *
     * @return ?string
     */
    public function getReportDescription()
    {
        return $this->container['report_description'];
    }

    /**
     * Sets report_description
     *
     * @param ?string $report_description 
     *
     * @return $this
     */
    public function setReportDescription($report_description)
    {
        $this->container['report_description'] = $report_description;

        return $this;
    }

    /**
     * Gets report_id
     *
     * @return ?string
     */
    public function getReportId()
    {
        return $this->container['report_id'];
    }

    /**
     * Sets report_id
     *
     * @param ?string $report_id 
     *
     * @return $this
     */
    public function setReportId($report_id)
    {
        $this->container['report_id'] = $report_id;

        return $this;
    }

    /**
     * Gets report_invocation_type
     *
     * @return ?string
     */
    public function getReportInvocationType()
    {
        return $this->container['report_invocation_type'];
    }

    /**
     * Sets report_invocation_type
     *
     * @param ?string $report_invocation_type 
     *
     * @return $this
     */
    public function setReportInvocationType($report_invocation_type)
    {
        $this->container['report_invocation_type'] = $report_invocation_type;

        return $this;
    }

    /**
     * Gets report_name
     *
     * @return ?string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param ?string $report_name 
     *
     * @return $this
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets sent_by_filter
     *
     * @return ?string
     */
    public function getSentByFilter()
    {
        return $this->container['sent_by_filter'];
    }

    /**
     * Sets sent_by_filter
     *
     * @param ?string $sent_by_filter 
     *
     * @return $this
     */
    public function setSentByFilter($sent_by_filter)
    {
        $this->container['sent_by_filter'] = $sent_by_filter;

        return $this;
    }

    /**
     * Gets sent_by_ids
     *
     * @return ?string
     */
    public function getSentByIds()
    {
        return $this->container['sent_by_ids'];
    }

    /**
     * Sets sent_by_ids
     *
     * @param ?string $sent_by_ids 
     *
     * @return $this
     */
    public function setSentByIds($sent_by_ids)
    {
        $this->container['sent_by_ids'] = $sent_by_ids;

        return $this;
    }

    /**
     * Gets separator
     *
     * @return ?string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
     * Sets separator
     *
     * @param ?string $separator 
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

        return $this;
    }

    /**
     * Gets sort_direction
     *
     * @return ?string
     */
    public function getSortDirection()
    {
        return $this->container['sort_direction'];
    }

    /**
     * Sets sort_direction
     *
     * @param ?string $sort_direction 
     *
     * @return $this
     */
    public function setSortDirection($sort_direction)
    {
        $this->container['sort_direction'] = $sort_direction;

        return $this;
    }

    /**
     * Gets sort_field
     *
     * @return ?string
     */
    public function getSortField()
    {
        return $this->container['sort_field'];
    }

    /**
     * Sets sort_field
     *
     * @param ?string $sort_field 
     *
     * @return $this
     */
    public function setSortField($sort_field)
    {
        $this->container['sort_field'] = $sort_field;

        return $this;
    }

    /**
     * Gets start_position
     *
     * @return ?string
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param ?string $start_position Starting position of the current result set.
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

        return $this;
    }

    /**
     * Gets verification_status_filter
     *
     * @return ?string
     */
    public function getVerificationStatusFilter()
    {
        return $this->container['verification_status_filter'];
    }

    /**
     * Sets verification_status_filter
     *
     * @param ?string $verification_status_filter 
     *
     * @return $this
     */
    public function setVerificationStatusFilter($verification_status_filter)
    {
        $this->container['verification_status_filter'] = $verification_status_filter;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

