<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used by the server to report the result of a release operation
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionResponse.ReleaseSemaphoreResult</code>
 */
class ReleaseSemaphoreResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     */
    protected $req_id = 0;
    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     */
    private $issues;
    /**
     * True if semaphore was released, false if there was no active acquire operation
     *
     * Generated from protobuf field <code>bool released = 4;</code>
     */
    protected $released = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $req_id
     *     @type int $status
     *     @type array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $issues
     *     @type bool $released
     *           True if semaphore was released, false if there was no active acquire operation
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     * @return int|string
     */
    public function getReqId()
    {
        return $this->req_id;
    }

    /**
     * Generated from protobuf field <code>uint64 req_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReqId($var)
    {
        GPBUtil::checkUint64($var);
        $this->req_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Ydb\StatusIds\StatusCode::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 3;</code>
     * @param array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Issue\IssueMessage::class);
        $this->issues = $arr;

        return $this;
    }

    /**
     * True if semaphore was released, false if there was no active acquire operation
     *
     * Generated from protobuf field <code>bool released = 4;</code>
     * @return bool
     */
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * True if semaphore was released, false if there was no active acquire operation
     *
     * Generated from protobuf field <code>bool released = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setReleased($var)
    {
        GPBUtil::checkBool($var);
        $this->released = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReleaseSemaphoreResult::class, \Ydb\Coordination\SessionResponse_ReleaseSemaphoreResult::class);
