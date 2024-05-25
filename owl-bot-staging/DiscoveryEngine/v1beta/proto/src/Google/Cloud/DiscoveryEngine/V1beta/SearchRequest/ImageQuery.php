<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the image query input.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.ImageQuery</code>
 */
class ImageQuery extends \Google\Protobuf\Internal\Message
{
    protected $image;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_bytes
     *           Base64 encoded image bytes. Supported image formats: JPEG, PNG, and
     *           BMP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Base64 encoded image bytes. Supported image formats: JPEG, PNG, and
     * BMP.
     *
     * Generated from protobuf field <code>string image_bytes = 1;</code>
     * @return string
     */
    public function getImageBytes()
    {
        return $this->readOneof(1);
    }

    public function hasImageBytes()
    {
        return $this->hasOneof(1);
    }

    /**
     * Base64 encoded image bytes. Supported image formats: JPEG, PNG, and
     * BMP.
     *
     * Generated from protobuf field <code>string image_bytes = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageBytes($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->whichOneof("image");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageQuery::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest_ImageQuery::class);

