<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [Import][google.cloud.redis.v1.CloudRedis.ImportInstance].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1.ImportInstanceRequest</code>
 */
class ImportInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Specify data to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.InputConfig input_config = 3;</code>
     */
    private $input_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Redis instance resource name using the form:
     *               `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     *           where `location_id` refers to a GCP region
     *     @type \Google\Cloud\Redis\V1\InputConfig $input_config
     *           Required. Specify data to be imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\V1\CloudRedis::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Redis instance resource name using the form:
     *     `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
     * where `location_id` refers to a GCP region
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Specify data to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.InputConfig input_config = 3;</code>
     * @return \Google\Cloud\Redis\V1\InputConfig
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    /**
     * Required. Specify data to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1.InputConfig input_config = 3;</code>
     * @param \Google\Cloud\Redis\V1\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

}
