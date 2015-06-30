<?php namespace Gufy\Mailchimp;
use Exception;
class BaseModel
{
  static $instance;
  public static function getInstance()
  {
    if(empty(static::$instance) || (static::$instance instanceof Mailchimp) == false)
      throw new Exception("Mailchimp client is not initialized.");
    return static::$instance;
  }
  public static function setInstance(\Gufy\Mailchimp\Mailchimp $instance)
  {
    static::$instance=$instance;
  }
}
