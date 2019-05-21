# Meniloss Sms Factor

## Install using composer:

"require": {
        ...,
        "meniloss/sms-factor": "1.*"
    },
    
## add to your AppKernel:

$bundles = [
  ...
  new Meniloss\SmsFactorBundle\MenilossSmsFactorBundle(),
];

## config.yml:

You must add your api key find in your account on primotexto.com

meniloss_sms_factor:
    api_key: 123456789acdefghij
    
## Usage:

