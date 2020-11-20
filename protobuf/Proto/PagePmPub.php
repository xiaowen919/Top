<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/meta.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PagePmPub</code>
 */
class PagePmPub extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 publisher_id = 1;</code>
     */
    private $publisher_id = 0;
    /**
     * Generated from protobuf field <code>int32 offset = 2;</code>
     */
    private $offset = 0;
    /**
     * Generated from protobuf field <code>int32 limit = 3;</code>
     */
    private $limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $publisher_id
     *     @type int $offset
     *     @type int $limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Meta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 publisher_id = 1;</code>
     * @return int
     */
    public function getPublisherId()
    {
        return $this->publisher_id;
    }

    /**
     * Generated from protobuf field <code>int32 publisher_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPublisherId($var)
    {
        GPBUtil::checkInt32($var);
        $this->publisher_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int32 offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 3;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

}
