<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Product;

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
     * @param \Barqouq\Adminfront\Product\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddCategory(\Barqouq\Adminfront\Product\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.CategoryService/AddCategory',
        $argument,
        ['\Barqouq\Adminfront\Product\CategoryReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCategory(\Barqouq\Adminfront\Product\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.CategoryService/UpdateCategory',
        $argument,
        ['\Barqouq\Adminfront\Product\CategoryReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCategory(\Barqouq\Adminfront\Product\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.CategoryService/DeleteCategory',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\CategoryListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCategories(\Barqouq\Adminfront\Product\CategoryListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.CategoryService/ListCategories',
        $argument,
        ['\Barqouq\Adminfront\Product\CategoryListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\CategoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindCategoryById(\Barqouq\Adminfront\Product\CategoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.CategoryService/FindCategoryById',
        $argument,
        ['\Barqouq\Adminfront\Product\CategoryReply', 'decode'],
        $metadata, $options);
    }

}
