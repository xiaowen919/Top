<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/meta.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PlacementSegmentRankConfig</code>
 */
class PlacementSegmentRankConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string segment_id = 1;</code>
     */
    private $segment_id = '';
    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     */
    private $rank = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $segment_id
     *     @type int $rank
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Meta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string segment_id = 1;</code>
     * @return string
     */
    public function getSegmentId()
    {
        return $this->segment_id;
    }

    /**
     * Generated from protobuf field <code>string segment_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSegmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->segment_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Generated from protobuf field <code>int32 rank = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRank($var)
    {
        GPBUtil::checkInt32($var);
        $this->rank = $var;

        return $this;
    }

}
