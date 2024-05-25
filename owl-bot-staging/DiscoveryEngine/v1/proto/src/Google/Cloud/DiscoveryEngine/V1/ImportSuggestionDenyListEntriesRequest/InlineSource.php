<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1\ImportSuggestionDenyListEntriesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The inline source for SuggestionDenyListEntry.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ImportSuggestionDenyListEntriesRequest.InlineSource</code>
 */
class InlineSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of all denylist entries to import. Max of 1000 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SuggestionDenyListEntry entries = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\SuggestionDenyListEntry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           Required. A list of all denylist entries to import. Max of 1000 items.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of all denylist entries to import. Max of 1000 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SuggestionDenyListEntry entries = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Required. A list of all denylist entries to import. Max of 1000 items.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.SuggestionDenyListEntry entries = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\SuggestionDenyListEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\SuggestionDenyListEntry::class);
        $this->entries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InlineSource::class, \Google\Cloud\DiscoveryEngine\V1\ImportSuggestionDenyListEntriesRequest_InlineSource::class);

