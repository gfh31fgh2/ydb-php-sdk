<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic\DescribeTopicResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Topic.DescribeTopicResult.TopicStats</code>
 */
class TopicStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Approximate size of topic.
     *
     * Generated from protobuf field <code>int64 store_size_bytes = 1;</code>
     */
    protected $store_size_bytes = 0;
    /**
     * Minimum of timestamps of last write among all partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_last_write_time = 2;</code>
     */
    protected $min_last_write_time = null;
    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, written during last minute. 
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     */
    protected $max_write_time_lag = null;
    /**
     * How much bytes were written statistics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_written = 4;</code>
     */
    protected $bytes_written = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $store_size_bytes
     *           Approximate size of topic.
     *     @type \Google\Protobuf\Timestamp $min_last_write_time
     *           Minimum of timestamps of last write among all partitions.
     *     @type \Google\Protobuf\Duration $max_write_time_lag
     *           Maximum of differences between write timestamp and create timestamp for all messages, written during last minute. 
     *     @type \Ydb\Topic\MultipleWindowsStat $bytes_written
     *           How much bytes were written statistics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Approximate size of topic.
     *
     * Generated from protobuf field <code>int64 store_size_bytes = 1;</code>
     * @return int|string
     */
    public function getStoreSizeBytes()
    {
        return $this->store_size_bytes;
    }

    /**
     * Approximate size of topic.
     *
     * Generated from protobuf field <code>int64 store_size_bytes = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStoreSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->store_size_bytes = $var;

        return $this;
    }

    /**
     * Minimum of timestamps of last write among all partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_last_write_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMinLastWriteTime()
    {
        return $this->min_last_write_time;
    }

    public function hasMinLastWriteTime()
    {
        return isset($this->min_last_write_time);
    }

    public function clearMinLastWriteTime()
    {
        unset($this->min_last_write_time);
    }

    /**
     * Minimum of timestamps of last write among all partitions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp min_last_write_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMinLastWriteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->min_last_write_time = $var;

        return $this;
    }

    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, written during last minute. 
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxWriteTimeLag()
    {
        return $this->max_write_time_lag;
    }

    public function hasMaxWriteTimeLag()
    {
        return isset($this->max_write_time_lag);
    }

    public function clearMaxWriteTimeLag()
    {
        unset($this->max_write_time_lag);
    }

    /**
     * Maximum of differences between write timestamp and create timestamp for all messages, written during last minute. 
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_write_time_lag = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxWriteTimeLag($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->max_write_time_lag = $var;

        return $this;
    }

    /**
     * How much bytes were written statistics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_written = 4;</code>
     * @return \Ydb\Topic\MultipleWindowsStat|null
     */
    public function getBytesWritten()
    {
        return $this->bytes_written;
    }

    public function hasBytesWritten()
    {
        return isset($this->bytes_written);
    }

    public function clearBytesWritten()
    {
        unset($this->bytes_written);
    }

    /**
     * How much bytes were written statistics.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MultipleWindowsStat bytes_written = 4;</code>
     * @param \Ydb\Topic\MultipleWindowsStat $var
     * @return $this
     */
    public function setBytesWritten($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\MultipleWindowsStat::class);
        $this->bytes_written = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TopicStats::class, \Ydb\Topic\DescribeTopicResult_TopicStats::class);

