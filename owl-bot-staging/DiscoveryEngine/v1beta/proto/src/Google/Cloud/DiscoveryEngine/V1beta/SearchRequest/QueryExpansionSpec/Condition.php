<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\QueryExpansionSpec;

use UnexpectedValueException;

/**
 * Enum describing under which condition query expansion should occur.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition</code>
 */
class Condition
{
    /**
     * Unspecified query expansion condition. In this case, server behavior
     * defaults to
     * [Condition.DISABLED][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition.DISABLED].
     *
     * Generated from protobuf enum <code>CONDITION_UNSPECIFIED = 0;</code>
     */
    const CONDITION_UNSPECIFIED = 0;
    /**
     * Disabled query expansion. Only the exact search query is used, even if
     * [SearchResponse.total_size][google.cloud.discoveryengine.v1beta.SearchResponse.total_size]
     * is zero.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Automatic query expansion built by the Search API.
     *
     * Generated from protobuf enum <code>AUTO = 2;</code>
     */
    const AUTO = 2;

    private static $valueToName = [
        self::CONDITION_UNSPECIFIED => 'CONDITION_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::AUTO => 'AUTO',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Condition::class, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest_QueryExpansionSpec_Condition::class);

