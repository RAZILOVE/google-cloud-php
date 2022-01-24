<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options that change functionality of a sink exporting data to BigQuery.
 *
 * Generated from protobuf message <code>google.logging.v2.BigQueryOptions</code>
 */
class BigQueryOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether to use [BigQuery's partition
     * tables](https://cloud.google.com/bigquery/docs/partitioned-tables). By
     * default, Logging creates dated tables based on the log entries' timestamps,
     * e.g. syslog_20170523. With partitioned tables the date suffix is no longer
     * present and [special query
     * syntax](https://cloud.google.com/bigquery/docs/querying-partitioned-tables)
     * has to be used instead. In both cases, tables are sharded based on UTC
     * timezone.
     *
     * Generated from protobuf field <code>bool use_partitioned_tables = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $use_partitioned_tables = false;
    /**
     * Output only. True if new timestamp column based partitioning is in use,
     * false if legacy ingestion-time partitioning is in use.
     * All new sinks will have this field set true and will use timestamp column
     * based partitioning. If use_partitioned_tables is false, this value has no
     * meaning and will be false. Legacy sinks using partitioned tables will have
     * this field set to false.
     *
     * Generated from protobuf field <code>bool uses_timestamp_column_partitioning = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uses_timestamp_column_partitioning = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_partitioned_tables
     *           Optional. Whether to use [BigQuery's partition
     *           tables](https://cloud.google.com/bigquery/docs/partitioned-tables). By
     *           default, Logging creates dated tables based on the log entries' timestamps,
     *           e.g. syslog_20170523. With partitioned tables the date suffix is no longer
     *           present and [special query
     *           syntax](https://cloud.google.com/bigquery/docs/querying-partitioned-tables)
     *           has to be used instead. In both cases, tables are sharded based on UTC
     *           timezone.
     *     @type bool $uses_timestamp_column_partitioning
     *           Output only. True if new timestamp column based partitioning is in use,
     *           false if legacy ingestion-time partitioning is in use.
     *           All new sinks will have this field set true and will use timestamp column
     *           based partitioning. If use_partitioned_tables is false, this value has no
     *           meaning and will be false. Legacy sinks using partitioned tables will have
     *           this field set to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Whether to use [BigQuery's partition
     * tables](https://cloud.google.com/bigquery/docs/partitioned-tables). By
     * default, Logging creates dated tables based on the log entries' timestamps,
     * e.g. syslog_20170523. With partitioned tables the date suffix is no longer
     * present and [special query
     * syntax](https://cloud.google.com/bigquery/docs/querying-partitioned-tables)
     * has to be used instead. In both cases, tables are sharded based on UTC
     * timezone.
     *
     * Generated from protobuf field <code>bool use_partitioned_tables = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getUsePartitionedTables()
    {
        return $this->use_partitioned_tables;
    }

    /**
     * Optional. Whether to use [BigQuery's partition
     * tables](https://cloud.google.com/bigquery/docs/partitioned-tables). By
     * default, Logging creates dated tables based on the log entries' timestamps,
     * e.g. syslog_20170523. With partitioned tables the date suffix is no longer
     * present and [special query
     * syntax](https://cloud.google.com/bigquery/docs/querying-partitioned-tables)
     * has to be used instead. In both cases, tables are sharded based on UTC
     * timezone.
     *
     * Generated from protobuf field <code>bool use_partitioned_tables = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setUsePartitionedTables($var)
    {
        GPBUtil::checkBool($var);
        $this->use_partitioned_tables = $var;

        return $this;
    }

    /**
     * Output only. True if new timestamp column based partitioning is in use,
     * false if legacy ingestion-time partitioning is in use.
     * All new sinks will have this field set true and will use timestamp column
     * based partitioning. If use_partitioned_tables is false, this value has no
     * meaning and will be false. Legacy sinks using partitioned tables will have
     * this field set to false.
     *
     * Generated from protobuf field <code>bool uses_timestamp_column_partitioning = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getUsesTimestampColumnPartitioning()
    {
        return $this->uses_timestamp_column_partitioning;
    }

    /**
     * Output only. True if new timestamp column based partitioning is in use,
     * false if legacy ingestion-time partitioning is in use.
     * All new sinks will have this field set true and will use timestamp column
     * based partitioning. If use_partitioned_tables is false, this value has no
     * meaning and will be false. Legacy sinks using partitioned tables will have
     * this field set to false.
     *
     * Generated from protobuf field <code>bool uses_timestamp_column_partitioning = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setUsesTimestampColumnPartitioning($var)
    {
        GPBUtil::checkBool($var);
        $this->uses_timestamp_column_partitioning = $var;

        return $this;
    }

}

