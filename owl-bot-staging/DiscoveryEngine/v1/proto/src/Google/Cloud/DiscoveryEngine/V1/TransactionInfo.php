<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/user_event.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transaction represents the entire purchase transaction.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.TransactionInfo</code>
 */
class TransactionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Total non-zero value associated with the transaction. This value
     * may include shipping, tax, or other adjustments to the total value that you
     * want to include.
     *
     * Generated from protobuf field <code>optional float value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = null;
    /**
     * Required. Currency code. Use three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $currency = '';
    /**
     * The transaction ID with a length limit of 128 characters.
     *
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     */
    protected $transaction_id = '';
    /**
     * All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>optional float tax = 4;</code>
     */
    protected $tax = null;
    /**
     * All the costs associated with the products. These can be manufacturing
     * costs, shipping expenses not borne by the end user, or any other costs,
     * such that:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float cost = 5;</code>
     */
    protected $cost = null;
    /**
     * The total discount(s) value applied to this transaction.
     * This figure should be excluded from
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * For example, if a user paid
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * amount, then nominal (pre-discount) value of the transaction is the sum of
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * and
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * This means that profit is calculated the same way, regardless of the
     * discount value, and that
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * can be larger than
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float discount_value = 6;</code>
     */
    protected $discount_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           Required. Total non-zero value associated with the transaction. This value
     *           may include shipping, tax, or other adjustments to the total value that you
     *           want to include.
     *     @type string $currency
     *           Required. Currency code. Use three-character ISO-4217 code.
     *     @type string $transaction_id
     *           The transaction ID with a length limit of 128 characters.
     *     @type float $tax
     *           All the taxes associated with the transaction.
     *     @type float $cost
     *           All the costs associated with the products. These can be manufacturing
     *           costs, shipping expenses not borne by the end user, or any other costs,
     *           such that:
     *           * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     *           [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     *           [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *     @type float $discount_value
     *           The total discount(s) value applied to this transaction.
     *           This figure should be excluded from
     *           [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     *           For example, if a user paid
     *           [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     *           amount, then nominal (pre-discount) value of the transaction is the sum of
     *           [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     *           and
     *           [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     *           This means that profit is calculated the same way, regardless of the
     *           discount value, and that
     *           [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     *           can be larger than
     *           [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]:
     *           * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     *           [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     *           [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Total non-zero value associated with the transaction. This value
     * may include shipping, tax, or other adjustments to the total value that you
     * want to include.
     *
     * Generated from protobuf field <code>optional float value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : 0.0;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Required. Total non-zero value associated with the transaction. This value
     * may include shipping, tax, or other adjustments to the total value that you
     * want to include.
     *
     * Generated from protobuf field <code>optional float value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Required. Currency code. Use three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Required. Currency code. Use three-character ISO-4217 code.
     *
     * Generated from protobuf field <code>string currency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     * The transaction ID with a length limit of 128 characters.
     *
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * The transaction ID with a length limit of 128 characters.
     *
     * Generated from protobuf field <code>string transaction_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>optional float tax = 4;</code>
     * @return float
     */
    public function getTax()
    {
        return isset($this->tax) ? $this->tax : 0.0;
    }

    public function hasTax()
    {
        return isset($this->tax);
    }

    public function clearTax()
    {
        unset($this->tax);
    }

    /**
     * All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>optional float tax = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setTax($var)
    {
        GPBUtil::checkFloat($var);
        $this->tax = $var;

        return $this;
    }

    /**
     * All the costs associated with the products. These can be manufacturing
     * costs, shipping expenses not borne by the end user, or any other costs,
     * such that:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float cost = 5;</code>
     * @return float
     */
    public function getCost()
    {
        return isset($this->cost) ? $this->cost : 0.0;
    }

    public function hasCost()
    {
        return isset($this->cost);
    }

    public function clearCost()
    {
        unset($this->cost);
    }

    /**
     * All the costs associated with the products. These can be manufacturing
     * costs, shipping expenses not borne by the end user, or any other costs,
     * such that:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float cost = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setCost($var)
    {
        GPBUtil::checkFloat($var);
        $this->cost = $var;

        return $this;
    }

    /**
     * The total discount(s) value applied to this transaction.
     * This figure should be excluded from
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * For example, if a user paid
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * amount, then nominal (pre-discount) value of the transaction is the sum of
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * and
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * This means that profit is calculated the same way, regardless of the
     * discount value, and that
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * can be larger than
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float discount_value = 6;</code>
     * @return float
     */
    public function getDiscountValue()
    {
        return isset($this->discount_value) ? $this->discount_value : 0.0;
    }

    public function hasDiscountValue()
    {
        return isset($this->discount_value);
    }

    public function clearDiscountValue()
    {
        unset($this->discount_value);
    }

    /**
     * The total discount(s) value applied to this transaction.
     * This figure should be excluded from
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * For example, if a user paid
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * amount, then nominal (pre-discount) value of the transaction is the sum of
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]
     * and
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * This means that profit is calculated the same way, regardless of the
     * discount value, and that
     * [TransactionInfo.discount_value][google.cloud.discoveryengine.v1.TransactionInfo.discount_value]
     * can be larger than
     * [TransactionInfo.value][google.cloud.discoveryengine.v1.TransactionInfo.value]:
     * * Profit = [value][google.cloud.discoveryengine.v1.TransactionInfo.value] -
     * [tax][google.cloud.discoveryengine.v1.TransactionInfo.tax] -
     * [cost][google.cloud.discoveryengine.v1.TransactionInfo.cost]
     *
     * Generated from protobuf field <code>optional float discount_value = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setDiscountValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->discount_value = $var;

        return $this;
    }

}

