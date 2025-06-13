<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/parallelstore/v1beta/parallelstore.proto

namespace Google\Cloud\Parallelstore\V1beta\TransferMetadataOptions;

use UnexpectedValueException;

/**
 * The UID preservation behavior.
 *
 * Protobuf type <code>google.cloud.parallelstore.v1beta.TransferMetadataOptions.Uid</code>
 */
class Uid
{
    /**
     * default is UID_NUMBER_PRESERVE.
     *
     * Generated from protobuf enum <code>UID_UNSPECIFIED = 0;</code>
     */
    const UID_UNSPECIFIED = 0;
    /**
     * Do not preserve UID during a transfer job.
     *
     * Generated from protobuf enum <code>UID_SKIP = 1;</code>
     */
    const UID_SKIP = 1;
    /**
     * Preserve UID that is in number format during a transfer job.
     *
     * Generated from protobuf enum <code>UID_NUMBER_PRESERVE = 2;</code>
     */
    const UID_NUMBER_PRESERVE = 2;

    private static $valueToName = [
        self::UID_UNSPECIFIED => 'UID_UNSPECIFIED',
        self::UID_SKIP => 'UID_SKIP',
        self::UID_NUMBER_PRESERVE => 'UID_NUMBER_PRESERVE',
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


