<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Get an instance's details.
 *
 * Generated from protobuf message <code>google.cloud.parallelstore.v1.GetInstanceRequest</code>
 */
class GetInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance resource name, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The instance resource name, in the format
     *                     `projects/{project_id}/locations/{location}/instances/{instance_id}`. Please see
     *                     {@see ParallelstoreClient::instanceName()} for help formatting this field.
     *
     * @return \Google\Cloud\Parallelstore\V1\GetInstanceRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The instance resource name, in the format
     *           `projects/{project_id}/locations/{location}/instances/{instance_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parallelstore\V1\Parallelstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance resource name, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The instance resource name, in the format
     * `projects/{project_id}/locations/{location}/instances/{instance_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

