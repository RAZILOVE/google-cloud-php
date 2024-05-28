<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/conversational_search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search result.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult</code>
 */
class SearchResult extends \Google\Protobuf\Internal\Message
{
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo $unstructured_document_info
     *           Unstructured document information.
     *     @type \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\ChunkInfo $chunk_info
     *           Chunk information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\ConversationalSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Unstructured document information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo unstructured_document_info = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo|null
     */
    public function getUnstructuredDocumentInfo()
    {
        return $this->readOneof(1);
    }

    public function hasUnstructuredDocumentInfo()
    {
        return $this->hasOneof(1);
    }

    /**
     * Unstructured document information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo unstructured_document_info = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo $var
     * @return $this
     */
    public function setUnstructuredDocumentInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\UnstructuredDocumentInfo::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Chunk information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.ChunkInfo chunk_info = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\ChunkInfo|null
     */
    public function getChunkInfo()
    {
        return $this->readOneof(2);
    }

    public function hasChunkInfo()
    {
        return $this->hasOneof(2);
    }

    /**
     * Chunk information.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.ChunkInfo chunk_info = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\ChunkInfo $var
     * @return $this
     */
    public function setChunkInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest\SearchSpec\SearchResultList\SearchResult\ChunkInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchResult::class, \Google\Cloud\DiscoveryEngine\V1beta\AnswerQueryRequest_SearchSpec_SearchResultList_SearchResult::class);

