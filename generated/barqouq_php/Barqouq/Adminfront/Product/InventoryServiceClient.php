<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Product;

/**
 */
class InventoryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Barqouq\Adminfront\Product\ListVariantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListVariants(\Barqouq\Adminfront\Product\ListVariantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/ListVariants',
        $argument,
        ['\Barqouq\Adminfront\Product\ListVariantsReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVariant(\Barqouq\Adminfront\Product\VariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/GetVariant',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddVariant(\Barqouq\Adminfront\Product\VariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/AddVariant',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateVariant(\Barqouq\Adminfront\Product\VariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/UpdateVariant',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVariant(\Barqouq\Adminfront\Product\VariantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/DeleteVariant',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantHistoryListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVariantHistory(\Barqouq\Adminfront\Product\VariantHistoryListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/GetVariantHistory',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantHistoryListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantGroupListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListVariantGroups(\Barqouq\Adminfront\Product\VariantGroupListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/ListVariantGroups',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantGroupListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVariantGroup(\Barqouq\Adminfront\Product\VariantGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/GetVariantGroup',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantGroupReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddVariantGroup(\Barqouq\Adminfront\Product\VariantGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/AddVariantGroup',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantGroupReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateVariantGroup(\Barqouq\Adminfront\Product\VariantGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/UpdateVariantGroup',
        $argument,
        ['\Barqouq\Adminfront\Product\VariantGroupReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Product\VariantGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteVariantGroup(\Barqouq\Adminfront\Product\VariantGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.product.InventoryService/DeleteVariantGroup',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
