<?php

namespace RRSVP\WeatherWS;

class Weather extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetWeatherInformation' => 'RRSVP\\WeatherWS\\GetWeatherInformation',
      'GetWeatherInformationResponse' => 'RRSVP\\WeatherWS\\GetWeatherInformationResponse',
      'ArrayOfWeatherDescription' => 'RRSVP\\WeatherWS\\ArrayOfWeatherDescription',
      'WeatherDescription' => 'RRSVP\\WeatherWS\\WeatherDescription',
      'GetCityForecastByZIP' => 'RRSVP\\WeatherWS\\GetCityForecastByZIP',
      'GetCityForecastByZIPResponse' => 'RRSVP\\WeatherWS\\GetCityForecastByZIPResponse',
      'ForecastReturn' => 'RRSVP\\WeatherWS\\ForecastReturn',
      'ArrayOfForecast' => 'RRSVP\\WeatherWS\\ArrayOfForecast',
      'Forecast' => 'RRSVP\\WeatherWS\\Forecast',
      'temp' => 'RRSVP\\WeatherWS\\temp',
      'POP' => 'RRSVP\\WeatherWS\\POP',
      'GetCityWeatherByZIP' => 'RRSVP\\WeatherWS\\GetCityWeatherByZIP',
      'GetCityWeatherByZIPResponse' => 'RRSVP\\WeatherWS\\GetCityWeatherByZIPResponse',
      'WeatherReturn' => 'RRSVP\\WeatherWS\\WeatherReturn',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets Information for each WeatherID
     *
     * @param GetWeatherInformation $parameters
     * @return GetWeatherInformationResponse
     */
    public function GetWeatherInformation(GetWeatherInformation $parameters)
    {
      return $this->__soapCall('GetWeatherInformation', array($parameters));
    }

    /**
     * Allows you to get your City Forecast Over the Next 7 Days, which is updated hourly. U.S. Only
     *
     * @param GetCityForecastByZIP $parameters
     * @return GetCityForecastByZIPResponse
     */
    public function GetCityForecastByZIP(GetCityForecastByZIP $parameters)
    {
      return $this->__soapCall('GetCityForecastByZIP', array($parameters));
    }

    /**
     * Allows you to get your City's Weather, which is updated hourly. U.S. Only
     *
     * @param GetCityWeatherByZIP $parameters
     * @return GetCityWeatherByZIPResponse
     */
    public function GetCityWeatherByZIP(GetCityWeatherByZIP $parameters)
    {
      return $this->__soapCall('GetCityWeatherByZIP', array($parameters));
    }

}
