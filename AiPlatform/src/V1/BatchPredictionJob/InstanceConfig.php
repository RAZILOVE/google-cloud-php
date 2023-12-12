<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/batch_prediction_job.proto

namespace Google\Cloud\AIPlatform\V1\BatchPredictionJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration defining how to transform batch prediction input instances to
 * the instances that the Model accepts.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig</code>
 */
class InstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The format of the instance that the Model accepts. Vertex AI will
     * convert compatible
     * [batch prediction input instance
     * formats][google.cloud.aiplatform.v1.BatchPredictionJob.InputConfig.instances_format]
     * to the specified format.
     * Supported values are:
     * * `object`: Each input is converted to JSON object format.
     *     * For `bigquery`, each row is converted to an object.
     *     * For `jsonl`, each line of the JSONL input must be an object.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * * `array`: Each input is converted to JSON array format.
     *     * For `bigquery`, each row is converted to an array. The order
     *       of columns is determined by the BigQuery column order, unless
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       is populated.
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * For `jsonl`, if each line of the JSONL input is an object,
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * If not specified, Vertex AI converts the batch prediction input as
     * follows:
     *  * For `bigquery` and `csv`, the behavior is the same as `array`. The
     *    order of columns is the same as defined in the file or table, unless
     *    [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *    is populated.
     *  * For `jsonl`, the prediction instance format is determined by
     *    each line of the input.
     *  * For `tf-record`/`tf-record-gzip`, each record will be converted to
     *    an object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the record.
     *  * For `file-list`, each file in the list will be converted to an
     *    object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the file.
     *
     * Generated from protobuf field <code>string instance_type = 1;</code>
     */
    private $instance_type = '';
    /**
     * The name of the field that is considered as a key.
     * The values identified by the key field is not included in the transformed
     * instances that is sent to the Model. This is similar to
     * specifying this name of the field in
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields].
     * In addition, the batch prediction output will not include the instances.
     * Instead the output will only include the value of the key field, in a
     * field named `key` in the output:
     *  * For `jsonl` output format, the output will have a `key` field
     *    instead of the `instance` field.
     *  * For `csv`/`bigquery` output format, the output will have have a `key`
     *    column instead of the instance feature columns.
     * The input must be JSONL with objects at each line, CSV, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>string key_field = 2;</code>
     */
    private $key_field = '';
    /**
     * Fields that will be included in the prediction instance that is
     * sent to the Model.
     * If
     * [instance_type][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.instance_type]
     * is `array`, the order of field names in included_fields also determines
     * the order of the values in the array.
     * When included_fields is populated,
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string included_fields = 3;</code>
     */
    private $included_fields;
    /**
     * Fields that will be excluded in the prediction instance that is
     * sent to the Model.
     * Excluded will be attached to the batch prediction output if
     * [key_field][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.key_field]
     * is not specified.
     * When excluded_fields is populated,
     * [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string excluded_fields = 4;</code>
     */
    private $excluded_fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_type
     *           The format of the instance that the Model accepts. Vertex AI will
     *           convert compatible
     *           [batch prediction input instance
     *           formats][google.cloud.aiplatform.v1.BatchPredictionJob.InputConfig.instances_format]
     *           to the specified format.
     *           Supported values are:
     *           * `object`: Each input is converted to JSON object format.
     *               * For `bigquery`, each row is converted to an object.
     *               * For `jsonl`, each line of the JSONL input must be an object.
     *               * Does not apply to `csv`, `file-list`, `tf-record`, or
     *                 `tf-record-gzip`.
     *           * `array`: Each input is converted to JSON array format.
     *               * For `bigquery`, each row is converted to an array. The order
     *                 of columns is determined by the BigQuery column order, unless
     *                 [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *                 is populated.
     *                 [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *                 must be populated for specifying field orders.
     *               * For `jsonl`, if each line of the JSONL input is an object,
     *                 [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *                 must be populated for specifying field orders.
     *               * Does not apply to `csv`, `file-list`, `tf-record`, or
     *                 `tf-record-gzip`.
     *           If not specified, Vertex AI converts the batch prediction input as
     *           follows:
     *            * For `bigquery` and `csv`, the behavior is the same as `array`. The
     *              order of columns is the same as defined in the file or table, unless
     *              [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *              is populated.
     *            * For `jsonl`, the prediction instance format is determined by
     *              each line of the input.
     *            * For `tf-record`/`tf-record-gzip`, each record will be converted to
     *              an object in the format of `{"b64": <value>}`, where `<value>` is
     *              the Base64-encoded string of the content of the record.
     *            * For `file-list`, each file in the list will be converted to an
     *              object in the format of `{"b64": <value>}`, where `<value>` is
     *              the Base64-encoded string of the content of the file.
     *     @type string $key_field
     *           The name of the field that is considered as a key.
     *           The values identified by the key field is not included in the transformed
     *           instances that is sent to the Model. This is similar to
     *           specifying this name of the field in
     *           [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields].
     *           In addition, the batch prediction output will not include the instances.
     *           Instead the output will only include the value of the key field, in a
     *           field named `key` in the output:
     *            * For `jsonl` output format, the output will have a `key` field
     *              instead of the `instance` field.
     *            * For `csv`/`bigquery` output format, the output will have have a `key`
     *              column instead of the instance feature columns.
     *           The input must be JSONL with objects at each line, CSV, BigQuery
     *           or TfRecord.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $included_fields
     *           Fields that will be included in the prediction instance that is
     *           sent to the Model.
     *           If
     *           [instance_type][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.instance_type]
     *           is `array`, the order of field names in included_fields also determines
     *           the order of the values in the array.
     *           When included_fields is populated,
     *           [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields]
     *           must be empty.
     *           The input must be JSONL with objects at each line, BigQuery
     *           or TfRecord.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $excluded_fields
     *           Fields that will be excluded in the prediction instance that is
     *           sent to the Model.
     *           Excluded will be attached to the batch prediction output if
     *           [key_field][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.key_field]
     *           is not specified.
     *           When excluded_fields is populated,
     *           [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *           must be empty.
     *           The input must be JSONL with objects at each line, BigQuery
     *           or TfRecord.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\BatchPredictionJob::initOnce();
        parent::__construct($data);
    }

    /**
     * The format of the instance that the Model accepts. Vertex AI will
     * convert compatible
     * [batch prediction input instance
     * formats][google.cloud.aiplatform.v1.BatchPredictionJob.InputConfig.instances_format]
     * to the specified format.
     * Supported values are:
     * * `object`: Each input is converted to JSON object format.
     *     * For `bigquery`, each row is converted to an object.
     *     * For `jsonl`, each line of the JSONL input must be an object.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * * `array`: Each input is converted to JSON array format.
     *     * For `bigquery`, each row is converted to an array. The order
     *       of columns is determined by the BigQuery column order, unless
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       is populated.
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * For `jsonl`, if each line of the JSONL input is an object,
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * If not specified, Vertex AI converts the batch prediction input as
     * follows:
     *  * For `bigquery` and `csv`, the behavior is the same as `array`. The
     *    order of columns is the same as defined in the file or table, unless
     *    [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *    is populated.
     *  * For `jsonl`, the prediction instance format is determined by
     *    each line of the input.
     *  * For `tf-record`/`tf-record-gzip`, each record will be converted to
     *    an object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the record.
     *  * For `file-list`, each file in the list will be converted to an
     *    object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the file.
     *
     * Generated from protobuf field <code>string instance_type = 1;</code>
     * @return string
     */
    public function getInstanceType()
    {
        return $this->instance_type;
    }

    /**
     * The format of the instance that the Model accepts. Vertex AI will
     * convert compatible
     * [batch prediction input instance
     * formats][google.cloud.aiplatform.v1.BatchPredictionJob.InputConfig.instances_format]
     * to the specified format.
     * Supported values are:
     * * `object`: Each input is converted to JSON object format.
     *     * For `bigquery`, each row is converted to an object.
     *     * For `jsonl`, each line of the JSONL input must be an object.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * * `array`: Each input is converted to JSON array format.
     *     * For `bigquery`, each row is converted to an array. The order
     *       of columns is determined by the BigQuery column order, unless
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       is populated.
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * For `jsonl`, if each line of the JSONL input is an object,
     *       [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *       must be populated for specifying field orders.
     *     * Does not apply to `csv`, `file-list`, `tf-record`, or
     *       `tf-record-gzip`.
     * If not specified, Vertex AI converts the batch prediction input as
     * follows:
     *  * For `bigquery` and `csv`, the behavior is the same as `array`. The
     *    order of columns is the same as defined in the file or table, unless
     *    [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     *    is populated.
     *  * For `jsonl`, the prediction instance format is determined by
     *    each line of the input.
     *  * For `tf-record`/`tf-record-gzip`, each record will be converted to
     *    an object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the record.
     *  * For `file-list`, each file in the list will be converted to an
     *    object in the format of `{"b64": <value>}`, where `<value>` is
     *    the Base64-encoded string of the content of the file.
     *
     * Generated from protobuf field <code>string instance_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_type = $var;

        return $this;
    }

    /**
     * The name of the field that is considered as a key.
     * The values identified by the key field is not included in the transformed
     * instances that is sent to the Model. This is similar to
     * specifying this name of the field in
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields].
     * In addition, the batch prediction output will not include the instances.
     * Instead the output will only include the value of the key field, in a
     * field named `key` in the output:
     *  * For `jsonl` output format, the output will have a `key` field
     *    instead of the `instance` field.
     *  * For `csv`/`bigquery` output format, the output will have have a `key`
     *    column instead of the instance feature columns.
     * The input must be JSONL with objects at each line, CSV, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>string key_field = 2;</code>
     * @return string
     */
    public function getKeyField()
    {
        return $this->key_field;
    }

    /**
     * The name of the field that is considered as a key.
     * The values identified by the key field is not included in the transformed
     * instances that is sent to the Model. This is similar to
     * specifying this name of the field in
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields].
     * In addition, the batch prediction output will not include the instances.
     * Instead the output will only include the value of the key field, in a
     * field named `key` in the output:
     *  * For `jsonl` output format, the output will have a `key` field
     *    instead of the `instance` field.
     *  * For `csv`/`bigquery` output format, the output will have have a `key`
     *    column instead of the instance feature columns.
     * The input must be JSONL with objects at each line, CSV, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>string key_field = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyField($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_field = $var;

        return $this;
    }

    /**
     * Fields that will be included in the prediction instance that is
     * sent to the Model.
     * If
     * [instance_type][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.instance_type]
     * is `array`, the order of field names in included_fields also determines
     * the order of the values in the array.
     * When included_fields is populated,
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string included_fields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludedFields()
    {
        return $this->included_fields;
    }

    /**
     * Fields that will be included in the prediction instance that is
     * sent to the Model.
     * If
     * [instance_type][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.instance_type]
     * is `array`, the order of field names in included_fields also determines
     * the order of the values in the array.
     * When included_fields is populated,
     * [excluded_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.excluded_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string included_fields = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->included_fields = $arr;

        return $this;
    }

    /**
     * Fields that will be excluded in the prediction instance that is
     * sent to the Model.
     * Excluded will be attached to the batch prediction output if
     * [key_field][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.key_field]
     * is not specified.
     * When excluded_fields is populated,
     * [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string excluded_fields = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedFields()
    {
        return $this->excluded_fields;
    }

    /**
     * Fields that will be excluded in the prediction instance that is
     * sent to the Model.
     * Excluded will be attached to the batch prediction output if
     * [key_field][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.key_field]
     * is not specified.
     * When excluded_fields is populated,
     * [included_fields][google.cloud.aiplatform.v1.BatchPredictionJob.InstanceConfig.included_fields]
     * must be empty.
     * The input must be JSONL with objects at each line, BigQuery
     * or TfRecord.
     *
     * Generated from protobuf field <code>repeated string excluded_fields = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excluded_fields = $arr;

        return $this;
    }

}


