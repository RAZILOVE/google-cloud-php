<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/site_search_engine.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\TargetSite;

use UnexpectedValueException;

/**
 * Target site indexing status enumeration.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.TargetSite.IndexingStatus</code>
 */
class IndexingStatus
{
    /**
     * Defaults to SUCCEEDED.
     *
     * Generated from protobuf enum <code>INDEXING_STATUS_UNSPECIFIED = 0;</code>
     */
    const INDEXING_STATUS_UNSPECIFIED = 0;
    /**
     * The target site is in the update queue and will be picked up by indexing
     * pipeline.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The target site fails to be indexed.
     *
     * Generated from protobuf enum <code>FAILED = 2;</code>
     */
    const FAILED = 2;
    /**
     * The target site has been indexed.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 3;</code>
     */
    const SUCCEEDED = 3;
    /**
     * The previously indexed target site has been marked to be deleted. This is
     * a transitioning state which will resulted in either:
     * 1. target site deleted if unindexing is successful;
     * 2. state reverts to SUCCEEDED if the unindexing fails.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;

    private static $valueToName = [
        self::INDEXING_STATUS_UNSPECIFIED => 'INDEXING_STATUS_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::FAILED => 'FAILED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::DELETING => 'DELETING',
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
class_alias(IndexingStatus::class, \Google\Cloud\DiscoveryEngine\V1beta\TargetSite_IndexingStatus::class);

