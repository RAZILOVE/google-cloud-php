<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_processing_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig\ParsingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The OCR parsing configurations for documents.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.DocumentProcessingConfig.ParsingConfig.OcrParsingConfig</code>
 */
class OcrParsingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * [DEPRECATED] This field is deprecated. To use the additional enhanced
     * document elements processing, please switch to `layout_parsing_config`.
     *
     * Generated from protobuf field <code>repeated string enhanced_document_elements = 1 [deprecated = true];</code>
     * @deprecated
     */
    private $enhanced_document_elements;
    /**
     * If true, will use native text instead of OCR text on pages containing
     * native text.
     *
     * Generated from protobuf field <code>bool use_native_text = 2;</code>
     */
    protected $use_native_text = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $enhanced_document_elements
     *           [DEPRECATED] This field is deprecated. To use the additional enhanced
     *           document elements processing, please switch to `layout_parsing_config`.
     *     @type bool $use_native_text
     *           If true, will use native text instead of OCR text on pages containing
     *           native text.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\DocumentProcessingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * [DEPRECATED] This field is deprecated. To use the additional enhanced
     * document elements processing, please switch to `layout_parsing_config`.
     *
     * Generated from protobuf field <code>repeated string enhanced_document_elements = 1 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getEnhancedDocumentElements()
    {
        @trigger_error('enhanced_document_elements is deprecated.', E_USER_DEPRECATED);
        return $this->enhanced_document_elements;
    }

    /**
     * [DEPRECATED] This field is deprecated. To use the additional enhanced
     * document elements processing, please switch to `layout_parsing_config`.
     *
     * Generated from protobuf field <code>repeated string enhanced_document_elements = 1 [deprecated = true];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setEnhancedDocumentElements($var)
    {
        @trigger_error('enhanced_document_elements is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->enhanced_document_elements = $arr;

        return $this;
    }

    /**
     * If true, will use native text instead of OCR text on pages containing
     * native text.
     *
     * Generated from protobuf field <code>bool use_native_text = 2;</code>
     * @return bool
     */
    public function getUseNativeText()
    {
        return $this->use_native_text;
    }

    /**
     * If true, will use native text instead of OCR text on pages containing
     * native text.
     *
     * Generated from protobuf field <code>bool use_native_text = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseNativeText($var)
    {
        GPBUtil::checkBool($var);
        $this->use_native_text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OcrParsingConfig::class, \Google\Cloud\DiscoveryEngine\V1\DocumentProcessingConfig_ParsingConfig_OcrParsingConfig::class);

