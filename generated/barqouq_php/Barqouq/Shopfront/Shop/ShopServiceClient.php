<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Shop;

/**
 */
class ShopServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Searches for a shop based on the provided criteria.
     * @param \Barqouq\Shopfront\Shop\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\Barqouq\Shopfront\Shop\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.shop.ShopService/Search',
        $argument,
        ['\Barqouq\Shopfront\Shop\SearchReply', 'decode'],
        $metadata, $options);
    }

}
