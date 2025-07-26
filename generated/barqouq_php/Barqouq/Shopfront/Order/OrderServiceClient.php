<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Order;

/**
 * OrderService provides a set of RPC methods for managing orders,
 * including operations for listing shipping and payment options,
 * calculating order totals, adding new orders, finding orders by ID,
 * viewing order status history, and listing orders.
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
     * Retrieves a list of available shipping options based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListShippingOptions(\Barqouq\Shopfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/ListShippingOptions',
        $argument,
        ['\Insecta\Common\ListShippingOptionsReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves a list of available payment options based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPaymentOptions(\Barqouq\Shopfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/ListPaymentOptions',
        $argument,
        ['\Insecta\Common\ListPaymentOptionsReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Calculates the total cost of an order based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Calculate(\Barqouq\Shopfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/Calculate',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Adds a new order based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Add(\Barqouq\Shopfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/Add',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Finds an order by its ID based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\OrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FindOrderById(\Barqouq\Shopfront\Order\OrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/FindOrderById',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the status history of an order based on the provided OrderHistoryRequest.
     * @param \Barqouq\Shopfront\Order\OrderHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrderStatusHistory(\Barqouq\Shopfront\Order\OrderHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/ListOrderStatusHistory',
        $argument,
        ['\Barqouq\Shopfront\Order\OrderStatusListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all orders based on the provided OrderListRequest.
     * @param \Barqouq\Shopfront\Order\OrderListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrders(\Barqouq\Shopfront\Order\OrderListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/ListOrders',
        $argument,
        ['\Barqouq\Shopfront\Order\OrderListReply', 'decode'],
        $metadata, $options);
    }

    /**
     * Initiates a payment for an order based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\InitiatePaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InitiatePayment(\Barqouq\Shopfront\Order\InitiatePaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/InitiatePayment',
        $argument,
        ['\Insecta\Common\PaymentIntegration', 'decode'],
        $metadata, $options);
    }

    /**
     * Inquiry a payment for an order based on the provided OrderRequest.
     * @param \Barqouq\Shopfront\Order\CompletePaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CompletePayment(\Barqouq\Shopfront\Order\CompletePaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.order.OrderService/CompletePayment',
        $argument,
        ['\Barqouq\Shared\OrderReply', 'decode'],
        $metadata, $options);
    }

}
