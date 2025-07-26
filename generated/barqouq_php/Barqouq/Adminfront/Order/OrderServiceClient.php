<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Order;

/**
 */
class OrderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrders(\Barqouq\Adminfront\Order\OrderListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/ListOrders',
        $argument,
        ['\Barqouq\Adminfront\Order\OrderListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderExportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ExportOrders(\Barqouq\Adminfront\Order\OrderExportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/ExportOrders',
        $argument,
        ['\Insecta\Common\File', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindOrderById(\Barqouq\Adminfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/FindOrderById',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrderStatusHistory(\Barqouq\Adminfront\Order\OrderHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/ListOrderStatusHistory',
        $argument,
        ['\Barqouq\Adminfront\Order\OrderStatusListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddOrder(\Barqouq\Adminfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/AddOrder',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrder(\Barqouq\Adminfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/UpdateOrder',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateOrderStatus(\Barqouq\Adminfront\Order\OrderStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/UpdateOrderStatus',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteOrder(\Barqouq\Adminfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/DeleteOrder',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Order\OrdersMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrdersMetrics(\Barqouq\Adminfront\Order\OrdersMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.order.OrderService/GetOrdersMetrics',
        $argument,
        ['\Barqouq\Adminfront\Order\OrderMetricsReply', 'decode'],
        $metadata, $options);
    }

}
