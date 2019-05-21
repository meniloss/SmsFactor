<?php
namespace Meniloss\SmsFactorBundle\Model;

use Meniloss\SmsFactorBundle\Model\RequestManager;

class AccountManager {
    private $requestManager;
    
    public function __construct(RequestManager $requestManager) {
        $this->requestManager = $requestManager;
    }
    
}
