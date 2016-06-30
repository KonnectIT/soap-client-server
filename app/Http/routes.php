<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Persoon;
use RRSVP\WeatherWS\Weather;

Route::get('a', function () {
    $options = [
        'uri' => 'http://homestead.app/'
    ];
    $server =  new \SoapServer(null, $options);
    $server->setObject($this->get('hello_service'));

    $response = new \Illuminate\Http\Response();
    $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

    ob_start();
    $server->handle();
    $response->setContent(ob_get_clean());

    return $response;
});

Route::get('/', function() {
    $generator = new \Wsdl2PhpGenerator\Generator();
/*    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => storage_path('stuf-bg/bg0310/prs/bg0310_vraagAntwoord_prs.wsdl'),
//            'inputFile' => 'http://www.webservicex.net/CurrencyConvertor.asmx?WSDL',
            'outputDir' => storage_path('tmp/bg0310_vraagAntwoord_prs'),
            'namespaceName' => 'RRSVP\Stuf'
        ))
    );*/
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => 'http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL',
            'outputDir' => storage_path('tmp/WeatherWS'),
            'namespaceName' => 'RRSVP\WeatherWS'
        ))
    );
});

Route::get('client', function() {
    require storage_path('tmp/WeatherWS/autoload.php');
    // A class will generated representing the service.
    // It is named after the element in the WSDL and has a method for each operation.
    $service = new Weather();

//    $cityWeatherByZIP = new \GetCityWeatherByZIP(10282); // new york
    $cityWeatherByZIP = new \GetCityWeatherByZIP(95415); // san francisco
    $request = $service->GetCityWeatherByZIP($cityWeatherByZIP);

    $response = $request->getGetCityWeatherByZIPResult();

//    $request = new \ConversionRate(\Currency::USD, \Currency::EUR);
    
//    $response = $service->ConversionRate($request);
    dd($response);
    dd($response->getTemperature());
});

Route::any('wsdl', function() {
    if (isset($_GET['wsdl'])) {
        $wsdl = new \WSDL\WSDLCreator(Persoon::class, 'http://homestead.app/wsdl');
        $wsdl->setNamespace("http://homestead.app/");
        $wsdl->renderWSDL();
        exit;
    }

    $server = new SoapServer(null, array(
        'uri' => 'http://homestead.app/wsdl'
    ));
    $server->setClass('App\Persoon');
    $server->handle();
});


Route::group(['prefix' => 'services'], function() {

    Route::any('guc/wsdl', ['as' => 'services.guc.wsdl', function() {
        $currentUrl = url()->current();
        $wsdl = new \WSDL\WSDLCreator(Persoon::class, $currentUrl);
        $wsdl->setNamespace($currentUrl);
        $wsdl->renderWSDL();
        exit;
    }]);

    Route::any('guc', ['as' => 'services.guc', function() {
        $currentUrl = url()->current();
        $server = new SoapServer(null, array(
            'uri' => $currentUrl
        ));
        $server->setClass('App\Persoon');
        $server->handle();
    }]);
});

Route::get('soapclient', function() {
    $client = new \SoapClient(route('services.guc.wsdl'), [
        'location' => route('services.guc'),
        'uri' => url('/'),
        'trace' => true,
        'cache_wsdl' => WSDL_CACHE_NONE
    ]);
    $obj = new stdClass();
    $obj->name = 'Edwin Heij';
//    $obj = $obj->name;
    $obj = "Edje";
//    dd($client->__getFunctions());
    $response = $client->hallo($obj);

    var_dump($client->__getLastRequest());
    var_dump($client->__getLastResponse());
    dd($response);
});
