<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/meta.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.OnePlacementUnit</code>
 */
class OnePlacementUnit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 publisher_id = 1;</code>
     */
    private $publisher_id = 0;
    /**
     * Generated from protobuf field <code>string placement_id = 2;</code>
     */
    private $placement_id = '';
    /**
     * Generated from protobuf field <code>int32 traffic_group_id = 3;</code>
     */
    private $traffic_group_id = 0;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>string app_auth_content = 5;</code>
     */
    private $app_auth_content = '';
    /**
     * Generated from protobuf field <code>string remote_unit = 6;</code>
     */
    private $remote_unit = '';
    /**
     * Generated from protobuf field <code>int32 nw_firm_id = 7;</code>
     */
    private $nw_firm_id = 0;
    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementSegmentUnit segment_unit_list = 8;</code>
     */
    private $segment_unit_list;
    /**
     * Generated from protobuf field <code>int32 unit_id = 9;</code>
     */
    private $unit_id = 0;
    /**
     * Generated from protobuf field <code>int32 header_bidding_switch = 10;</code>
     */
    private $header_bidding_switch = 0;
    /**
     * Generated from protobuf field <code>int32 admin_id = 11;</code>
     */
    private $admin_id = 0;
    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     */
    private $ip = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $publisher_id
     *     @type string $placement_id
     *     @type int $traffic_group_id
     *     @type string $name
     *     @type string $app_auth_content
     *     @type string $remote_unit
     *     @type int $nw_firm_id
     *     @type \Proto\OnePlacementSegmentUnit[]|\Google\Protobuf\Internal\RepeatedField $segment_unit_list
     *     @type int $unit_id
     *     @type int $header_bidding_switch
     *     @type int $admin_id
     *     @type string $ip
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
     * Generated from protobuf field <code>string placement_id = 2;</code>
     * @return string
     */
    public function getPlacementId()
    {
        return $this->placement_id;
    }

    /**
     * Generated from protobuf field <code>string placement_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlacementId($var)
    {
        GPBUtil::checkString($var, True);
        $this->placement_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 traffic_group_id = 3;</code>
     * @return int
     */
    public function getTrafficGroupId()
    {
        return $this->traffic_group_id;
    }

    /**
     * Generated from protobuf field <code>int32 traffic_group_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTrafficGroupId($var)
    {
        GPBUtil::checkInt32($var);
        $this->traffic_group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_auth_content = 5;</code>
     * @return string
     */
    public function getAppAuthContent()
    {
        return $this->app_auth_content;
    }

    /**
     * Generated from protobuf field <code>string app_auth_content = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppAuthContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_auth_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string remote_unit = 6;</code>
     * @return string
     */
    public function getRemoteUnit()
    {
        return $this->remote_unit;
    }

    /**
     * Generated from protobuf field <code>string remote_unit = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_unit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 nw_firm_id = 7;</code>
     * @return int
     */
    public function getNwFirmId()
    {
        return $this->nw_firm_id;
    }

    /**
     * Generated from protobuf field <code>int32 nw_firm_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNwFirmId($var)
    {
        GPBUtil::checkInt32($var);
        $this->nw_firm_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementSegmentUnit segment_unit_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegmentUnitList()
    {
        return $this->segment_unit_list;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementSegmentUnit segment_unit_list = 8;</code>
     * @param \Proto\OnePlacementSegmentUnit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegmentUnitList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\OnePlacementSegmentUnit::class);
        $this->segment_unit_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 unit_id = 9;</code>
     * @return int
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * Generated from protobuf field <code>int32 unit_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setUnitId($var)
    {
        GPBUtil::checkInt32($var);
        $this->unit_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 header_bidding_switch = 10;</code>
     * @return int
     */
    public function getHeaderBiddingSwitch()
    {
        return $this->header_bidding_switch;
    }

    /**
     * Generated from protobuf field <code>int32 header_bidding_switch = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setHeaderBiddingSwitch($var)
    {
        GPBUtil::checkInt32($var);
        $this->header_bidding_switch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 admin_id = 11;</code>
     * @return int
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Generated from protobuf field <code>int32 admin_id = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setAdminId($var)
    {
        GPBUtil::checkInt32($var);
        $this->admin_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

}
