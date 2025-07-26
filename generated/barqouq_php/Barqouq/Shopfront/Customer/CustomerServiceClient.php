<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Customer;

/**
 * CustomerService defines the operations available for customer-related
 * functionalities in the Barqouq Shopfront application. This includes
 * services for authentication, registration, managing user details and
 * addresses, and handling password resets. The service also supports token
 * management and account verification processes.
 */
class CustomerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * RequestLogin allows a user to authenticate by providing their login
     * credentials, such as email and password, and returns a token for
     * subsequent authenticated requests.
     * @param \Barqouq\Shopfront\Customer\LoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestLogin(\Barqouq\Shopfront\Customer\LoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestLogin',
        $argument,
        ['\Barqouq\Shopfront\Customer\LoginReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestRegister allows a new user to create an account by providing
     * necessary personal details, such as name, email, and password, and
     * returns a user object along with an authentication token.
     * @param \Barqouq\Shopfront\Customer\RegisterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestRegister(\Barqouq\Shopfront\Customer\RegisterRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestRegister',
        $argument,
        ['\Barqouq\Shopfront\Customer\RegisterReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestDetails retrieves detailed information about the authenticated
     * user, including personal information and account settings.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestDetails(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestDetails',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestUpdate allows an authenticated user to update their personal
     * details, such as name, email, or phone number.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestUpdate(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestUpdate',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestUpdateEmail allows an authenticated user to update their email
     * address. The updated email will be used for future communications.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestUpdateEmail(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestUpdateEmail',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestUpdatePhone allows an authenticated user to update their phone
     * number, which may be used for SMS notifications and account recovery.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestUpdatePhone(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestUpdatePhone',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestUpdatePassword allows an authenticated user to update their
     * account password. The new password will be used for subsequent logins.
     * @param \Barqouq\Shopfront\Customer\UpdatePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestUpdatePassword(\Barqouq\Shopfront\Customer\UpdatePasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestUpdatePassword',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RefreshToken generates a new authentication token for the user, extending
     * the session without requiring a re-login.
     * @param \Barqouq\Shopfront\Customer\RefreshTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefreshToken(\Barqouq\Shopfront\Customer\RefreshTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RefreshToken',
        $argument,
        ['\Barqouq\Shopfront\Customer\RefreshTokenReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestLogout invalidates the user's current authentication token,
     * effectively logging them out of the system.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestLogout(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestLogout',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ResendEmailVerification re-sends the email verification link to the user's
     * registered email address to complete account verification.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendEmailVerification(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/ResendEmailVerification',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ResendPhoneVerification re-sends the verification code to the user's
     * registered phone number, allowing them to complete phone verification.
     * @param \Barqouq\Shopfront\Customer\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendPhoneVerification(\Barqouq\Shopfront\Customer\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/ResendPhoneVerification',
        $argument,
        ['\Barqouq\Shopfront\Customer\ResendPhoneVerificationReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestVerifyPhone verifies the user's phone number by checking the
     * provided verification code against the one sent via SMS or call.
     * @param \Barqouq\Shopfront\Customer\VerifyPhoneRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestVerifyPhone(\Barqouq\Shopfront\Customer\VerifyPhoneRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestVerifyPhone',
        $argument,
        ['\Barqouq\Shopfront\Customer\UserReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestResetPassword initiates the password reset process by sending a
     * password reset link or code to the user's registered email address.
     * @param \Barqouq\Shopfront\Customer\ResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestResetPassword(\Barqouq\Shopfront\Customer\ResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestResetPassword',
        $argument,
        ['\Barqouq\Shopfront\Customer\ResetPasswordReply', 'decode'],
        $metadata, $options);
    }

    /**
     * RequestVerifyResetPassword verifies the password reset process using a
     * code sent to the user's phone or email. This ensures that the user
     * requesting the reset is authorized to do so.
     * @param \Barqouq\Shopfront\Customer\VerifyResetPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestVerifyResetPassword(\Barqouq\Shopfront\Customer\VerifyResetPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/RequestVerifyResetPassword',
        $argument,
        ['\Barqouq\Shopfront\Customer\VerifyResetPasswordReply', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAddresses retrieves the list of all addresses associated with the
     * authenticated user, including any saved shipping or billing addresses.
     * @param \Barqouq\Shopfront\Customer\ListAddressesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAddresses(\Barqouq\Shopfront\Customer\ListAddressesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/ListAddresses',
        $argument,
        ['\Barqouq\Shopfront\Customer\ListAddressesReply', 'decode'],
        $metadata, $options);
    }

    /**
     * AddAddress adds a new address to the authenticated user's account, allowing
     * them to use it for shipping, billing, or other purposes.
     * @param \Barqouq\Shopfront\Customer\AddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddAddress(\Barqouq\Shopfront\Customer\AddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/AddAddress',
        $argument,
        ['\Insecta\Common\Address', 'decode'],
        $metadata, $options);
    }

    /**
     * GetAddress retrieves a specific address from the authenticated user's
     * account based on the address ID provided.
     * @param \Barqouq\Shopfront\Customer\AddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAddress(\Barqouq\Shopfront\Customer\AddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/GetAddress',
        $argument,
        ['\Insecta\Common\Address', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateAddress updates the details of an existing address in the
     * authenticated user's account, such as changing the street address or
     * updating the postal code.
     * @param \Barqouq\Shopfront\Customer\AddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAddress(\Barqouq\Shopfront\Customer\AddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/UpdateAddress',
        $argument,
        ['\Insecta\Common\Address', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteAddress removes a specific address from the authenticated user's
     * account, ensuring it is no longer available for future transactions.
     * @param \Barqouq\Shopfront\Customer\AddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAddress(\Barqouq\Shopfront\Customer\AddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.customer.CustomerService/DeleteAddress',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
