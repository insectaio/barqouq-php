<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Barqouq\Shopfront\Location;

/**
 * The LocationService provides methods to retrieve lists of countries, 
 * states, and cities, enabling the SSO system to access and manage 
 * structured geographical data.
 */
class LocationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Ping checks the availability of the LocationService.
     * @param \Barqouq\Shopfront\Location\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Ping(\Barqouq\Shopfront\Location\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.location.LocationService/Ping',
        $argument,
        ['\Barqouq\Shopfront\Location\PingReply', 'decode'],
        $metadata, $options);
    }

    /**
     * ListCountries retrieves a list of all countries available in the system.
     * This method returns a ListCountriesReply message containing a repeated 
     * list of Country objects.
     * @param \Insecta\Common\ListCountriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCountries(\Insecta\Common\ListCountriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.location.LocationService/ListCountries',
        $argument,
        ['\Insecta\Common\ListCountriesReply', 'decode'],
        $metadata, $options);
    }

    /**
     * ListStates retrieves a list of states or regions within a specified 
     * country. The method requires a ListStatesRequest message containing 
     * the country code and returns a ListStatesReply message with a repeated 
     * list of State objects.
     * @param \Insecta\Common\ListStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListStates(\Insecta\Common\ListStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.location.LocationService/ListStates',
        $argument,
        ['\Insecta\Common\ListStatesReply', 'decode'],
        $metadata, $options);
    }

    /**
     * ListCities retrieves a list of cities within a specified state and 
     * country. The method requires a ListCitiesRequest message with the 
     * country code and state code, and returns a ListCitiesReply message 
     * containing a repeated list of City objects.
     * @param \Insecta\Common\ListCitiesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCities(\Insecta\Common\ListCitiesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/barqouq.shopfront.location.LocationService/ListCities',
        $argument,
        ['\Insecta\Common\ListCitiesReply', 'decode'],
        $metadata, $options);
    }

}
