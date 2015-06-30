<?php
use Gufy\Mailchimp\Mailchimp;
use Gufy\Mailchimp\AuthorizedApps;
class RequestTest extends PHPUnit_Framework_TestCase
{
  public function testRequestMailchimp()
  {
    $mailchimp = new Mailchimp('gufygoober', '9ff8a30bc1a7f6d580846c22228dd793-us11');
    $results = $mailchimp->get('authorized-apps/');
    $this->assertArrayHasKey('apps', $results);
    $this->assertArrayHasKey('_links', $results);
    $this->assertCount(0, $results['apps']);
  }
  public function testWithModel()
  {
    $mailchimp = new Mailchimp('gufygoober', '9ff8a30bc1a7f6d580846c22228dd793-us11');
    $results = AuthorizedApps::get();
    $this->assertArrayHasKey('apps', $results);
    $this->assertArrayHasKey('_links', $results);
    $this->assertCount(0, $results['apps']);
    // print_r($results);
  }
}
