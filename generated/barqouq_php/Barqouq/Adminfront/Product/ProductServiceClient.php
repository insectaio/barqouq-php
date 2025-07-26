<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Product;

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
     * @param \Barqouq\Adminfront\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProduct(\Barqouq\Adminfront\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/AddProduct',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProduct(\Barqouq\Adminfront\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/UpdateProduct',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProduct(\Barqouq\Adminfront\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/DeleteProduct',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProducts(\Barqouq\Adminfront\Product\ProductListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/ListProducts',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindProductById(\Barqouq\Adminfront\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/FindProductById',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddProductImage(\Barqouq\Adminfront\Product\ProductImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/AddProductImage',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductImageReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProductImage(\Barqouq\Adminfront\Product\ProductImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/DeleteProductImage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProductImages(\Barqouq\Adminfront\Product\ProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.ProductService/ListProductImages',
        $argument,
        ['\Barqouq\Adminfront\Product\ProductImageListReply', 'decode'],
        $metadata, $options);
    }

}
