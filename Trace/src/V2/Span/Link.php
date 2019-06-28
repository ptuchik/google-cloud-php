<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\Span;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pointer from the current span to another span in the same trace or in a
 * different trace. For example, this can be used in batching operations,
 * where a single batch handler processes multiple requests from different
 * traces or when the handler receives a request from a different project.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.Span.Link</code>
 */
final class Link extends \Google\Protobuf\Internal\Message
{
    /**
     * The [TRACE_ID] for a trace within a project.
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     */
    private $trace_id = '';
    /**
     * The [SPAN_ID] for a span within a trace.
     *
     * Generated from protobuf field <code>string span_id = 2;</code>
     */
    private $span_id = '';
    /**
     * The relationship of the current span relative to the linked span.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Link.Type type = 3;</code>
     */
    private $type = 0;
    /**
     * A set of attributes on the link. You have have up to  32 attributes per
     * link.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 4;</code>
     */
    private $attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trace_id
     *           The [TRACE_ID] for a trace within a project.
     *     @type string $span_id
     *           The [SPAN_ID] for a span within a trace.
     *     @type int $type
     *           The relationship of the current span relative to the linked span.
     *     @type \Google\Cloud\Trace\V2\Span\Attributes $attributes
     *           A set of attributes on the link. You have have up to  32 attributes per
     *           link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * The [TRACE_ID] for a trace within a project.
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * The [TRACE_ID] for a trace within a project.
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * The [SPAN_ID] for a span within a trace.
     *
     * Generated from protobuf field <code>string span_id = 2;</code>
     * @return string
     */
    public function getSpanId()
    {
        return $this->span_id;
    }

    /**
     * The [SPAN_ID] for a span within a trace.
     *
     * Generated from protobuf field <code>string span_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpanId($var)
    {
        GPBUtil::checkString($var, True);
        $this->span_id = $var;

        return $this;
    }

    /**
     * The relationship of the current span relative to the linked span.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Link.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The relationship of the current span relative to the linked span.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Link.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Trace\V2\Span_Link_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A set of attributes on the link. You have have up to  32 attributes per
     * link.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 4;</code>
     * @return \Google\Cloud\Trace\V2\Span\Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * A set of attributes on the link. You have have up to  32 attributes per
     * link.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v2.Span.Attributes attributes = 4;</code>
     * @param \Google\Cloud\Trace\V2\Span\Attributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Trace\V2\Span_Attributes::class);
        $this->attributes = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Link::class, \Google\Cloud\Trace\V2\Span_Link::class);

