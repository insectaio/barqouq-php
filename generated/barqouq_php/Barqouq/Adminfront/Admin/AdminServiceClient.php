<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Adminfront\Admin;

/**
 */
class AdminServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Barqouq\Adminfront\Admin\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestLogin(\Barqouq\Adminfront\Admin\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.admin.AdminService/RequestLogin',
        $argument,
        ['\Barqouq\Adminfront\Admin\LoginReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Barqouq\Adminfront\Admin\RegisterDemoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestDemo(\Barqouq\Adminfront\Admin\RegisterDemoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.adminfront.admin.AdminService/RequestDemo',
        $argument,
        ['\Barqouq\Adminfront\Admin\RegisterReply', 'decode'],
        $metadata, $options);
    }

}
