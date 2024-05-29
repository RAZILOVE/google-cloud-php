<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime operation metadata with regard to Matching Engine Index.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata</code>
 */
class NearestNeighborSearchOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The validation stats of the content (per file) to be inserted or
     * updated on the Matching Engine Index resource. Populated if
     * contentsDeltaUri is provided as part of
     * [Index.metadata][google.cloud.aiplatform.v1.Index.metadata]. Please note
     * that, currently for those files that are broken or has unsupported file
     * format, we will not have the stats for those files.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.ContentValidationStats content_validation_stats = 1;</code>
     */
    private $content_validation_stats;
    /**
     * The ingested data size in bytes.
     *
     * Generated from protobuf field <code>int64 data_bytes_count = 2;</code>
     */
    protected $data_bytes_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata\ContentValidationStats>|\Google\Protobuf\Internal\RepeatedField $content_validation_stats
     *           The validation stats of the content (per file) to be inserted or
     *           updated on the Matching Engine Index resource. Populated if
     *           contentsDeltaUri is provided as part of
     *           [Index.metadata][google.cloud.aiplatform.v1.Index.metadata]. Please note
     *           that, currently for those files that are broken or has unsupported file
     *           format, we will not have the stats for those files.
     *     @type int|string $data_bytes_count
     *           The ingested data size in bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexService::initOnce();
        parent::__construct($data);
    }

    /**
     * The validation stats of the content (per file) to be inserted or
     * updated on the Matching Engine Index resource. Populated if
     * contentsDeltaUri is provided as part of
     * [Index.metadata][google.cloud.aiplatform.v1.Index.metadata]. Please note
     * that, currently for those files that are broken or has unsupported file
     * format, we will not have the stats for those files.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.ContentValidationStats content_validation_stats = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContentValidationStats()
    {
        return $this->content_validation_stats;
    }

    /**
     * The validation stats of the content (per file) to be inserted or
     * updated on the Matching Engine Index resource. Populated if
     * contentsDeltaUri is provided as part of
     * [Index.metadata][google.cloud.aiplatform.v1.Index.metadata]. Please note
     * that, currently for those files that are broken or has unsupported file
     * format, we will not have the stats for those files.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.NearestNeighborSearchOperationMetadata.ContentValidationStats content_validation_stats = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata\ContentValidationStats>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContentValidationStats($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\NearestNeighborSearchOperationMetadata\ContentValidationStats::class);
        $this->content_validation_stats = $arr;

        return $this;
    }

    /**
     * The ingested data size in bytes.
     *
     * Generated from protobuf field <code>int64 data_bytes_count = 2;</code>
     * @return int|string
     */
    public function getDataBytesCount()
    {
        return $this->data_bytes_count;
    }

    /**
     * The ingested data size in bytes.
     *
     * Generated from protobuf field <code>int64 data_bytes_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataBytesCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_bytes_count = $var;

        return $this;
    }

}

