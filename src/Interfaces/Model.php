<?php namespace Gufy\Mailchimp\Interfaces;

interface Model
{
  public static function get();
  public static function find($id);
  public static function create($data = []);
  public static function update($id);
  public static function delete($id);
}
