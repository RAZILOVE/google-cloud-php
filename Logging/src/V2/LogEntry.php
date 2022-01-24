<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/log_entry.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual entry in a log.
 *
 * Generated from protobuf message <code>google.logging.v2.LogEntry</code>
 */
class LogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the log to which this log entry belongs:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * A project number may be used in place of PROJECT_ID. The project number is
     * translated to its corresponding PROJECT_ID internally and the `log_name`
     * field will contain PROJECT_ID in queries and exports.
     * `[LOG_ID]` must be URL-encoded within `log_name`. Example:
     * `"organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"`.
     * `[LOG_ID]` must be less than 512 characters long and can only include the
     * following characters: upper and lower case alphanumeric characters,
     * forward-slash, underscore, hyphen, and period.
     * For backward compatibility, if `log_name` begins with a forward-slash, such
     * as `/projects/...`, then the log entry is ingested as usual but the
     * forward-slash is removed. Listing the log entry will not show the leading
     * slash and filtering for a log name with a leading slash will never return
     * any results.
     *
     * Generated from protobuf field <code>string log_name = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $log_name = '';
    /**
     * Required. The monitored resource that produced this log entry.
     * Example: a log entry that reports a database error would be associated with
     * the monitored resource designating the particular database that reported
     * the error.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $resource = null;
    /**
     * Optional. The time the event described by the log entry occurred. This time is used
     * to compute the log entry's age and to enforce the logs retention period.
     * If this field is omitted in a new log entry, then Logging assigns it the
     * current time. Timestamps have nanosecond accuracy, but trailing zeros in
     * the fractional seconds might be omitted when the timestamp is displayed.
     * Incoming log entries must have timestamps that don't exceed the
     * [logs retention
     * period](https://cloud.google.com/logging/quotas#logs_retention_periods) in
     * the past, and that don't exceed 24 hours in the future. Log entries outside
     * those time boundaries aren't ingested by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $timestamp = null;
    /**
     * Output only. The time the log entry was received by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp receive_timestamp = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $receive_timestamp = null;
    /**
     * Optional. The severity of the log entry. The default value is `LogSeverity.DEFAULT`.
     *
     * Generated from protobuf field <code>.google.logging.type.LogSeverity severity = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $severity = 0;
    /**
     * Optional. A unique identifier for the log entry. If you provide a value, then
     * Logging considers other log entries in the same project, with the same
     * `timestamp`, and with the same `insert_id` to be duplicates which are
     * removed in a single query result. However, there are no guarantees of
     * de-duplication in the export of logs.
     * If the `insert_id` is omitted when writing a log entry, the Logging API
     *  assigns its own unique identifier in this field.
     * In queries, the `insert_id` is also used to order log entries that have
     * the same `log_name` and `timestamp` values.
     *
     * Generated from protobuf field <code>string insert_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $insert_id = '';
    /**
     * Optional. Information about the HTTP request associated with this log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.type.HttpRequest http_request = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $http_request = null;
    /**
     * Optional. A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Information about an operation associated with the log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntryOperation operation = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $operation = null;
    /**
     * Optional. Resource name of the trace associated with the log entry, if any. If it
     * contains a relative resource name, the name is assumed to be relative to
     * `//tracing.googleapis.com`. Example:
     * `projects/my-projectid/traces/06796866738c859f2f19b7cfb3214824`
     *
     * Generated from protobuf field <code>string trace = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $trace = '';
    /**
     * Optional. The span ID within the trace associated with the log entry.
     * For Trace spans, this is the same format that the Trace API v2 uses: a
     * 16-character hexadecimal encoding of an 8-byte array, such as
     * `000000000000004a`.
     *
     * Generated from protobuf field <code>string span_id = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $span_id = '';
    /**
     * Optional. The sampling decision of the trace associated with the log entry.
     * True means that the trace resource name in the `trace` field was sampled
     * for storage in a trace backend. False means that the trace was not sampled
     * for storage when this log entry was written, or the sampling decision was
     * unknown at the time. A non-sampled `trace` value is still useful as a
     * request correlation identifier. The default is False.
     *
     * Generated from protobuf field <code>bool trace_sampled = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $trace_sampled = false;
    /**
     * Optional. Source code location information associated with the log entry, if any.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntrySourceLocation source_location = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $source_location = null;
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $log_name
     *           Required. The resource name of the log to which this log entry belongs:
     *               "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *               "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *               "folders/[FOLDER_ID]/logs/[LOG_ID]"
     *           A project number may be used in place of PROJECT_ID. The project number is
     *           translated to its corresponding PROJECT_ID internally and the `log_name`
     *           field will contain PROJECT_ID in queries and exports.
     *           `[LOG_ID]` must be URL-encoded within `log_name`. Example:
     *           `"organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"`.
     *           `[LOG_ID]` must be less than 512 characters long and can only include the
     *           following characters: upper and lower case alphanumeric characters,
     *           forward-slash, underscore, hyphen, and period.
     *           For backward compatibility, if `log_name` begins with a forward-slash, such
     *           as `/projects/...`, then the log entry is ingested as usual but the
     *           forward-slash is removed. Listing the log entry will not show the leading
     *           slash and filtering for a log name with a leading slash will never return
     *           any results.
     *     @type \Google\Api\MonitoredResource $resource
     *           Required. The monitored resource that produced this log entry.
     *           Example: a log entry that reports a database error would be associated with
     *           the monitored resource designating the particular database that reported
     *           the error.
     *     @type \Google\Protobuf\Any $proto_payload
     *           The log entry payload, represented as a protocol buffer. Some Google
     *           Cloud Platform services use this field for their log entry payloads.
     *           The following protocol buffer types are supported; user-defined types
     *           are not supported:
     *             "type.googleapis.com/google.cloud.audit.AuditLog"
     *             "type.googleapis.com/google.appengine.logging.v1.RequestLog"
     *     @type string $text_payload
     *           The log entry payload, represented as a Unicode string (UTF-8).
     *     @type \Google\Protobuf\Struct $json_payload
     *           The log entry payload, represented as a structure that is
     *           expressed as a JSON object.
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Optional. The time the event described by the log entry occurred. This time is used
     *           to compute the log entry's age and to enforce the logs retention period.
     *           If this field is omitted in a new log entry, then Logging assigns it the
     *           current time. Timestamps have nanosecond accuracy, but trailing zeros in
     *           the fractional seconds might be omitted when the timestamp is displayed.
     *           Incoming log entries must have timestamps that don't exceed the
     *           [logs retention
     *           period](https://cloud.google.com/logging/quotas#logs_retention_periods) in
     *           the past, and that don't exceed 24 hours in the future. Log entries outside
     *           those time boundaries aren't ingested by Logging.
     *     @type \Google\Protobuf\Timestamp $receive_timestamp
     *           Output only. The time the log entry was received by Logging.
     *     @type int $severity
     *           Optional. The severity of the log entry. The default value is `LogSeverity.DEFAULT`.
     *     @type string $insert_id
     *           Optional. A unique identifier for the log entry. If you provide a value, then
     *           Logging considers other log entries in the same project, with the same
     *           `timestamp`, and with the same `insert_id` to be duplicates which are
     *           removed in a single query result. However, there are no guarantees of
     *           de-duplication in the export of logs.
     *           If the `insert_id` is omitted when writing a log entry, the Logging API
     *            assigns its own unique identifier in this field.
     *           In queries, the `insert_id` is also used to order log entries that have
     *           the same `log_name` and `timestamp` values.
     *     @type \Google\Cloud\Logging\Type\HttpRequest $http_request
     *           Optional. Information about the HTTP request associated with this log entry, if
     *           applicable.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. A set of user-defined (key, value) data that provides additional
     *           information about the log entry.
     *     @type \Google\Cloud\Logging\V2\LogEntryOperation $operation
     *           Optional. Information about an operation associated with the log entry, if
     *           applicable.
     *     @type string $trace
     *           Optional. Resource name of the trace associated with the log entry, if any. If it
     *           contains a relative resource name, the name is assumed to be relative to
     *           `//tracing.googleapis.com`. Example:
     *           `projects/my-projectid/traces/06796866738c859f2f19b7cfb3214824`
     *     @type string $span_id
     *           Optional. The span ID within the trace associated with the log entry.
     *           For Trace spans, this is the same format that the Trace API v2 uses: a
     *           16-character hexadecimal encoding of an 8-byte array, such as
     *           `000000000000004a`.
     *     @type bool $trace_sampled
     *           Optional. The sampling decision of the trace associated with the log entry.
     *           True means that the trace resource name in the `trace` field was sampled
     *           for storage in a trace backend. False means that the trace was not sampled
     *           for storage when this log entry was written, or the sampling decision was
     *           unknown at the time. A non-sampled `trace` value is still useful as a
     *           request correlation identifier. The default is False.
     *     @type \Google\Cloud\Logging\V2\LogEntrySourceLocation $source_location
     *           Optional. Source code location information associated with the log entry, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the log to which this log entry belongs:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * A project number may be used in place of PROJECT_ID. The project number is
     * translated to its corresponding PROJECT_ID internally and the `log_name`
     * field will contain PROJECT_ID in queries and exports.
     * `[LOG_ID]` must be URL-encoded within `log_name`. Example:
     * `"organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"`.
     * `[LOG_ID]` must be less than 512 characters long and can only include the
     * following characters: upper and lower case alphanumeric characters,
     * forward-slash, underscore, hyphen, and period.
     * For backward compatibility, if `log_name` begins with a forward-slash, such
     * as `/projects/...`, then the log entry is ingested as usual but the
     * forward-slash is removed. Listing the log entry will not show the leading
     * slash and filtering for a log name with a leading slash will never return
     * any results.
     *
     * Generated from protobuf field <code>string log_name = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLogName()
    {
        return $this->log_name;
    }

    /**
     * Required. The resource name of the log to which this log entry belongs:
     *     "projects/[PROJECT_ID]/logs/[LOG_ID]"
     *     "organizations/[ORGANIZATION_ID]/logs/[LOG_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/logs/[LOG_ID]"
     *     "folders/[FOLDER_ID]/logs/[LOG_ID]"
     * A project number may be used in place of PROJECT_ID. The project number is
     * translated to its corresponding PROJECT_ID internally and the `log_name`
     * field will contain PROJECT_ID in queries and exports.
     * `[LOG_ID]` must be URL-encoded within `log_name`. Example:
     * `"organizations/1234567890/logs/cloudresourcemanager.googleapis.com%2Factivity"`.
     * `[LOG_ID]` must be less than 512 characters long and can only include the
     * following characters: upper and lower case alphanumeric characters,
     * forward-slash, underscore, hyphen, and period.
     * For backward compatibility, if `log_name` begins with a forward-slash, such
     * as `/projects/...`, then the log entry is ingested as usual but the
     * forward-slash is removed. Listing the log entry will not show the leading
     * slash and filtering for a log name with a leading slash will never return
     * any results.
     *
     * Generated from protobuf field <code>string log_name = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLogName($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_name = $var;

        return $this;
    }

    /**
     * Required. The monitored resource that produced this log entry.
     * Example: a log entry that reports a database error would be associated with
     * the monitored resource designating the particular database that reported
     * the error.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Api\MonitoredResource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Required. The monitored resource that produced this log entry.
     * Example: a log entry that reports a database error would be associated with
     * the monitored resource designating the particular database that reported
     * the error.
     *
     * Generated from protobuf field <code>.google.api.MonitoredResource resource = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Api\MonitoredResource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\MonitoredResource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * The log entry payload, represented as a protocol buffer. Some Google
     * Cloud Platform services use this field for their log entry payloads.
     * The following protocol buffer types are supported; user-defined types
     * are not supported:
     *   "type.googleapis.com/google.cloud.audit.AuditLog"
     *   "type.googleapis.com/google.appengine.logging.v1.RequestLog"
     *
     * Generated from protobuf field <code>.google.protobuf.Any proto_payload = 2;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getProtoPayload()
    {
        return $this->readOneof(2);
    }

    public function hasProtoPayload()
    {
        return $this->hasOneof(2);
    }

    /**
     * The log entry payload, represented as a protocol buffer. Some Google
     * Cloud Platform services use this field for their log entry payloads.
     * The following protocol buffer types are supported; user-defined types
     * are not supported:
     *   "type.googleapis.com/google.cloud.audit.AuditLog"
     *   "type.googleapis.com/google.appengine.logging.v1.RequestLog"
     *
     * Generated from protobuf field <code>.google.protobuf.Any proto_payload = 2;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setProtoPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The log entry payload, represented as a Unicode string (UTF-8).
     *
     * Generated from protobuf field <code>string text_payload = 3;</code>
     * @return string
     */
    public function getTextPayload()
    {
        return $this->readOneof(3);
    }

    public function hasTextPayload()
    {
        return $this->hasOneof(3);
    }

    /**
     * The log entry payload, represented as a Unicode string (UTF-8).
     *
     * Generated from protobuf field <code>string text_payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTextPayload($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The log entry payload, represented as a structure that is
     * expressed as a JSON object.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct json_payload = 6;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getJsonPayload()
    {
        return $this->readOneof(6);
    }

    public function hasJsonPayload()
    {
        return $this->hasOneof(6);
    }

    /**
     * The log entry payload, represented as a structure that is
     * expressed as a JSON object.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct json_payload = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setJsonPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Optional. The time the event described by the log entry occurred. This time is used
     * to compute the log entry's age and to enforce the logs retention period.
     * If this field is omitted in a new log entry, then Logging assigns it the
     * current time. Timestamps have nanosecond accuracy, but trailing zeros in
     * the fractional seconds might be omitted when the timestamp is displayed.
     * Incoming log entries must have timestamps that don't exceed the
     * [logs retention
     * period](https://cloud.google.com/logging/quotas#logs_retention_periods) in
     * the past, and that don't exceed 24 hours in the future. Log entries outside
     * those time boundaries aren't ingested by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Optional. The time the event described by the log entry occurred. This time is used
     * to compute the log entry's age and to enforce the logs retention period.
     * If this field is omitted in a new log entry, then Logging assigns it the
     * current time. Timestamps have nanosecond accuracy, but trailing zeros in
     * the fractional seconds might be omitted when the timestamp is displayed.
     * Incoming log entries must have timestamps that don't exceed the
     * [logs retention
     * period](https://cloud.google.com/logging/quotas#logs_retention_periods) in
     * the past, and that don't exceed 24 hours in the future. Log entries outside
     * those time boundaries aren't ingested by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Output only. The time the log entry was received by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp receive_timestamp = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReceiveTimestamp()
    {
        return $this->receive_timestamp;
    }

    public function hasReceiveTimestamp()
    {
        return isset($this->receive_timestamp);
    }

    public function clearReceiveTimestamp()
    {
        unset($this->receive_timestamp);
    }

    /**
     * Output only. The time the log entry was received by Logging.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp receive_timestamp = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReceiveTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->receive_timestamp = $var;

        return $this;
    }

    /**
     * Optional. The severity of the log entry. The default value is `LogSeverity.DEFAULT`.
     *
     * Generated from protobuf field <code>.google.logging.type.LogSeverity severity = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Optional. The severity of the log entry. The default value is `LogSeverity.DEFAULT`.
     *
     * Generated from protobuf field <code>.google.logging.type.LogSeverity severity = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Logging\Type\LogSeverity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Optional. A unique identifier for the log entry. If you provide a value, then
     * Logging considers other log entries in the same project, with the same
     * `timestamp`, and with the same `insert_id` to be duplicates which are
     * removed in a single query result. However, there are no guarantees of
     * de-duplication in the export of logs.
     * If the `insert_id` is omitted when writing a log entry, the Logging API
     *  assigns its own unique identifier in this field.
     * In queries, the `insert_id` is also used to order log entries that have
     * the same `log_name` and `timestamp` values.
     *
     * Generated from protobuf field <code>string insert_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getInsertId()
    {
        return $this->insert_id;
    }

    /**
     * Optional. A unique identifier for the log entry. If you provide a value, then
     * Logging considers other log entries in the same project, with the same
     * `timestamp`, and with the same `insert_id` to be duplicates which are
     * removed in a single query result. However, there are no guarantees of
     * de-duplication in the export of logs.
     * If the `insert_id` is omitted when writing a log entry, the Logging API
     *  assigns its own unique identifier in this field.
     * In queries, the `insert_id` is also used to order log entries that have
     * the same `log_name` and `timestamp` values.
     *
     * Generated from protobuf field <code>string insert_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setInsertId($var)
    {
        GPBUtil::checkString($var, True);
        $this->insert_id = $var;

        return $this;
    }

    /**
     * Optional. Information about the HTTP request associated with this log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.type.HttpRequest http_request = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Logging\Type\HttpRequest|null
     */
    public function getHttpRequest()
    {
        return $this->http_request;
    }

    public function hasHttpRequest()
    {
        return isset($this->http_request);
    }

    public function clearHttpRequest()
    {
        unset($this->http_request);
    }

    /**
     * Optional. Information about the HTTP request associated with this log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.type.HttpRequest http_request = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Logging\Type\HttpRequest $var
     * @return $this
     */
    public function setHttpRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\Type\HttpRequest::class);
        $this->http_request = $var;

        return $this;
    }

    /**
     * Optional. A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. A set of user-defined (key, value) data that provides additional
     * information about the log entry.
     *
     * Generated from protobuf field <code>map<string, string> labels = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Information about an operation associated with the log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntryOperation operation = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Logging\V2\LogEntryOperation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Optional. Information about an operation associated with the log entry, if
     * applicable.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntryOperation operation = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Logging\V2\LogEntryOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogEntryOperation::class);
        $this->operation = $var;

        return $this;
    }

    /**
     * Optional. Resource name of the trace associated with the log entry, if any. If it
     * contains a relative resource name, the name is assumed to be relative to
     * `//tracing.googleapis.com`. Example:
     * `projects/my-projectid/traces/06796866738c859f2f19b7cfb3214824`
     *
     * Generated from protobuf field <code>string trace = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * Optional. Resource name of the trace associated with the log entry, if any. If it
     * contains a relative resource name, the name is assumed to be relative to
     * `//tracing.googleapis.com`. Example:
     * `projects/my-projectid/traces/06796866738c859f2f19b7cfb3214824`
     *
     * Generated from protobuf field <code>string trace = 22 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace = $var;

        return $this;
    }

    /**
     * Optional. The span ID within the trace associated with the log entry.
     * For Trace spans, this is the same format that the Trace API v2 uses: a
     * 16-character hexadecimal encoding of an 8-byte array, such as
     * `000000000000004a`.
     *
     * Generated from protobuf field <code>string span_id = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSpanId()
    {
        return $this->span_id;
    }

    /**
     * Optional. The span ID within the trace associated with the log entry.
     * For Trace spans, this is the same format that the Trace API v2 uses: a
     * 16-character hexadecimal encoding of an 8-byte array, such as
     * `000000000000004a`.
     *
     * Generated from protobuf field <code>string span_id = 27 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSpanId($var)
    {
        GPBUtil::checkString($var, True);
        $this->span_id = $var;

        return $this;
    }

    /**
     * Optional. The sampling decision of the trace associated with the log entry.
     * True means that the trace resource name in the `trace` field was sampled
     * for storage in a trace backend. False means that the trace was not sampled
     * for storage when this log entry was written, or the sampling decision was
     * unknown at the time. A non-sampled `trace` value is still useful as a
     * request correlation identifier. The default is False.
     *
     * Generated from protobuf field <code>bool trace_sampled = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getTraceSampled()
    {
        return $this->trace_sampled;
    }

    /**
     * Optional. The sampling decision of the trace associated with the log entry.
     * True means that the trace resource name in the `trace` field was sampled
     * for storage in a trace backend. False means that the trace was not sampled
     * for storage when this log entry was written, or the sampling decision was
     * unknown at the time. A non-sampled `trace` value is still useful as a
     * request correlation identifier. The default is False.
     *
     * Generated from protobuf field <code>bool trace_sampled = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setTraceSampled($var)
    {
        GPBUtil::checkBool($var);
        $this->trace_sampled = $var;

        return $this;
    }

    /**
     * Optional. Source code location information associated with the log entry, if any.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntrySourceLocation source_location = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Logging\V2\LogEntrySourceLocation|null
     */
    public function getSourceLocation()
    {
        return $this->source_location;
    }

    public function hasSourceLocation()
    {
        return isset($this->source_location);
    }

    public function clearSourceLocation()
    {
        unset($this->source_location);
    }

    /**
     * Optional. Source code location information associated with the log entry, if any.
     *
     * Generated from protobuf field <code>.google.logging.v2.LogEntrySourceLocation source_location = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Logging\V2\LogEntrySourceLocation $var
     * @return $this
     */
    public function setSourceLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Logging\V2\LogEntrySourceLocation::class);
        $this->source_location = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

