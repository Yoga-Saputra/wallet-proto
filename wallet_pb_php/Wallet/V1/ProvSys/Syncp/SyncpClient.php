<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
//
// Provider System gRPC Services
//
// Sync Credit Provider related messages.
// This proto contains everything related to synchronize credit provider services
// accepted payload, returned response and method.
namespace Wallet\V1\ProvSys\Syncp;

/**
 *
 * Service for handling syncing member's credit that called by provider.
 */
class SyncpClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Used to getting member credit.
     * @param \Wallet\V1\ProvSys\Syncp\SyncCredit\Req $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Credit(\Wallet\V1\ProvSys\Syncp\SyncCredit\Req $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/wallet.v1.provsys.Syncp/Credit',
        $argument,
        ['\Wallet\V1\ProvSys\Syncp\SyncCredit\Res', 'decode'],
        $metadata, $options);
    }

}
