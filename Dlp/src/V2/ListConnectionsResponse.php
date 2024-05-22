<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListConnections.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListConnectionsResponse</code>
 */
class ListConnectionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of connections.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Connection connections = 1;</code>
     */
    private $connections;
    /**
     * Token to retrieve the next page of results. An empty value means there are
     * no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\Connection>|\Google\Protobuf\Internal\RepeatedField $connections
     *           List of connections.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results. An empty value means there are
     *           no more results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * List of connections.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Connection connections = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnections()
    {
        return $this->connections;
    }

    /**
     * List of connections.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Connection connections = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\Connection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Connection::class);
        $this->connections = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results. An empty value means there are
     * no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results. An empty value means there are
     * no more results.
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

