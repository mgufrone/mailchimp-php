<?php namespace Gufy\Mailchimp;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
class Mailchimp
{
  private $api_key;
  private $username;
  private $endpoint_url;
  private static $instance;
  public function __construct($username, $api_key)
  {
    $this->api_key = $api_key;
    $this->username = $username;
    $endpoint = explode("-",$api_key);

    $this->endpoint_url = end($endpoint);
    $this->client = new Client([
      'base_uri'=>'https://'.$this->endpoint_url.'.api.mailchimp.com/3.0/',
      'auth'=>[$this->username, $this->api_key]
    ]);
    BaseModel::setInstance($this);
  }
  private function request($method, $url, $params=array())
  {
    $request_params = [];
    if(in_array($method, ['POST','PUT','PATCH']))
    {
      $request_params = ['json'=>$params];
    }
    try{
      $request = new Request($method, $url);
      $response = $this->client->send($request, $request_params);
      return json_decode($response->getBody()->getContents(), 1);
    }
    catch(\GuzzleHttp\Exception\ClientException $e)
    {
      return json_decode($e->getResponse()->getBody()->getContents(), 1);
    }
  }
  public function get($url)
  {
    return $this->request('GET', $url);
  }
  public function post($url, $params=array())
  {
    return $this->request('POST', $url, $params);
  }
  public function patch($url, $params=array())
  {
    return $this->request('PATCH', $url, $params);
  }
  public function put($url, $params=array())
  {
    return $this->request('PUT', $url, $params);
  }
  public function delete($url)
  {
    return $this->request('DELETE', $url);
  }
}
