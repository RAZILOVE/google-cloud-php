<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\SearchRequest\SpellCorrectionSpec;

use UnexpectedValueException;

/**
 * Enum describing under which mode spell correction should occur.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec.Mode</code>
 */
class Mode
{
    /**
     * Unspecified spell correction mode. In this case, server behavior
     * defaults to
     * [Mode.AUTO][google.cloud.discoveryengine.v1.SearchRequest.SpellCorrectionSpec.Mode.AUTO].
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Search API tries to find a spelling suggestion. If a suggestion is
     * found, it is put in the
     * [SearchResponse.corrected_query][google.cloud.discoveryengine.v1.SearchResponse.corrected_query].
     * The spelling suggestion won't be used as the search query.
     *
     * Generated from protobuf enum <code>SUGGESTION_ONLY = 1;</code>
     */
    const SUGGESTION_ONLY = 1;
    /**
     * Automatic spell correction built by the Search API. Search will
     * be based on the corrected query if found.
     *
     * Generated from protobuf enum <code>AUTO = 2;</code>
     */
    const AUTO = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::SUGGESTION_ONLY => 'SUGGESTION_ONLY',
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
class_alias(Mode::class, \Google\Cloud\DiscoveryEngine\V1\SearchRequest_SpellCorrectionSpec_Mode::class);

