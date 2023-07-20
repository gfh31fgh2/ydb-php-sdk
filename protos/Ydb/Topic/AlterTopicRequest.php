<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_topic.proto

namespace Ydb\Topic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update existing topic request sent from client to server.
 *
 * Generated from protobuf message <code>Ydb.Topic.AlterTopicRequest</code>
 */
class AlterTopicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     */
    protected $operation_params = null;
    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';
    /**
     * partitioning_settings
     *
     * Generated from protobuf field <code>.Ydb.Topic.AlterPartitioningSettings alter_partitioning_settings = 3;</code>
     */
    protected $alter_partitioning_settings = null;
    /**
     * Retention settings.
     * Currently, only one limit may be set, so other should not be set.
     * How long data in partition should be stored. Must be greater than 0 and less than limit for this database.
     * Default limit - 36 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration set_retention_period = 4;</code>
     */
    protected $set_retention_period = null;
    /**
     * How much data in partition should be stored. Must be greater than 0 and less than limit for this database.
     *
     * Generated from protobuf field <code>optional int64 set_retention_storage_mb = 5 [(.Ydb.value) = ">= 0"];</code>
     */
    protected $set_retention_storage_mb = null;
    /**
     * List of allowed codecs for writers.
     * Writes with codec not from this list are forbidden.
     *
     * Generated from protobuf field <code>.Ydb.Topic.SupportedCodecs set_supported_codecs = 7;</code>
     */
    protected $set_supported_codecs = null;
    /**
     * Partition write speed in bytes per second. Must be less than database limit. Default limit - 1 MB/s.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_speed_bytes_per_second = 8 [(.Ydb.value) = ">= 0"];</code>
     */
    protected $set_partition_write_speed_bytes_per_second = null;
    /**
     * Burst size for write in partition, in bytes. Must be less than database limit. Default limit - 1 MB.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_burst_bytes = 9 [(.Ydb.value) = ">= 0"];</code>
     */
    protected $set_partition_write_burst_bytes = null;
    /**
     * User and server attributes of topic. Server attributes starts from "_" and will be validated by server.
     * Leave the value blank to drop an attribute.
     *
     * Generated from protobuf field <code>map<string, string> alter_attributes = 10;</code>
     */
    private $alter_attributes;
    /**
     * Add consumers.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.Consumer add_consumers = 11 [(.Ydb.size) = {</code>
     */
    private $add_consumers;
    /**
     * Remove consumers (by their names)
     *
     * Generated from protobuf field <code>repeated string drop_consumers = 12 [(.Ydb.size) = {</code>
     */
    private $drop_consumers;
    /**
     * Alter consumers
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.AlterConsumer alter_consumers = 13 [(.Ydb.size) = {</code>
     */
    private $alter_consumers;
    /**
     * Set metering mode for topic in serverless database.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MeteringMode set_metering_mode = 14;</code>
     */
    protected $set_metering_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\OperationParams $operation_params
     *     @type string $path
     *           Topic path.
     *     @type \Ydb\Topic\AlterPartitioningSettings $alter_partitioning_settings
     *           partitioning_settings
     *     @type \Google\Protobuf\Duration $set_retention_period
     *           Retention settings.
     *           Currently, only one limit may be set, so other should not be set.
     *           How long data in partition should be stored. Must be greater than 0 and less than limit for this database.
     *           Default limit - 36 hours.
     *     @type int|string $set_retention_storage_mb
     *           How much data in partition should be stored. Must be greater than 0 and less than limit for this database.
     *     @type \Ydb\Topic\SupportedCodecs $set_supported_codecs
     *           List of allowed codecs for writers.
     *           Writes with codec not from this list are forbidden.
     *     @type int|string $set_partition_write_speed_bytes_per_second
     *           Partition write speed in bytes per second. Must be less than database limit. Default limit - 1 MB/s.
     *     @type int|string $set_partition_write_burst_bytes
     *           Burst size for write in partition, in bytes. Must be less than database limit. Default limit - 1 MB.
     *     @type array|\Google\Protobuf\Internal\MapField $alter_attributes
     *           User and server attributes of topic. Server attributes starts from "_" and will be validated by server.
     *           Leave the value blank to drop an attribute.
     *     @type array<\Ydb\Topic\Consumer>|\Google\Protobuf\Internal\RepeatedField $add_consumers
     *           Add consumers.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $drop_consumers
     *           Remove consumers (by their names)
     *     @type array<\Ydb\Topic\AlterConsumer>|\Google\Protobuf\Internal\RepeatedField $alter_consumers
     *           Alter consumers
     *     @type int $set_metering_mode
     *           Set metering mode for topic in serverless database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbTopic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @return \Ydb\Operations\OperationParams|null
     */
    public function getOperationParams()
    {
        return $this->operation_params;
    }

    public function hasOperationParams()
    {
        return isset($this->operation_params);
    }

    public function clearOperationParams()
    {
        unset($this->operation_params);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     * @param \Ydb\Operations\OperationParams $var
     * @return $this
     */
    public function setOperationParams($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Operations\OperationParams::class);
        $this->operation_params = $var;

        return $this;
    }

    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Topic path.
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * partitioning_settings
     *
     * Generated from protobuf field <code>.Ydb.Topic.AlterPartitioningSettings alter_partitioning_settings = 3;</code>
     * @return \Ydb\Topic\AlterPartitioningSettings|null
     */
    public function getAlterPartitioningSettings()
    {
        return $this->alter_partitioning_settings;
    }

    public function hasAlterPartitioningSettings()
    {
        return isset($this->alter_partitioning_settings);
    }

    public function clearAlterPartitioningSettings()
    {
        unset($this->alter_partitioning_settings);
    }

    /**
     * partitioning_settings
     *
     * Generated from protobuf field <code>.Ydb.Topic.AlterPartitioningSettings alter_partitioning_settings = 3;</code>
     * @param \Ydb\Topic\AlterPartitioningSettings $var
     * @return $this
     */
    public function setAlterPartitioningSettings($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\AlterPartitioningSettings::class);
        $this->alter_partitioning_settings = $var;

        return $this;
    }

    /**
     * Retention settings.
     * Currently, only one limit may be set, so other should not be set.
     * How long data in partition should be stored. Must be greater than 0 and less than limit for this database.
     * Default limit - 36 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration set_retention_period = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getSetRetentionPeriod()
    {
        return $this->set_retention_period;
    }

    public function hasSetRetentionPeriod()
    {
        return isset($this->set_retention_period);
    }

    public function clearSetRetentionPeriod()
    {
        unset($this->set_retention_period);
    }

    /**
     * Retention settings.
     * Currently, only one limit may be set, so other should not be set.
     * How long data in partition should be stored. Must be greater than 0 and less than limit for this database.
     * Default limit - 36 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration set_retention_period = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setSetRetentionPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->set_retention_period = $var;

        return $this;
    }

    /**
     * How much data in partition should be stored. Must be greater than 0 and less than limit for this database.
     *
     * Generated from protobuf field <code>optional int64 set_retention_storage_mb = 5 [(.Ydb.value) = ">= 0"];</code>
     * @return int|string
     */
    public function getSetRetentionStorageMb()
    {
        return isset($this->set_retention_storage_mb) ? $this->set_retention_storage_mb : 0;
    }

    public function hasSetRetentionStorageMb()
    {
        return isset($this->set_retention_storage_mb);
    }

    public function clearSetRetentionStorageMb()
    {
        unset($this->set_retention_storage_mb);
    }

    /**
     * How much data in partition should be stored. Must be greater than 0 and less than limit for this database.
     *
     * Generated from protobuf field <code>optional int64 set_retention_storage_mb = 5 [(.Ydb.value) = ">= 0"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSetRetentionStorageMb($var)
    {
        GPBUtil::checkInt64($var);
        $this->set_retention_storage_mb = $var;

        return $this;
    }

    /**
     * List of allowed codecs for writers.
     * Writes with codec not from this list are forbidden.
     *
     * Generated from protobuf field <code>.Ydb.Topic.SupportedCodecs set_supported_codecs = 7;</code>
     * @return \Ydb\Topic\SupportedCodecs|null
     */
    public function getSetSupportedCodecs()
    {
        return $this->set_supported_codecs;
    }

    public function hasSetSupportedCodecs()
    {
        return isset($this->set_supported_codecs);
    }

    public function clearSetSupportedCodecs()
    {
        unset($this->set_supported_codecs);
    }

    /**
     * List of allowed codecs for writers.
     * Writes with codec not from this list are forbidden.
     *
     * Generated from protobuf field <code>.Ydb.Topic.SupportedCodecs set_supported_codecs = 7;</code>
     * @param \Ydb\Topic\SupportedCodecs $var
     * @return $this
     */
    public function setSetSupportedCodecs($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Topic\SupportedCodecs::class);
        $this->set_supported_codecs = $var;

        return $this;
    }

    /**
     * Partition write speed in bytes per second. Must be less than database limit. Default limit - 1 MB/s.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_speed_bytes_per_second = 8 [(.Ydb.value) = ">= 0"];</code>
     * @return int|string
     */
    public function getSetPartitionWriteSpeedBytesPerSecond()
    {
        return isset($this->set_partition_write_speed_bytes_per_second) ? $this->set_partition_write_speed_bytes_per_second : 0;
    }

    public function hasSetPartitionWriteSpeedBytesPerSecond()
    {
        return isset($this->set_partition_write_speed_bytes_per_second);
    }

    public function clearSetPartitionWriteSpeedBytesPerSecond()
    {
        unset($this->set_partition_write_speed_bytes_per_second);
    }

    /**
     * Partition write speed in bytes per second. Must be less than database limit. Default limit - 1 MB/s.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_speed_bytes_per_second = 8 [(.Ydb.value) = ">= 0"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSetPartitionWriteSpeedBytesPerSecond($var)
    {
        GPBUtil::checkInt64($var);
        $this->set_partition_write_speed_bytes_per_second = $var;

        return $this;
    }

    /**
     * Burst size for write in partition, in bytes. Must be less than database limit. Default limit - 1 MB.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_burst_bytes = 9 [(.Ydb.value) = ">= 0"];</code>
     * @return int|string
     */
    public function getSetPartitionWriteBurstBytes()
    {
        return isset($this->set_partition_write_burst_bytes) ? $this->set_partition_write_burst_bytes : 0;
    }

    public function hasSetPartitionWriteBurstBytes()
    {
        return isset($this->set_partition_write_burst_bytes);
    }

    public function clearSetPartitionWriteBurstBytes()
    {
        unset($this->set_partition_write_burst_bytes);
    }

    /**
     * Burst size for write in partition, in bytes. Must be less than database limit. Default limit - 1 MB.
     *
     * Generated from protobuf field <code>optional int64 set_partition_write_burst_bytes = 9 [(.Ydb.value) = ">= 0"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSetPartitionWriteBurstBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->set_partition_write_burst_bytes = $var;

        return $this;
    }

    /**
     * User and server attributes of topic. Server attributes starts from "_" and will be validated by server.
     * Leave the value blank to drop an attribute.
     *
     * Generated from protobuf field <code>map<string, string> alter_attributes = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAlterAttributes()
    {
        return $this->alter_attributes;
    }

    /**
     * User and server attributes of topic. Server attributes starts from "_" and will be validated by server.
     * Leave the value blank to drop an attribute.
     *
     * Generated from protobuf field <code>map<string, string> alter_attributes = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAlterAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->alter_attributes = $arr;

        return $this;
    }

    /**
     * Add consumers.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.Consumer add_consumers = 11 [(.Ydb.size) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddConsumers()
    {
        return $this->add_consumers;
    }

    /**
     * Add consumers.
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.Consumer add_consumers = 11 [(.Ydb.size) = {</code>
     * @param array<\Ydb\Topic\Consumer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddConsumers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Topic\Consumer::class);
        $this->add_consumers = $arr;

        return $this;
    }

    /**
     * Remove consumers (by their names)
     *
     * Generated from protobuf field <code>repeated string drop_consumers = 12 [(.Ydb.size) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDropConsumers()
    {
        return $this->drop_consumers;
    }

    /**
     * Remove consumers (by their names)
     *
     * Generated from protobuf field <code>repeated string drop_consumers = 12 [(.Ydb.size) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDropConsumers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->drop_consumers = $arr;

        return $this;
    }

    /**
     * Alter consumers
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.AlterConsumer alter_consumers = 13 [(.Ydb.size) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAlterConsumers()
    {
        return $this->alter_consumers;
    }

    /**
     * Alter consumers
     *
     * Generated from protobuf field <code>repeated .Ydb.Topic.AlterConsumer alter_consumers = 13 [(.Ydb.size) = {</code>
     * @param array<\Ydb\Topic\AlterConsumer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAlterConsumers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Topic\AlterConsumer::class);
        $this->alter_consumers = $arr;

        return $this;
    }

    /**
     * Set metering mode for topic in serverless database.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MeteringMode set_metering_mode = 14;</code>
     * @return int
     */
    public function getSetMeteringMode()
    {
        return $this->set_metering_mode;
    }

    /**
     * Set metering mode for topic in serverless database.
     *
     * Generated from protobuf field <code>.Ydb.Topic.MeteringMode set_metering_mode = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setSetMeteringMode($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Topic\MeteringMode::class);
        $this->set_metering_mode = $var;

        return $this;
    }

}

