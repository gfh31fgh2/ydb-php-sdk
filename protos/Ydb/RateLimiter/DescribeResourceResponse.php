<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_rate_limiter.proto

namespace Ydb\RateLimiter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.RateLimiter.DescribeResourceResponse</code>
 */
class DescribeResourceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Holds DescribeResourceResult in case of successful call.
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
     *           Holds DescribeResourceResult in case of successful call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbRateLimiter::initOnce();
        parent::__construct($data);
    }

    /**
     * Holds DescribeResourceResult in case of successful call.
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
     * Holds DescribeResourceResult in case of successful call.
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

