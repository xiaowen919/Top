<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/meta.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PlacementGroupConfig</code>
 */
class PlacementGroupConfig extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>int32 is_ab_test = 4;</code>
     */
    private $is_ab_test = 0;
    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementGroupConfig group_configs = 5;</code>
     */
    private $group_configs;
    /**
     * Generated from protobuf field <code>int32 admin_id = 6;</code>
     */
    private $admin_id = 0;
    /**
     * Generated from protobuf field <code>string ip = 7;</code>
     */
    private $ip = '';
    /**
     * Generated from protobuf field <code>int32 offer_switch = 8;</code>
     */
    private $offer_switch = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $publisher_id
     *     @type string $placement_id
     *     @type int $is_ab_test
     *     @type \Proto\OnePlacementGroupConfig[]|\Google\Protobuf\Internal\RepeatedField $group_configs
     *     @type int $admin_id
     *     @type string $ip
     *     @type int $offer_switch
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
     * Generated from protobuf field <code>int32 is_ab_test = 4;</code>
     * @return int
     */
    public function getIsAbTest()
    {
        return $this->is_ab_test;
    }

    /**
     * Generated from protobuf field <code>int32 is_ab_test = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setIsAbTest($var)
    {
        GPBUtil::checkInt32($var);
        $this->is_ab_test = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementGroupConfig group_configs = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupConfigs()
    {
        return $this->group_configs;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.OnePlacementGroupConfig group_configs = 5;</code>
     * @param \Proto\OnePlacementGroupConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\OnePlacementGroupConfig::class);
        $this->group_configs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 admin_id = 6;</code>
     * @return int
     */
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * Generated from protobuf field <code>int32 admin_id = 6;</code>
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
     * Generated from protobuf field <code>string ip = 7;</code>
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>string ip = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 offer_switch = 8;</code>
     * @return int
     */
    public function getOfferSwitch()
    {
        return $this->offer_switch;
    }

    /**
     * Generated from protobuf field <code>int32 offer_switch = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setOfferSwitch($var)
    {
        GPBUtil::checkInt32($var);
        $this->offer_switch = $var;

        return $this;
    }

}
