<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: syncp.proto

namespace Wallet\V1\ProvSys\Syncp\SyncCredit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 ** Accepted request payload. 
 *
 * Generated from protobuf message <code>wallet.v1.provsys.SyncCredit.Req</code>
 */
class Req extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 1 [json_name = "pId"];</code>
     */
    protected $p_id = '';
    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>optional string currency = 2 [json_name = "currency"];</code>
     */
    protected $currency = null;
    /**
     *&#47; provider code, e.g pgs.
     *
     * Generated from protobuf field <code>string provider_code = 9 [json_name = "providerCode"];</code>
     */
    protected $provider_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $p_id
     *          &#47; pId of member.
     *     @type string $currency
     *          &#47; Currency of member.
     *     @type string $provider_code
     *          &#47; provider code, e.g pgs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Syncp::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 1 [json_name = "pId"];</code>
     * @return string
     */
    public function getPId()
    {
        return $this->p_id;
    }

    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 1 [json_name = "pId"];</code>
     * @param string $var
     * @return $this
     */
    public function setPId($var)
    {
        GPBUtil::checkString($var, True);
        $this->p_id = $var;

        return $this;
    }

    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>optional string currency = 2 [json_name = "currency"];</code>
     * @return string
     */
    public function getCurrency()
    {
        return isset($this->currency) ? $this->currency : '';
    }

    public function hasCurrency()
    {
        return isset($this->currency);
    }

    public function clearCurrency()
    {
        unset($this->currency);
    }

    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>optional string currency = 2 [json_name = "currency"];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *&#47; provider code, e.g pgs.
     *
     * Generated from protobuf field <code>string provider_code = 9 [json_name = "providerCode"];</code>
     * @return string
     */
    public function getProviderCode()
    {
        return $this->provider_code;
    }

    /**
     *&#47; provider code, e.g pgs.
     *
     * Generated from protobuf field <code>string provider_code = 9 [json_name = "providerCode"];</code>
     * @param string $var
     * @return $this
     */
    public function setProviderCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider_code = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Req::class, \Wallet\V1\ProvSys\Syncp\SyncCredit_Req::class);

