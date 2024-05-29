<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1\ExportModelRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output configuration for the Model export.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExportModelRequest.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the format in which the Model must be exported. Each Model
     * lists the [export formats it
     * supports][google.cloud.aiplatform.v1.Model.supported_export_formats]. If
     * no value is provided here, then the first from the list of the Model's
     * supported formats is used by default.
     *
     * Generated from protobuf field <code>string export_format_id = 1;</code>
     */
    protected $export_format_id = '';
    /**
     * The Cloud Storage location where the Model artifact is to be
     * written to. Under the directory given as the destination a new one with
     * name "`model-export-<model-display-name>-<timestamp-of-export-call>`",
     * where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format,
     * will be created. Inside, the Model and any of its supporting files
     * will be written.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `ARTIFACT`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination artifact_destination = 3;</code>
     */
    protected $artifact_destination = null;
    /**
     * The Google Container Registry or Artifact Registry uri where the
     * Model container image will be copied to.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `IMAGE`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ContainerRegistryDestination image_destination = 4;</code>
     */
    protected $image_destination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $export_format_id
     *           The ID of the format in which the Model must be exported. Each Model
     *           lists the [export formats it
     *           supports][google.cloud.aiplatform.v1.Model.supported_export_formats]. If
     *           no value is provided here, then the first from the list of the Model's
     *           supported formats is used by default.
     *     @type \Google\Cloud\AIPlatform\V1\GcsDestination $artifact_destination
     *           The Cloud Storage location where the Model artifact is to be
     *           written to. Under the directory given as the destination a new one with
     *           name "`model-export-<model-display-name>-<timestamp-of-export-call>`",
     *           where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format,
     *           will be created. Inside, the Model and any of its supporting files
     *           will be written.
     *           This field should only be set when the `exportableContent` field of the
     *           [Model.supported_export_formats] object contains `ARTIFACT`.
     *     @type \Google\Cloud\AIPlatform\V1\ContainerRegistryDestination $image_destination
     *           The Google Container Registry or Artifact Registry uri where the
     *           Model container image will be copied to.
     *           This field should only be set when the `exportableContent` field of the
     *           [Model.supported_export_formats] object contains `IMAGE`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the format in which the Model must be exported. Each Model
     * lists the [export formats it
     * supports][google.cloud.aiplatform.v1.Model.supported_export_formats]. If
     * no value is provided here, then the first from the list of the Model's
     * supported formats is used by default.
     *
     * Generated from protobuf field <code>string export_format_id = 1;</code>
     * @return string
     */
    public function getExportFormatId()
    {
        return $this->export_format_id;
    }

    /**
     * The ID of the format in which the Model must be exported. Each Model
     * lists the [export formats it
     * supports][google.cloud.aiplatform.v1.Model.supported_export_formats]. If
     * no value is provided here, then the first from the list of the Model's
     * supported formats is used by default.
     *
     * Generated from protobuf field <code>string export_format_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExportFormatId($var)
    {
        GPBUtil::checkString($var, True);
        $this->export_format_id = $var;

        return $this;
    }

    /**
     * The Cloud Storage location where the Model artifact is to be
     * written to. Under the directory given as the destination a new one with
     * name "`model-export-<model-display-name>-<timestamp-of-export-call>`",
     * where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format,
     * will be created. Inside, the Model and any of its supporting files
     * will be written.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `ARTIFACT`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination artifact_destination = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\GcsDestination|null
     */
    public function getArtifactDestination()
    {
        return $this->artifact_destination;
    }

    public function hasArtifactDestination()
    {
        return isset($this->artifact_destination);
    }

    public function clearArtifactDestination()
    {
        unset($this->artifact_destination);
    }

    /**
     * The Cloud Storage location where the Model artifact is to be
     * written to. Under the directory given as the destination a new one with
     * name "`model-export-<model-display-name>-<timestamp-of-export-call>`",
     * where timestamp is in YYYY-MM-DDThh:mm:ss.sssZ ISO-8601 format,
     * will be created. Inside, the Model and any of its supporting files
     * will be written.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `ARTIFACT`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GcsDestination artifact_destination = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\GcsDestination $var
     * @return $this
     */
    public function setArtifactDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GcsDestination::class);
        $this->artifact_destination = $var;

        return $this;
    }

    /**
     * The Google Container Registry or Artifact Registry uri where the
     * Model container image will be copied to.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `IMAGE`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ContainerRegistryDestination image_destination = 4;</code>
     * @return \Google\Cloud\AIPlatform\V1\ContainerRegistryDestination|null
     */
    public function getImageDestination()
    {
        return $this->image_destination;
    }

    public function hasImageDestination()
    {
        return isset($this->image_destination);
    }

    public function clearImageDestination()
    {
        unset($this->image_destination);
    }

    /**
     * The Google Container Registry or Artifact Registry uri where the
     * Model container image will be copied to.
     * This field should only be set when the `exportableContent` field of the
     * [Model.supported_export_formats] object contains `IMAGE`.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ContainerRegistryDestination image_destination = 4;</code>
     * @param \Google\Cloud\AIPlatform\V1\ContainerRegistryDestination $var
     * @return $this
     */
    public function setImageDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ContainerRegistryDestination::class);
        $this->image_destination = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputConfig::class, \Google\Cloud\AIPlatform\V1\ExportModelRequest_OutputConfig::class);

