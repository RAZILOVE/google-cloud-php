<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/document_processing_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\DocumentProcessingConfig\ParsingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The digital parsing configurations for documents.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.DocumentProcessingConfig.ParsingConfig.DigitalParsingConfig</code>
 */
class DigitalParsingConfig extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\DocumentProcessingConfig::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DigitalParsingConfig::class, \Google\Cloud\DiscoveryEngine\V1beta\DocumentProcessingConfig_ParsingConfig_DigitalParsingConfig::class);

