# (Un)Official Mailchimp API 3.0 PHP Bridge

## Installation

Just run this command on terminal under your active directory

```shell
  composer require gufy/mailchimp:~1
```

Or update your `composer.json` by adding this line on your `require` key

```json
{
  "require":{
    "gufy/mailchimp":"~1"
  }
}
```
Then run `composer update` on your terminal

## Usage

```php
<?php
use Gufy\Mailchimp\Mailchimp;
$mailchimp =  new Mailchimp($username, $api_key);

$lists = $mailchimp->get('lists');

$create_list = $mailchimp->post('lists', $parameters);

```

## Next Thing

I'm about to write the package easier to use. Such as Creating List with simple script. If you have any ideas, or improvement in this package, just create an issue or pull a request. I love to discuss something awesome. :+1:
