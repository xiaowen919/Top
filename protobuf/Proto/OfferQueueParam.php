<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/offer.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.OfferQueueParam</code>
 */
class OfferQueueParam extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 placement_id = 1;</code>
     */
    private $placement_id = 0;
    /**
     * Generated from protobuf field <code>int32 offer_id = 2;</code>
     */
    private $offer_id = 0;
    /**
     * Generated from protobuf field <code>int32 status = 3;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $placement_id
     *     @type int $offer_id
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Offer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 placement_id = 1;</code>
     * @return int
     */
    public function getPlacementId()
    {
        return $this->placement_id;
    }

    /**
     * Generated from protobuf field <code>int32 placement_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPlacementId($var)
    {
        GPBUtil::checkInt32($var);
        $this->placement_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 offer_id = 2;</code>
     * @return int
     */
    public function getOfferId()
    {
        return $this->offer_id;
    }

    /**
     * Generated from protobuf field <code>int32 offer_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOfferId($var)
    {
        GPBUtil::checkInt32($var);
        $this->offer_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 status = 3;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>int32 status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;

        return $this;
    }

}
