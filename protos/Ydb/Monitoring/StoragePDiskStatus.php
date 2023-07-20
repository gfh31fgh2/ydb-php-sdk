<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.StoragePDiskStatus</code>
 */
class StoragePDiskStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 2;</code>
     */
    protected $overall = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type int $overall
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 2;</code>
     * @return int
     */
    public function getOverall()
    {
        return $this->overall;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOverall($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Monitoring\StatusFlag\Status::class);
        $this->overall = $var;

        return $this;
    }

}

