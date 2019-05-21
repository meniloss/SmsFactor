<?php
namespace Meniloss\SmsFactorBundle\Model;

use Meniloss\SmsFactorBundle\Model\RequestManager;

class MessageManager {
    private $requestManager;
    
    public function __construct(RequestManager $requestManager) {
        $this->requestManager = $requestManager;
    }
    
    /**
     * Send, or simulate, a message.
     *
     * @param array|null $params
     * @param boolean    $simulate True for simulating the sending, false for real sending. Defaults to false.
     *
     * @return ApiResponse The api response.
     */
    public function send($params = null, $simulate = false)
    {
        $url = $simulate ? "/send/simulate" : "/send";
        $response = $this->requestManager->request('get', $url, null, $params);
        
        return $response;
    }
}
