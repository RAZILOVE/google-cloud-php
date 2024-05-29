<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.RestoreDatasetVersion][google.cloud.aiplatform.v1.DatasetService.RestoreDatasetVersion].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RestoreDatasetVersionRequest</code>
 */
class RestoreDatasetVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the DatasetVersion resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the DatasetVersion resource.
     *                     Format:
     *                     `projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}`
     *                     Please see {@see DatasetServiceClient::datasetVersionName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\RestoreDatasetVersionRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the DatasetVersion resource.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the DatasetVersion resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the DatasetVersion resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}/datasetVersions/{dataset_version}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

