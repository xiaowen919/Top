<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/openapi.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PublisherAppEntitys</code>
 */
class PublisherAppEntitys extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .proto.PublisherOneAppEntity appEntitys = 1;</code>
     */
    private $appEntitys;
    /**
     * Generated from protobuf field <code>int32 publisherId = 2;</code>
     */
    private $publisherId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\PublisherOneAppEntity[]|\Google\Protobuf\Internal\RepeatedField $appEntitys
     *     @type int $publisherId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Openapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .proto.PublisherOneAppEntity appEntitys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAppEntitys()
    {
        return $this->appEntitys;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.PublisherOneAppEntity appEntitys = 1;</code>
     * @param \Proto\PublisherOneAppEntity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAppEntitys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\PublisherOneAppEntity::class);
        $this->appEntitys = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 publisherId = 2;</code>
     * @return int
     */
    public function getPublisherId()
    {
        return $this->publisherId;
    }

    /**
     * Generated from protobuf field <code>int32 publisherId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPublisherId($var)
    {
        GPBUtil::checkInt32($var);
        $this->publisherId = $var;

        return $this;
    }

}
