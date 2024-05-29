<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Relationship between
 * [Entities][google.cloud.documentai.v1.Document.Entity].
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.EntityRelation</code>
 */
class EntityRelation extends \Google\Protobuf\Internal\Message
{
    /**
     * Subject entity id.
     *
     * Generated from protobuf field <code>string subject_id = 1;</code>
     */
    protected $subject_id = '';
    /**
     * Object entity id.
     *
     * Generated from protobuf field <code>string object_id = 2;</code>
     */
    protected $object_id = '';
    /**
     * Relationship description.
     *
     * Generated from protobuf field <code>string relation = 3;</code>
     */
    protected $relation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subject_id
     *           Subject entity id.
     *     @type string $object_id
     *           Object entity id.
     *     @type string $relation
     *           Relationship description.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Subject entity id.
     *
     * Generated from protobuf field <code>string subject_id = 1;</code>
     * @return string
     */
    public function getSubjectId()
    {
        return $this->subject_id;
    }

    /**
     * Subject entity id.
     *
     * Generated from protobuf field <code>string subject_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject_id = $var;

        return $this;
    }

    /**
     * Object entity id.
     *
     * Generated from protobuf field <code>string object_id = 2;</code>
     * @return string
     */
    public function getObjectId()
    {
        return $this->object_id;
    }

    /**
     * Object entity id.
     *
     * Generated from protobuf field <code>string object_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setObjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->object_id = $var;

        return $this;
    }

    /**
     * Relationship description.
     *
     * Generated from protobuf field <code>string relation = 3;</code>
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Relationship description.
     *
     * Generated from protobuf field <code>string relation = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRelation($var)
    {
        GPBUtil::checkString($var, True);
        $this->relation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EntityRelation::class, \Google\Cloud\DocumentAI\V1\Document_EntityRelation::class);

