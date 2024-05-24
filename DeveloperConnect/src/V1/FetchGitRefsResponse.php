<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/developerconnect/v1/developer_connect.proto

namespace Google\Cloud\DeveloperConnect\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for fetching git refs.
 *
 * Generated from protobuf message <code>google.cloud.developerconnect.v1.FetchGitRefsResponse</code>
 */
class FetchGitRefsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the refs fetched.
     *
     * Generated from protobuf field <code>repeated string ref_names = 1;</code>
     */
    private $ref_names;
    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ref_names
     *           Name of the refs fetched.
     *     @type string $next_page_token
     *           A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Developerconnect\V1\DeveloperConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the refs fetched.
     *
     * Generated from protobuf field <code>repeated string ref_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRefNames()
    {
        return $this->ref_names;
    }

    /**
     * Name of the refs fetched.
     *
     * Generated from protobuf field <code>repeated string ref_names = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRefNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ref_names = $arr;

        return $this;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

