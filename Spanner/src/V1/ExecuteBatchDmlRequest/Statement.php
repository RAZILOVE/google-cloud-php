<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single DML statement.
 *
 * Generated from protobuf message <code>google.spanner.v1.ExecuteBatchDmlRequest.Statement</code>
 */
class Statement extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The DML string.
     *
     * Generated from protobuf field <code>string sql = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sql = '';
    /**
     * Parameter names and values that bind to placeholders in the DML string.
     * A parameter placeholder consists of the `&#64;` character followed by the
     * parameter name (for example, `&#64;firstName`). Parameter names can contain
     * letters, numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The
     * same parameter name can be used more than once, for example:
     * `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute a SQL statement with unbound parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     */
    private $params = null;
    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in
     * [params][google.spanner.v1.ExecuteBatchDmlRequest.Statement.params] as
     * JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL statement parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 3;</code>
     */
    private $param_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql
     *           Required. The DML string.
     *     @type \Google\Protobuf\Struct $params
     *           Parameter names and values that bind to placeholders in the DML string.
     *           A parameter placeholder consists of the `&#64;` character followed by the
     *           parameter name (for example, `&#64;firstName`). Parameter names can contain
     *           letters, numbers, and underscores.
     *           Parameters can appear anywhere that a literal value is expected.  The
     *           same parameter name can be used more than once, for example:
     *           `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     *           It is an error to execute a SQL statement with unbound parameters.
     *     @type array|\Google\Protobuf\Internal\MapField $param_types
     *           It is not always possible for Cloud Spanner to infer the right SQL type
     *           from a JSON value.  For example, values of type `BYTES` and values
     *           of type `STRING` both appear in
     *           [params][google.spanner.v1.ExecuteBatchDmlRequest.Statement.params] as
     *           JSON strings.
     *           In these cases, `param_types` can be used to specify the exact
     *           SQL type for some or all of the SQL statement parameters. See the
     *           definition of [Type][google.spanner.v1.Type] for more information
     *           about SQL types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The DML string.
     *
     * Generated from protobuf field <code>string sql = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Required. The DML string.
     *
     * Generated from protobuf field <code>string sql = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSql($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql = $var;

        return $this;
    }

    /**
     * Parameter names and values that bind to placeholders in the DML string.
     * A parameter placeholder consists of the `&#64;` character followed by the
     * parameter name (for example, `&#64;firstName`). Parameter names can contain
     * letters, numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The
     * same parameter name can be used more than once, for example:
     * `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute a SQL statement with unbound parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Parameter names and values that bind to placeholders in the DML string.
     * A parameter placeholder consists of the `&#64;` character followed by the
     * parameter name (for example, `&#64;firstName`). Parameter names can contain
     * letters, numbers, and underscores.
     * Parameters can appear anywhere that a literal value is expected.  The
     * same parameter name can be used more than once, for example:
     * `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     * It is an error to execute a SQL statement with unbound parameters.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct params = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in
     * [params][google.spanner.v1.ExecuteBatchDmlRequest.Statement.params] as
     * JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL statement parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParamTypes()
    {
        return $this->param_types;
    }

    /**
     * It is not always possible for Cloud Spanner to infer the right SQL type
     * from a JSON value.  For example, values of type `BYTES` and values
     * of type `STRING` both appear in
     * [params][google.spanner.v1.ExecuteBatchDmlRequest.Statement.params] as
     * JSON strings.
     * In these cases, `param_types` can be used to specify the exact
     * SQL type for some or all of the SQL statement parameters. See the
     * definition of [Type][google.spanner.v1.Type] for more information
     * about SQL types.
     *
     * Generated from protobuf field <code>map<string, .google.spanner.v1.Type> param_types = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParamTypes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\Type::class);
        $this->param_types = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Statement::class, \Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest_Statement::class);

