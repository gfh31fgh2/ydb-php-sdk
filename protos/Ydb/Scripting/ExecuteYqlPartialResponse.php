<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_scripting.proto

namespace Ydb\Scripting;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for StreamExecuteYql is a stream of ExecuteYqlPartialResponse messages.
 * These responses can contain ExecuteYqlPartialResult messages with
 * results (or result parts) for data or scan queries in the script.
 * YqlScript can have multiple results (result sets).
 * Each result set has an index (starting at 0).
 *
 * Generated from protobuf message <code>Ydb.Scripting.ExecuteYqlPartialResponse</code>
 */
class ExecuteYqlPartialResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     */
    private $issues;
    /**
     * Generated from protobuf field <code>.Ydb.Scripting.ExecuteYqlPartialResult result = 3;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type array<\Ydb\Issue\IssueMessage>|\Google\Protobuf\Internal\RepeatedField $issues
     *     @type \Ydb\Scripting\ExecuteYqlPartialResult $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbScripting::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.StatusIds.StatusCode status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
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
     * Generated from protobuf field <code>repeated .Ydb.Issue.IssueMessage issues = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
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
     * Generated from protobuf field <code>.Ydb.Scripting.ExecuteYqlPartialResult result = 3;</code>
     * @return \Ydb\Scripting\ExecuteYqlPartialResult|null
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
     * Generated from protobuf field <code>.Ydb.Scripting.ExecuteYqlPartialResult result = 3;</code>
     * @param \Ydb\Scripting\ExecuteYqlPartialResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scripting\ExecuteYqlPartialResult::class);
        $this->result = $var;

        return $this;
    }

}
