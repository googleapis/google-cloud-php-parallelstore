<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Long-running operation metadata related to a data transfer.
 *
 * Generated from protobuf message <code>google.cloud.parallelstore.v1beta.TransferOperationMetadata</code>
 */
class TransferOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferCounters counters = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $counters = null;
    /**
     * Output only. The type of transfer occurring.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferType transfer_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $transfer_type = 0;
    /**
     * Output only. List of files that failed to be transferred. This list will
     * have a maximum size of 5 elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.parallelstore.v1beta.TransferErrorSummary error_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $error_summary;
    protected $source;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Parallelstore\V1beta\SourceParallelstore $source_parallelstore
     *           Output only. Parallelstore source.
     *     @type \Google\Cloud\Parallelstore\V1beta\SourceGcsBucket $source_gcs_bucket
     *           Output only. Cloud Storage source.
     *     @type \Google\Cloud\Parallelstore\V1beta\DestinationGcsBucket $destination_gcs_bucket
     *           Output only. Cloud Storage destination.
     *     @type \Google\Cloud\Parallelstore\V1beta\DestinationParallelstore $destination_parallelstore
     *           Output only. Parallelstore destination.
     *     @type \Google\Cloud\Parallelstore\V1beta\TransferCounters $counters
     *           Output only. The progress of the transfer operation.
     *     @type int $transfer_type
     *           Output only. The type of transfer occurring.
     *     @type array<\Google\Cloud\Parallelstore\V1beta\TransferErrorSummary>|\Google\Protobuf\Internal\RepeatedField $error_summary
     *           Output only. List of files that failed to be transferred. This list will
     *           have a maximum size of 5 elements.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Parallelstore\V1Beta\Parallelstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Parallelstore source.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.SourceParallelstore source_parallelstore = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Parallelstore\V1beta\SourceParallelstore|null
     */
    public function getSourceParallelstore()
    {
        return $this->readOneof(7);
    }

    public function hasSourceParallelstore()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. Parallelstore source.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.SourceParallelstore source_parallelstore = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Parallelstore\V1beta\SourceParallelstore $var
     * @return $this
     */
    public function setSourceParallelstore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Parallelstore\V1beta\SourceParallelstore::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. Cloud Storage source.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.SourceGcsBucket source_gcs_bucket = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Parallelstore\V1beta\SourceGcsBucket|null
     */
    public function getSourceGcsBucket()
    {
        return $this->readOneof(8);
    }

    public function hasSourceGcsBucket()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Cloud Storage source.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.SourceGcsBucket source_gcs_bucket = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Parallelstore\V1beta\SourceGcsBucket $var
     * @return $this
     */
    public function setSourceGcsBucket($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Parallelstore\V1beta\SourceGcsBucket::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Cloud Storage destination.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.DestinationGcsBucket destination_gcs_bucket = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Parallelstore\V1beta\DestinationGcsBucket|null
     */
    public function getDestinationGcsBucket()
    {
        return $this->readOneof(9);
    }

    public function hasDestinationGcsBucket()
    {
        return $this->hasOneof(9);
    }

    /**
     * Output only. Cloud Storage destination.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.DestinationGcsBucket destination_gcs_bucket = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Parallelstore\V1beta\DestinationGcsBucket $var
     * @return $this
     */
    public function setDestinationGcsBucket($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Parallelstore\V1beta\DestinationGcsBucket::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. Parallelstore destination.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.DestinationParallelstore destination_parallelstore = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Parallelstore\V1beta\DestinationParallelstore|null
     */
    public function getDestinationParallelstore()
    {
        return $this->readOneof(10);
    }

    public function hasDestinationParallelstore()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. Parallelstore destination.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.DestinationParallelstore destination_parallelstore = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Parallelstore\V1beta\DestinationParallelstore $var
     * @return $this
     */
    public function setDestinationParallelstore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Parallelstore\V1beta\DestinationParallelstore::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Output only. The progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferCounters counters = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Parallelstore\V1beta\TransferCounters|null
     */
    public function getCounters()
    {
        return $this->counters;
    }

    public function hasCounters()
    {
        return isset($this->counters);
    }

    public function clearCounters()
    {
        unset($this->counters);
    }

    /**
     * Output only. The progress of the transfer operation.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferCounters counters = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Parallelstore\V1beta\TransferCounters $var
     * @return $this
     */
    public function setCounters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Parallelstore\V1beta\TransferCounters::class);
        $this->counters = $var;

        return $this;
    }

    /**
     * Output only. The type of transfer occurring.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferType transfer_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTransferType()
    {
        return $this->transfer_type;
    }

    /**
     * Output only. The type of transfer occurring.
     *
     * Generated from protobuf field <code>.google.cloud.parallelstore.v1beta.TransferType transfer_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTransferType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Parallelstore\V1beta\TransferType::class);
        $this->transfer_type = $var;

        return $this;
    }

    /**
     * Output only. List of files that failed to be transferred. This list will
     * have a maximum size of 5 elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.parallelstore.v1beta.TransferErrorSummary error_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorSummary()
    {
        return $this->error_summary;
    }

    /**
     * Output only. List of files that failed to be transferred. This list will
     * have a maximum size of 5 elements.
     *
     * Generated from protobuf field <code>repeated .google.cloud.parallelstore.v1beta.TransferErrorSummary error_summary = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Parallelstore\V1beta\TransferErrorSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorSummary($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Parallelstore\V1beta\TransferErrorSummary::class);
        $this->error_summary = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

