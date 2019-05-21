# Meniloss Sms Factor

## Install using composer:

```yml
"require": {
        ...,
        "meniloss/sms-factor": "1.*"
    },
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

