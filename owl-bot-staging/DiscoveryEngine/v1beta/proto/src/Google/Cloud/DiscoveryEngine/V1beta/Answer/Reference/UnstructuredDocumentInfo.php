<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\Answer\Reference;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Unstructured document information.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.Answer.Reference.UnstructuredDocumentInfo</code>
 */
class UnstructuredDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $document = '';
    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     */
    protected $uri = '';
    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Answer.Reference.UnstructuredDocumentInfo.ChunkContent chunk_contents = 4;</code>
     */
    private $chunk_contents;
    /**
     * The structured JSON metadata for the document.
     * It is populated from the struct data from the Chunk in search result.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct struct_data = 5;</code>
     */
    protected $struct_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document
     *           Document resource name.
     *     @type string $uri
     *           URI for the document.
     *     @type string $title
     *           Title.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\Answer\Reference\UnstructuredDocumentInfo\ChunkContent>|\Google\Protobuf\Internal\RepeatedField $chunk_contents
     *           List of cited chunk contents derived from document content.
     *     @type \Google\Protobuf\Struct $struct_data
     *           The structured JSON metadata for the document.
     *           It is populated from the struct data from the Chunk in search result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Document resource name.
     *
     * Generated from protobuf field <code>string document = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->document = $var;

        return $this;
    }

    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * URI for the document.
     *
     * Generated from protobuf field <code>string uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Answer.Reference.UnstructuredDocumentInfo.ChunkContent chunk_contents = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChunkContents()
    {
        return $this->chunk_contents;
    }

    /**
     * List of cited chunk contents derived from document content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Answer.Reference.UnstructuredDocumentInfo.ChunkContent chunk_contents = 4;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\Answer\Reference\UnstructuredDocumentInfo\ChunkContent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChunkContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\Answer\Reference\UnstructuredDocumentInfo\ChunkContent::class);
        $this->chunk_contents = $arr;

        return $this;
    }

    /**
     * The structured JSON metadata for the document.
     * It is populated from the struct data from the Chunk in search result.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct struct_data = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getStructData()
    {
        return $this->struct_data;
    }

    public function hasStructData()
    {
        return isset($this->struct_data);
    }

    public function clearStructData()
    {
        unset($this->struct_data);
    }

    /**
     * The structured JSON metadata for the document.
     * It is populated from the struct data from the Chunk in search result.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct struct_data = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setStructData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->struct_data = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UnstructuredDocumentInfo::class, \Google\Cloud\DiscoveryEngine\V1beta\Answer_Reference_UnstructuredDocumentInfo::class);

