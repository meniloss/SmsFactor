# Meniloss Sms Factor

## Install using composer:

```cmd
composer require meniloss/sms-factor
```
    
## add to your AppKernel:

```php
$bundles = [
  ...
  new Meniloss\SmsFactorBundle\MenilossSmsFactorBundle(),
];
```

## config.yml:

You must add your api key find in your account on smsfactor.com

```yml
meniloss_sms_factor:
    api_key: 123456789acdefghij
```
    
## Usage:

Send a message :
```php
$smsFactor = $this->get('meniloss.sms_factor');
$response = $smsFactor->message()->send([
        'to' => '33601000000',
	'text' => 'Did you ever dance whith the devil in the pale moonlight ?'
]);
print_r($response->getJson());
```
