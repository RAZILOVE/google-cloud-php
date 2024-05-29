<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1\BatchReadFeatureValuesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Selects Features of an EntityType to read values of and specifies read
 * settings.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchReadFeatureValuesRequest.EntityTypeSpec</code>
 */
class EntityTypeSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. ID of the EntityType to select Features. The EntityType id is
     * the
     * [entity_type_id][google.cloud.aiplatform.v1.CreateEntityTypeRequest.entity_type_id]
     * specified during EntityType creation.
     *
     * Generated from protobuf field <code>string entity_type_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity_type_id = '';
    /**
     * Required. Selectors choosing which Feature values to read from the
     * EntityType.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureSelector feature_selector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feature_selector = null;
    /**
     * Per-Feature settings for the batch read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DestinationFeatureSetting settings = 3;</code>
     */
    private $settings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_type_id
     *           Required. ID of the EntityType to select Features. The EntityType id is
     *           the
     *           [entity_type_id][google.cloud.aiplatform.v1.CreateEntityTypeRequest.entity_type_id]
     *           specified during EntityType creation.
     *     @type \Google\Cloud\AIPlatform\V1\FeatureSelector $feature_selector
     *           Required. Selectors choosing which Feature values to read from the
     *           EntityType.
     *     @type array<\Google\Cloud\AIPlatform\V1\DestinationFeatureSetting>|\Google\Protobuf\Internal\RepeatedField $settings
     *           Per-Feature settings for the batch read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. ID of the EntityType to select Features. The EntityType id is
     * the
     * [entity_type_id][google.cloud.aiplatform.v1.CreateEntityTypeRequest.entity_type_id]
     * specified during EntityType creation.
     *
     * Generated from protobuf field <code>string entity_type_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEntityTypeId()
    {
        return $this->entity_type_id;
    }

    /**
     * Required. ID of the EntityType to select Features. The EntityType id is
     * the
     * [entity_type_id][google.cloud.aiplatform.v1.CreateEntityTypeRequest.entity_type_id]
     * specified during EntityType creation.
     *
     * Generated from protobuf field <code>string entity_type_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEntityTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type_id = $var;

        return $this;
    }

    /**
     * Required. Selectors choosing which Feature values to read from the
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
     * Required. Selectors choosing which Feature values to read from the
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
     * Per-Feature settings for the batch read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DestinationFeatureSetting settings = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Per-Feature settings for the batch read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.DestinationFeatureSetting settings = 3;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\DestinationFeatureSetting>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\DestinationFeatureSetting::class);
        $this->settings = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityTypeSpec::class, \Google\Cloud\AIPlatform\V1\BatchReadFeatureValuesRequest_EntityTypeSpec::class);

