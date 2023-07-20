<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.KeepAliveResult</code>
 */
class KeepAliveResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Table.KeepAliveResult.SessionStatus session_status = 1;</code>
     */
    protected $session_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $session_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Table.KeepAliveResult.SessionStatus session_status = 1;</code>
     * @return int
     */
    public function getSessionStatus()
    {
        return $this->session_status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Table.KeepAliveResult.SessionStatus session_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSessionStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Table\KeepAliveResult\SessionStatus::class);
        $this->session_status = $var;

        return $this;
    }

}
