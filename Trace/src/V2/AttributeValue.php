<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The allowed types for [VALUE] in a `[KEY]:[VALUE]` attribute.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.AttributeValue</code>
 */
final class AttributeValue extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Trace\V2\TruncatableString $string_value
     *           A string up to 256 bytes long.
     *     @type int|string $int_value
     *           A 64-bit signed integer.
     *     @type bool $bool_value
     *           A Boolean value represented by `true` or `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * A string up to 256 bytes long.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.TruncatableString string_value = 1;</code>
     * @return \Google\Cloud\Trace\V2\TruncatableString
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    /**
     * A string up to 256 bytes long.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.TruncatableString string_value = 1;</code>
     * @param \Google\Cloud\Trace\V2\TruncatableString $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Trace\V2\TruncatableString::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A 64-bit signed integer.
     *
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(2);
    }

    /**
     * A 64-bit signed integer.
     *
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A Boolean value represented by `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 3;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(3);
    }

    /**
     * A Boolean value represented by `true` or `false`.
     *
     * Generated from protobuf field <code>bool bool_value = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

