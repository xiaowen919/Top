<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/meta.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PlacementSegmentList</code>
 */
class PlacementSegmentList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .proto.PlacementTrafficSegment traffic_segment_list = 1;</code>
     */
    private $traffic_segment_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\PlacementTrafficSegment[]|\Google\Protobuf\Internal\RepeatedField $traffic_segment_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Meta::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .proto.PlacementTrafficSegment traffic_segment_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrafficSegmentList()
    {
        return $this->traffic_segment_list;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.PlacementTrafficSegment traffic_segment_list = 1;</code>
     * @param \Proto\PlacementTrafficSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrafficSegmentList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\PlacementTrafficSegment::class);
        $this->traffic_segment_list = $arr;

        return $this;
    }

}
