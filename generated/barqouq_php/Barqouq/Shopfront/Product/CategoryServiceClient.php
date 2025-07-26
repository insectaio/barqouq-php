<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Product;

/**
 */
class CategoryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists categories based on the provided criteria.
     * @param \Barqouq\Shopfront\Product\CategoryListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Barqouq\Shopfront\Product\CategoryListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.product.CategoryService/List',
        $argument,
        ['\Barqouq\Shopfront\Product\CategoryListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves detailed information about a category by its ID.
     * @param \Barqouq\Shopfront\Product\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindById(\Barqouq\Shopfront\Product\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.product.CategoryService/FindById',
        $argument,
        ['\Barqouq\Shopfront\Product\CategoryReply', 'decode'],
        $metadata, $options);
    }

}
