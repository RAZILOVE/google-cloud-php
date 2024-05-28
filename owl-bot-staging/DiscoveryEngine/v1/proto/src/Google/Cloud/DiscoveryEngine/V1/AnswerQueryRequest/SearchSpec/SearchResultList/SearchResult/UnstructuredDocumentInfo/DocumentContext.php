<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Document context.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext</code>
 */
class DocumentContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Page identifier.
     *
     * Generated from protobuf field <code>string page_identifier = 1;</code>
     */
    protected $page_identifier = '';
    /**
     * Document content.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     */
    protected $content = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $page_identifier
     *           Page identifier.
     *     @type string $content
     *           Document content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Page identifier.
     *
     * Generated from protobuf field <code>string page_identifier = 1;</code>
     * @return string
     */
    public function getPageIdentifier()
    {
        return $this->page_identifier;
    }

    /**
     * Page identifier.
     *
     * Generated from protobuf field <code>string page_identifier = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPageIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_identifier = $var;

        return $this;
    }

    /**
     * Document content.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Document content.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentContext::class, \Google\Cloud\DiscoveryEngine\V1\AnswerQueryRequest_SearchSpec_SearchResultList_SearchResult_UnstructuredDocumentInfo_DocumentContext::class);

