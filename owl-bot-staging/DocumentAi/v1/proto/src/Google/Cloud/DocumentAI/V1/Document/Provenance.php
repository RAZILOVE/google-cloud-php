<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structure to identify provenance relationships between annotations in
 * different revisions.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.Provenance</code>
 */
class Provenance extends \Google\Protobuf\Internal\Message
{
    /**
     * The index of the revision that produced this element.
     *
     * Generated from protobuf field <code>int32 revision = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $revision = 0;
    /**
     * The Id of this operation.  Needs to be unique within the scope of the
     * revision.
     *
     * Generated from protobuf field <code>int32 id = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $id = 0;
    /**
     * References to the original elements that are replaced.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance.Parent parents = 3;</code>
     */
    private $parents;
    /**
     * The type of provenance operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance.OperationType type = 4;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $revision
     *           The index of the revision that produced this element.
     *     @type int $id
     *           The Id of this operation.  Needs to be unique within the scope of the
     *           revision.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\Provenance\PBParent>|\Google\Protobuf\Internal\RepeatedField $parents
     *           References to the original elements that are replaced.
     *     @type int $type
     *           The type of provenance operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * The index of the revision that produced this element.
     *
     * Generated from protobuf field <code>int32 revision = 1 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getRevision()
    {
        @trigger_error('revision is deprecated.', E_USER_DEPRECATED);
        return $this->revision;
    }

    /**
     * The index of the revision that produced this element.
     *
     * Generated from protobuf field <code>int32 revision = 1 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setRevision($var)
    {
        @trigger_error('revision is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt32($var);
        $this->revision = $var;

        return $this;
    }

    /**
     * The Id of this operation.  Needs to be unique within the scope of the
     * revision.
     *
     * Generated from protobuf field <code>int32 id = 2 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getId()
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        return $this->id;
    }

    /**
     * The Id of this operation.  Needs to be unique within the scope of the
     * revision.
     *
     * Generated from protobuf field <code>int32 id = 2 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setId($var)
    {
        @trigger_error('id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * References to the original elements that are replaced.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance.Parent parents = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * References to the original elements that are replaced.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.Provenance.Parent parents = 3;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\Provenance\PBParent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\Provenance\PBParent::class);
        $this->parents = $arr;

        return $this;
    }

    /**
     * The type of provenance operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance.OperationType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of provenance operation.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.Document.Provenance.OperationType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DocumentAI\V1\Document\Provenance\OperationType::class);
        $this->type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Provenance::class, \Google\Cloud\DocumentAI\V1\Document_Provenance::class);

