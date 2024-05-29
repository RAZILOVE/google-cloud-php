<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a cell in a table row.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableCell</code>
 */
class LayoutTableCell extends \Google\Protobuf\Internal\Message
{
    /**
     * A table cell is a list of blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 1;</code>
     */
    private $blocks;
    /**
     * How many rows this cell spans.
     *
     * Generated from protobuf field <code>int32 row_span = 2;</code>
     */
    protected $row_span = 0;
    /**
     * How many columns this cell spans.
     *
     * Generated from protobuf field <code>int32 col_span = 3;</code>
     */
    protected $col_span = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock>|\Google\Protobuf\Internal\RepeatedField $blocks
     *           A table cell is a list of blocks.
     *           Repeated blocks support further hierarchies and nested blocks.
     *     @type int $row_span
     *           How many rows this cell spans.
     *     @type int $col_span
     *           How many columns this cell spans.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * A table cell is a list of blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * A table cell is a list of blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 1;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock::class);
        $this->blocks = $arr;

        return $this;
    }

    /**
     * How many rows this cell spans.
     *
     * Generated from protobuf field <code>int32 row_span = 2;</code>
     * @return int
     */
    public function getRowSpan()
    {
        return $this->row_span;
    }

    /**
     * How many rows this cell spans.
     *
     * Generated from protobuf field <code>int32 row_span = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRowSpan($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_span = $var;

        return $this;
    }

    /**
     * How many columns this cell spans.
     *
     * Generated from protobuf field <code>int32 col_span = 3;</code>
     * @return int
     */
    public function getColSpan()
    {
        return $this->col_span;
    }

    /**
     * How many columns this cell spans.
     *
     * Generated from protobuf field <code>int32 col_span = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setColSpan($var)
    {
        GPBUtil::checkInt32($var);
        $this->col_span = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LayoutTableCell::class, \Google\Cloud\DocumentAI\V1\Document_DocumentLayout_DocumentLayoutBlock_LayoutTableCell::class);

