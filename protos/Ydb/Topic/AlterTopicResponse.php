<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update topic response sent from server to client.
 *
 * Generated from protobuf message <code>Ydb.Topic.AlterTopicResponse</code>
 */
class AlterTopicResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result of request will be inside operation.
     *
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\Operation $operation
     *           Result of request will be inside operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Result of request will be inside operation.
     *
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     * @return \Ydb\Operations\Operation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Result of request will be inside operation.
     *
     * Generated from protobuf field <code>.Ydb.Operations.Operation operation = 1;</code>
     * @param \Ydb\Operations\Operation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\Operation::class);
        $this->operation = $var;

        return $this;
    }

}

