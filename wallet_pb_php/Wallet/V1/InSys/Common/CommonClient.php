<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
//
// Internal System gRPC Services
//
// Common task related messages.
// This proto contains everything related to common task services
// accepted payload, returned response and method.
namespace Wallet\V1\InSys\Common;

/**
 *
 * Service for handling common or basic task on wallet.
 */
class CommonClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Used to creating or inserting a new wallet record.
     * @param \Wallet\V1\InSys\Common\CreateWallet\Req $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateWallet(\Wallet\V1\InSys\Common\CreateWallet\Req $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wallet.v1.insys.Common/CreateWallet',
        $argument,
        ['\Wallet\V1\InSys\Common\CreateWallet\Res', 'decode'],
        $metadata, $options);
    }

}
