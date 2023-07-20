<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protos/ydb_coordination.proto

namespace Ydb\Coordination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Session request message sent from client to server
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionRequest</code>
 */
class SessionRequest extends \Google\Protobuf\Internal\Message
{
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Coordination\SessionRequest\PingPong $ping
     *     @type \Ydb\Coordination\SessionRequest\PingPong $pong
     *     @type \Ydb\Coordination\SessionRequest\SessionStart $session_start
     *     @type \Ydb\Coordination\SessionRequest\SessionStop $session_stop
     *     @type \Ydb\Coordination\Unsupported $unsupported_5
     *     @type \Ydb\Coordination\Unsupported $unsupported_6
     *     @type \Ydb\Coordination\SessionRequest\AcquireSemaphore $acquire_semaphore
     *     @type \Ydb\Coordination\SessionRequest\ReleaseSemaphore $release_semaphore
     *     @type \Ydb\Coordination\SessionRequest\DescribeSemaphore $describe_semaphore
     *     @type \Ydb\Coordination\SessionRequest\CreateSemaphore $create_semaphore
     *     @type \Ydb\Coordination\SessionRequest\UpdateSemaphore $update_semaphore
     *     @type \Ydb\Coordination\SessionRequest\DeleteSemaphore $delete_semaphore
     *     @type \Ydb\Coordination\Unsupported $unsupported_13
     *     @type \Ydb\Coordination\Unsupported $unsupported_14
     *     @type \Ydb\Coordination\Unsupported $unsupported_15
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.PingPong ping = 1;</code>
     * @return \Ydb\Coordination\SessionRequest\PingPong|null
     */
    public function getPing()
    {
        return $this->readOneof(1);
    }

    public function hasPing()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.PingPong ping = 1;</code>
     * @param \Ydb\Coordination\SessionRequest\PingPong $var
     * @return $this
     */
    public function setPing($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\PingPong::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.PingPong pong = 2;</code>
     * @return \Ydb\Coordination\SessionRequest\PingPong|null
     */
    public function getPong()
    {
        return $this->readOneof(2);
    }

    public function hasPong()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.PingPong pong = 2;</code>
     * @param \Ydb\Coordination\SessionRequest\PingPong $var
     * @return $this
     */
    public function setPong($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\PingPong::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.SessionStart session_start = 3;</code>
     * @return \Ydb\Coordination\SessionRequest\SessionStart|null
     */
    public function getSessionStart()
    {
        return $this->readOneof(3);
    }

    public function hasSessionStart()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.SessionStart session_start = 3;</code>
     * @param \Ydb\Coordination\SessionRequest\SessionStart $var
     * @return $this
     */
    public function setSessionStart($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\SessionStart::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.SessionStop session_stop = 4;</code>
     * @return \Ydb\Coordination\SessionRequest\SessionStop|null
     */
    public function getSessionStop()
    {
        return $this->readOneof(4);
    }

    public function hasSessionStop()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.SessionStop session_stop = 4;</code>
     * @param \Ydb\Coordination\SessionRequest\SessionStop $var
     * @return $this
     */
    public function setSessionStop($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\SessionStop::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_5 = 5;</code>
     * @return \Ydb\Coordination\Unsupported|null
     */
    public function getUnsupported5()
    {
        return $this->readOneof(5);
    }

    public function hasUnsupported5()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_5 = 5;</code>
     * @param \Ydb\Coordination\Unsupported $var
     * @return $this
     */
    public function setUnsupported5($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\Unsupported::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_6 = 6;</code>
     * @return \Ydb\Coordination\Unsupported|null
     */
    public function getUnsupported6()
    {
        return $this->readOneof(6);
    }

    public function hasUnsupported6()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_6 = 6;</code>
     * @param \Ydb\Coordination\Unsupported $var
     * @return $this
     */
    public function setUnsupported6($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\Unsupported::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.AcquireSemaphore acquire_semaphore = 7;</code>
     * @return \Ydb\Coordination\SessionRequest\AcquireSemaphore|null
     */
    public function getAcquireSemaphore()
    {
        return $this->readOneof(7);
    }

    public function hasAcquireSemaphore()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.AcquireSemaphore acquire_semaphore = 7;</code>
     * @param \Ydb\Coordination\SessionRequest\AcquireSemaphore $var
     * @return $this
     */
    public function setAcquireSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\AcquireSemaphore::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.ReleaseSemaphore release_semaphore = 8;</code>
     * @return \Ydb\Coordination\SessionRequest\ReleaseSemaphore|null
     */
    public function getReleaseSemaphore()
    {
        return $this->readOneof(8);
    }

    public function hasReleaseSemaphore()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.ReleaseSemaphore release_semaphore = 8;</code>
     * @param \Ydb\Coordination\SessionRequest\ReleaseSemaphore $var
     * @return $this
     */
    public function setReleaseSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\ReleaseSemaphore::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.DescribeSemaphore describe_semaphore = 9;</code>
     * @return \Ydb\Coordination\SessionRequest\DescribeSemaphore|null
     */
    public function getDescribeSemaphore()
    {
        return $this->readOneof(9);
    }

    public function hasDescribeSemaphore()
    {
        return $this->hasOneof(9);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.DescribeSemaphore describe_semaphore = 9;</code>
     * @param \Ydb\Coordination\SessionRequest\DescribeSemaphore $var
     * @return $this
     */
    public function setDescribeSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\DescribeSemaphore::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.CreateSemaphore create_semaphore = 10;</code>
     * @return \Ydb\Coordination\SessionRequest\CreateSemaphore|null
     */
    public function getCreateSemaphore()
    {
        return $this->readOneof(10);
    }

    public function hasCreateSemaphore()
    {
        return $this->hasOneof(10);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.CreateSemaphore create_semaphore = 10;</code>
     * @param \Ydb\Coordination\SessionRequest\CreateSemaphore $var
     * @return $this
     */
    public function setCreateSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\CreateSemaphore::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.UpdateSemaphore update_semaphore = 11;</code>
     * @return \Ydb\Coordination\SessionRequest\UpdateSemaphore|null
     */
    public function getUpdateSemaphore()
    {
        return $this->readOneof(11);
    }

    public function hasUpdateSemaphore()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.UpdateSemaphore update_semaphore = 11;</code>
     * @param \Ydb\Coordination\SessionRequest\UpdateSemaphore $var
     * @return $this
     */
    public function setUpdateSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\UpdateSemaphore::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.DeleteSemaphore delete_semaphore = 12;</code>
     * @return \Ydb\Coordination\SessionRequest\DeleteSemaphore|null
     */
    public function getDeleteSemaphore()
    {
        return $this->readOneof(12);
    }

    public function hasDeleteSemaphore()
    {
        return $this->hasOneof(12);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.SessionRequest.DeleteSemaphore delete_semaphore = 12;</code>
     * @param \Ydb\Coordination\SessionRequest\DeleteSemaphore $var
     * @return $this
     */
    public function setDeleteSemaphore($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\SessionRequest\DeleteSemaphore::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_13 = 13;</code>
     * @return \Ydb\Coordination\Unsupported|null
     */
    public function getUnsupported13()
    {
        return $this->readOneof(13);
    }

    public function hasUnsupported13()
    {
        return $this->hasOneof(13);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_13 = 13;</code>
     * @param \Ydb\Coordination\Unsupported $var
     * @return $this
     */
    public function setUnsupported13($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\Unsupported::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_14 = 14;</code>
     * @return \Ydb\Coordination\Unsupported|null
     */
    public function getUnsupported14()
    {
        return $this->readOneof(14);
    }

    public function hasUnsupported14()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_14 = 14;</code>
     * @param \Ydb\Coordination\Unsupported $var
     * @return $this
     */
    public function setUnsupported14($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\Unsupported::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_15 = 15;</code>
     * @return \Ydb\Coordination\Unsupported|null
     */
    public function getUnsupported15()
    {
        return $this->readOneof(15);
    }

    public function hasUnsupported15()
    {
        return $this->hasOneof(15);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Coordination.Unsupported unsupported_15 = 15;</code>
     * @param \Ydb\Coordination\Unsupported $var
     * @return $this
     */
    public function setUnsupported15($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Coordination\Unsupported::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}
