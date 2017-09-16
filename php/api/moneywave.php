<?php

/**
* Money Wave API
*/
class MoneyWave
{
  protected $api_key; 
  protected $app_secret;
  protected $url;

  public function __construct()
  {
    # code...
    $this->api_key = "ts_Y97G6SE3GBS1LO1FINJY";
    $this->app_secret = "ts_S00T33F7NFGBJ68H3ZQ4FDH8P6438O";
    $this->url = "http://moneywave.herokuapp.com";

    $headers = array('content-type' => 'application/json');
    $query = array('apiKey' => $this->api_key, 'secret' => $this->app_secret);
    $response = Unirest\Request::post('https://moneywave.herokuapp.com/v1/merchant/verify', $headers, $query);

    return $response;
  }

}

?>