<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Product;

/**
 */
class ProductServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Searches for products based on the provided criteria.
     * @param \Barqouq\Shopfront\Product\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\Barqouq\Shopfront\Product\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.product.ProductService/Search',
        $argument,
        ['\Barqouq\Shopfront\Product\SearchReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves detailed information about a product by its ID.
     * @param \Barqouq\Shopfront\Product\FindRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindById(\Barqouq\Shopfront\Product\FindRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.product.ProductService/FindById',
        $argument,
        ['\Barqouq\Shopfront\Product\FindReply', 'decode'],
        $metadata, $options);
    }

}
