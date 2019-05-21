<?php
namespace Meniloss\SmsFactorBundle\Model;

use Meniloss\SmsFactorBundle\Model\RequestManager;

class ListManager {
    private $requestManager;
    
    public function __construct(RequestManager $requestManager) {
        $this->requestManager = $requestManager;
    }
    
}
