<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Describes an owner or a waiter of this semaphore
 *
 * Generated from protobuf message <code>Ydb.Coordination.SemaphoreSession</code>
 */
class SemaphoreSession extends \Google\Protobuf\Internal\Message
{
    /**
     * A monotonically increasing id which determines locking order
     *
     * Generated from protobuf field <code>uint64 order_id = 5;</code>
     */
    protected $order_id = 0;
    /**
     * An id of the session which tried to acquire the semaphore
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * A timeout in milliseconds for operation in waiters queue
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     */
    protected $timeout_millis = 0;
    /**
     * Number of tokens for an acquire operation
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     */
    protected $count = 0;
    /**
     * User-defined data attached to the acquire operation
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $order_id
     *           A monotonically increasing id which determines locking order
     *     @type int|string $session_id
     *           An id of the session which tried to acquire the semaphore
     *     @type int|string $timeout_millis
     *           A timeout in milliseconds for operation in waiters queue
     *     @type int|string $count
     *           Number of tokens for an acquire operation
     *     @type string $data
     *           User-defined data attached to the acquire operation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * A monotonically increasing id which determines locking order
     *
     * Generated from protobuf field <code>uint64 order_id = 5;</code>
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * A monotonically increasing id which determines locking order
     *
     * Generated from protobuf field <code>uint64 order_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkUint64($var);
        $this->order_id = $var;

        return $this;
    }

    /**
     * An id of the session which tried to acquire the semaphore
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @return int|string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * An id of the session which tried to acquire the semaphore
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->session_id = $var;

        return $this;
    }

    /**
     * A timeout in milliseconds for operation in waiters queue
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     * @return int|string
     */
    public function getTimeoutMillis()
    {
        return $this->timeout_millis;
    }

    /**
     * A timeout in milliseconds for operation in waiters queue
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeoutMillis($var)
    {
        GPBUtil::checkUint64($var);
        $this->timeout_millis = $var;

        return $this;
    }

    /**
     * Number of tokens for an acquire operation
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of tokens for an acquire operation
     *
     * Generated from protobuf field <code>uint64 count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * User-defined data attached to the acquire operation
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * User-defined data attached to the acquire operation
     *
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

