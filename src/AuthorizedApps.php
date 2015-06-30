<?php namespace Gufy\Mailchimp;
// use Gufy\Mailchimp\Interface\Model;
class AuthorizedApps extends BaseModel implements Interfaces\Model
{
  public static function get()
  {
    return self::getInstance()->get('authorized-apps');
  }
  public static function find($id)
  {
    return self::getInstance()->get('authorized-apps/'.$id);
  }
  public static function create($data = [])
  {
    throw new Exceptions\MethodNotProvidedException("Method not provided in this api");
  }
  public static function update($data = [])
  {
    throw new Exceptions\MethodNotProvidedException("Method not provided in this api");
  }
  public static function delete($id)
  {
    throw new Exceptions\MethodNotProvidedException("Method not provided in this api");
  }
}
