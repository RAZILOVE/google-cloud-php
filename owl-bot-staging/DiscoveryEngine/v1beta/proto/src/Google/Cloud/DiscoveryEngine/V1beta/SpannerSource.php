<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Spanner source for importing data
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SpannerSource</code>
 */
class SpannerSource extends \Google\Protobuf\Internal\Message
{
    /**
     * The project ID that the Spanner source is in with a length limit of 128
     * characters. If not specified, inherits the project ID from the parent
     * request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    protected $project_id = '';
    /**
     * Required. The instance ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $instance_id = '';
    /**
     * Required. The database ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database_id = '';
    /**
     * Required. The table name of the Spanner database that needs to be imported.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table_id = '';
    /**
     * Whether to apply data boost on Spanner export. Enabling this option will
     * incur additional cost. More info can be found
     * [here](https://cloud.google.com/spanner/docs/databoost/databoost-overview#billing_and_quotas).
     *
     * Generated from protobuf field <code>bool enable_data_boost = 5;</code>
     */
    protected $enable_data_boost = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The project ID that the Spanner source is in with a length limit of 128
     *           characters. If not specified, inherits the project ID from the parent
     *           request.
     *     @type string $instance_id
     *           Required. The instance ID of the source Spanner table.
     *     @type string $database_id
     *           Required. The database ID of the source Spanner table.
     *     @type string $table_id
     *           Required. The table name of the Spanner database that needs to be imported.
     *     @type bool $enable_data_boost
     *           Whether to apply data boost on Spanner export. Enabling this option will
     *           incur additional cost. More info can be found
     *           [here](https://cloud.google.com/spanner/docs/databoost/databoost-overview#billing_and_quotas).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * The project ID that the Spanner source is in with a length limit of 128
     * characters. If not specified, inherits the project ID from the parent
     * request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project ID that the Spanner source is in with a length limit of 128
     * characters. If not specified, inherits the project ID from the parent
     * request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The instance ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Required. The instance ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string instance_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * Required. The database ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabaseId()
    {
        return $this->database_id;
    }

    /**
     * Required. The database ID of the source Spanner table.
     *
     * Generated from protobuf field <code>string database_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabaseId($var)
    {
        GPBUtil::checkString($var, True);
        $this->database_id = $var;

        return $this;
    }

    /**
     * Required. The table name of the Spanner database that needs to be imported.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * Required. The table name of the Spanner database that needs to be imported.
     *
     * Generated from protobuf field <code>string table_id = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

    /**
     * Whether to apply data boost on Spanner export. Enabling this option will
     * incur additional cost. More info can be found
     * [here](https://cloud.google.com/spanner/docs/databoost/databoost-overview#billing_and_quotas).
     *
     * Generated from protobuf field <code>bool enable_data_boost = 5;</code>
     * @return bool
     */
    public function getEnableDataBoost()
    {
        return $this->enable_data_boost;
    }

    /**
     * Whether to apply data boost on Spanner export. Enabling this option will
     * incur additional cost. More info can be found
     * [here](https://cloud.google.com/spanner/docs/databoost/databoost-overview#billing_and_quotas).
     *
     * Generated from protobuf field <code>bool enable_data_boost = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDataBoost($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_data_boost = $var;

        return $this;
    }

}

