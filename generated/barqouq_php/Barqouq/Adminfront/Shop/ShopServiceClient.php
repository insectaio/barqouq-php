<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Shop;

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
     * @param \Barqouq\Adminfront\Shop\ShopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetShop(\Barqouq\Adminfront\Shop\ShopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.shop.ShopService/GetShop',
        $argument,
        ['\Barqouq\Adminfront\Shop\ShopReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Shop\ShopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateShop(\Barqouq\Adminfront\Shop\ShopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.shop.ShopService/CreateShop',
        $argument,
        ['\Barqouq\Adminfront\Shop\ShopReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Shop\ShopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateShop(\Barqouq\Adminfront\Shop\ShopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.shop.ShopService/UpdateShop',
        $argument,
        ['\Barqouq\Adminfront\Shop\ShopReply', 'decode'],
        $metadata, $options);
    }

}
