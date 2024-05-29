<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message to select time range and feature.
 * Values of the selected feature generated within an inclusive time range
 * will be deleted. Using this option permanently deletes the feature values
 * from the specified feature IDs within the specified time range.
 * This might include data from the online storage. If you want to retain
 * any deleted historical data in the online storage, you must re-ingest it.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectTimeRangeAndFeature</code>
 */
class SelectTimeRangeAndFeature extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Select feature generated within a half-inclusive time range.
     * The time range is lower inclusive and upper exclusive.
     *
     * Generated from protobuf field <code>.google.type.Interval time_range = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_range = null;
    /**
     * Required. Selectors choosing which feature values to be deleted from the
     * EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feature_selector = null;
    /**
     * If set, data will not be deleted from online storage.
     * When time range is older than the data in online storage, setting this to
     * be true will make the deletion have no impact on online serving.
     *
     * Generated from protobuf field <code>bool skip_online_storage_delete = 3;</code>
     */
    protected $skip_online_storage_delete = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Interval $time_range
     *           Required. Select feature generated within a half-inclusive time range.
     *           The time range is lower inclusive and upper exclusive.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureSelector $feature_selector
     *           Required. Selectors choosing which feature values to be deleted from the
     *           EntityType.
     *     @type bool $skip_online_storage_delete
     *           If set, data will not be deleted from online storage.
     *           When time range is older than the data in online storage, setting this to
     *           be true will make the deletion have no impact on online serving.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Select feature generated within a half-inclusive time range.
     * The time range is lower inclusive and upper exclusive.
     *
     * Generated from protobuf field <code>.google.type.Interval time_range = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Type\Interval|null
     */
    public function getTimeRange()
    {
        return $this->time_range;
    }

    public function hasTimeRange()
    {
        return isset($this->time_range);
    }

    public function clearTimeRange()
    {
        unset($this->time_range);
    }

    /**
     * Required. Select feature generated within a half-inclusive time range.
     * The time range is lower inclusive and upper exclusive.
     *
     * Generated from protobuf field <code>.google.type.Interval time_range = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setTimeRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->time_range = $var;

        return $this;
    }

    /**
     * Required. Selectors choosing which feature values to be deleted from the
     * EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureSelector|null
     */
    public function getFeatureSelector()
    {
        return $this->feature_selector;
    }

    public function hasFeatureSelector()
    {
        return isset($this->feature_selector);
    }

    public function clearFeatureSelector()
    {
        unset($this->feature_selector);
    }

    /**
     * Required. Selectors choosing which feature values to be deleted from the
     * EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureSelector $var
     * @return $this
     */
    public function setFeatureSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureSelector::class);
        $this->feature_selector = $var;

        return $this;
    }

    /**
     * If set, data will not be deleted from online storage.
     * When time range is older than the data in online storage, setting this to
     * be true will make the deletion have no impact on online serving.
     *
     * Generated from protobuf field <code>bool skip_online_storage_delete = 3;</code>
     * @return bool
     */
    public function getSkipOnlineStorageDelete()
    {
        return $this->skip_online_storage_delete;
    }

    /**
     * If set, data will not be deleted from online storage.
     * When time range is older than the data in online storage, setting this to
     * be true will make the deletion have no impact on online serving.
     *
     * Generated from protobuf field <code>bool skip_online_storage_delete = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipOnlineStorageDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_online_storage_delete = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SelectTimeRangeAndFeature::class, \Google\Cloud\AIPlatform\V1\DeleteFeatureValuesRequest_SelectTimeRangeAndFeature::class);

