<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entry describing an error that has occurred.
 *
 * Generated from protobuf message <code>google.cloud.parallelstore.v1beta.TransferErrorLogEntry</code>
 */
class TransferErrorLogEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 2;</code>
     */
    private $error_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           A URL that refers to the target (a data source, a data sink,
     *           or an object) with which the error is associated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $error_details
     *           A list of messages that carry the error details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parallelstore\V1Beta\Parallelstore::initOnce();
        parent::__construct($data);
    }

    /**
     * A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * A URL that refers to the target (a data source, a data sink,
     * or an object) with which the error is associated.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorDetails()
    {
        return $this->error_details;
    }

    /**
     * A list of messages that carry the error details.
     *
     * Generated from protobuf field <code>repeated string error_details = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->error_details = $arr;

        return $this;
    }

}

