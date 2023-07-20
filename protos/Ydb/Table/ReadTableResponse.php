<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReadTable doesn't use Operation, returns result directly
 *
 * Generated from protobuf message <code>Ydb.Table.ReadTableResponse</code>
 */
class ReadTableResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Status of request (same as other statuses)
     *
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     */
    protected $status = 0;
    /**
     * Issues
     *
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     */
    private $issues;
    /**
     * Optional snapshot that corresponds to the returned data
     *
     * Generated from protobuf field <code>.Ydb.VirtualTimestamp snapshot = 4;</code>
     */
    protected $snapshot = null;
    /**
     * Read table result
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadTableResult result = 3;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *           Status of request (same as other statuses)
     *     @type array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $issues
     *           Issues
     *     @type \Ydb\VirtualTimestamp $snapshot
     *           Optional snapshot that corresponds to the returned data
     *     @type \Ydb\Table\ReadTableResult $result
     *           Read table result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Status of request (same as other statuses)
     *
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of request (same as other statuses)
     *
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
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
     * Issues
     *
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Issues
     *
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
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
     * Optional snapshot that corresponds to the returned data
     *
     * Generated from protobuf field <code>.Ydb.VirtualTimestamp snapshot = 4;</code>
     * @return \Ydb\VirtualTimestamp|null
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    public function hasSnapshot()
    {
        return isset($this->snapshot);
    }

    public function clearSnapshot()
    {
        unset($this->snapshot);
    }

    /**
     * Optional snapshot that corresponds to the returned data
     *
     * Generated from protobuf field <code>.Ydb.VirtualTimestamp snapshot = 4;</code>
     * @param \Ydb\VirtualTimestamp $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Ydb\VirtualTimestamp::class);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * Read table result
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadTableResult result = 3;</code>
     * @return \Ydb\Table\ReadTableResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Read table result
     *
     * Generated from protobuf field <code>.Ydb.Table.ReadTableResult result = 3;</code>
     * @param \Ydb\Table\ReadTableResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Table\ReadTableResult::class);
        $this->result = $var;

        return $this;
    }

}

