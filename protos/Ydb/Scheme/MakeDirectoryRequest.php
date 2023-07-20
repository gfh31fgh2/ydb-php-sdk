<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_scheme.proto

namespace Ydb\Scheme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create directory.
 * All intermediate directories must be created
 *
 * Generated from protobuf message <code>Ydb.Scheme.MakeDirectoryRequest</code>
 */
class MakeDirectoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Operations.OperationParams operation_params = 1;</code>
     */
    protected $operation_params = null;
    /**
     * Generated from protobuf field <code>string path = 2;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Operations\OperationParams $operation_params
     *     @type string $path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbScheme::initOnce();
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
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
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

}

