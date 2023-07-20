<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.LocationStorageVDisk</code>
 */
class LocationStorageVDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     */
    private $id;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.LocationStoragePDisk pdisk = 2;</code>
     */
    private $pdisk;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $id
     *     @type array<\Ydb\Monitoring\LocationStoragePDisk>|\Google\Protobuf\Internal\RepeatedField $pdisk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated string id = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.LocationStoragePDisk pdisk = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPdisk()
    {
        return $this->pdisk;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Monitoring.LocationStoragePDisk pdisk = 2;</code>
     * @param array<\Ydb\Monitoring\LocationStoragePDisk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPdisk($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Monitoring\LocationStoragePDisk::class);
        $this->pdisk = $arr;

        return $this;
    }

}

