<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the state of a tablet group.
 *
 * Generated from protobuf message <code>Ydb.Monitoring.ComputeTabletStatus</code>
 */
class ComputeTabletStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 1;</code>
     */
    protected $overall = 0;
    /**
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string state = 3;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>uint32 count = 4;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>repeated string id = 5;</code>
     */
    private $id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $overall
     *     @type string $type
     *     @type string $state
     *     @type int $count
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 1;</code>
     * @return int
     */
    public function getOverall()
    {
        return $this->overall;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.StatusFlag.Status overall = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOverall($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Monitoring\StatusFlag\Status::class);
        $this->overall = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 3;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 4;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string id = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>repeated string id = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->id = $arr;

        return $this;
    }

}
