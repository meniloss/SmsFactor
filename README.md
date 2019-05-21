# PrimoTexto

1) Install using composer:

"require": {
        ...,
        "meniloss/sms-factor": "1.*"
    },
    
2) add to your AppKernel:

$bundles = [
  ...
  new Meniloss\SmsFactorBundle\MenilossSmsFactorBundle(),
];

3) config.yml:

You must add your api key find in your account on primotexto.com

meniloss_sms_factor:
    api_key: 123456789acdefghij
    
4) Usage:

