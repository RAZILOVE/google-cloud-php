<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\BigtableOptions;

use UnexpectedValueException;

/**
 * The type of values in a Bigtable column or column family.
 * The values are expected to be encoded using
 * [HBase
 * Bytes.toBytes](https://hbase.apache.org/apidocs/org/apache/hadoop/hbase/util/Bytes.html)
 * function when the encoding value is set to `BINARY`.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.BigtableOptions.Type</code>
 */
class Type
{
    /**
     * The type is unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * String type.
     *
     * Generated from protobuf enum <code>STRING = 1;</code>
     */
    const STRING = 1;
    /**
     * Numerical type.
     *
     * Generated from protobuf enum <code>NUMBER = 2;</code>
     */
    const NUMBER = 2;
    /**
     * Integer type.
     *
     * Generated from protobuf enum <code>INTEGER = 3;</code>
     */
    const INTEGER = 3;
    /**
     * Variable length integer type.
     *
     * Generated from protobuf enum <code>VAR_INTEGER = 4;</code>
     */
    const VAR_INTEGER = 4;
    /**
     * BigDecimal type.
     *
     * Generated from protobuf enum <code>BIG_NUMERIC = 5;</code>
     */
    const BIG_NUMERIC = 5;
    /**
     * Boolean type.
     *
     * Generated from protobuf enum <code>BOOLEAN = 6;</code>
     */
    const BOOLEAN = 6;
    /**
     * JSON type.
     *
     * Generated from protobuf enum <code>JSON = 7;</code>
     */
    const JSON = 7;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::STRING => 'STRING',
        self::NUMBER => 'NUMBER',
        self::INTEGER => 'INTEGER',
        self::VAR_INTEGER => 'VAR_INTEGER',
        self::BIG_NUMERIC => 'BIG_NUMERIC',
        self::BOOLEAN => 'BOOLEAN',
        self::JSON => 'JSON',
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
class_alias(Type::class, \Google\Cloud\DiscoveryEngine\V1beta\BigtableOptions_Type::class);

