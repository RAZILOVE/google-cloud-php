<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\ImportDocumentsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The inline source for the input config for ImportDocuments method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ImportDocumentsRequest.InlineSource</code>
 */
class InlineSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of documents to update/create. Each document must have a
     * valid [Document.id][google.cloud.discoveryengine.v1.Document.id].
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Document documents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Document>|\Google\Protobuf\Internal\RepeatedField $documents
     *           Required. A list of documents to update/create. Each document must have a
     *           valid [Document.id][google.cloud.discoveryengine.v1.Document.id].
     *           Recommended max of 100 items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of documents to update/create. Each document must have a
     * valid [Document.id][google.cloud.discoveryengine.v1.Document.id].
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Document documents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Required. A list of documents to update/create. Each document must have a
     * valid [Document.id][google.cloud.discoveryengine.v1.Document.id].
     * Recommended max of 100 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Document documents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Document>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Document::class);
        $this->documents = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InlineSource::class, \Google\Cloud\DiscoveryEngine\V1\ImportDocumentsRequest_InlineSource::class);

