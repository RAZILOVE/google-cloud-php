<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\ImportDocumentsRequest;

use UnexpectedValueException;

/**
 * Indicates how imported documents are reconciled with the existing documents
 * created or imported before.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.ImportDocumentsRequest.ReconciliationMode</code>
 */
class ReconciliationMode
{
    /**
     * Defaults to `INCREMENTAL`.
     *
     * Generated from protobuf enum <code>RECONCILIATION_MODE_UNSPECIFIED = 0;</code>
     */
    const RECONCILIATION_MODE_UNSPECIFIED = 0;
    /**
     * Inserts new documents or updates existing documents.
     *
     * Generated from protobuf enum <code>INCREMENTAL = 1;</code>
     */
    const INCREMENTAL = 1;
    /**
     * Calculates diff and replaces the entire document dataset. Existing
     * documents may be deleted if they are not present in the source location.
     *
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;

    private static $valueToName = [
        self::RECONCILIATION_MODE_UNSPECIFIED => 'RECONCILIATION_MODE_UNSPECIFIED',
        self::INCREMENTAL => 'INCREMENTAL',
        self::FULL => 'FULL',
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
class_alias(ReconciliationMode::class, \Google\Cloud\DiscoveryEngine\V1beta\ImportDocumentsRequest_ReconciliationMode::class);

