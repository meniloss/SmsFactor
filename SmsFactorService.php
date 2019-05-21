<?php
namespace Meniloss\SmsFactorBundle\Service;

use Meniloss\SmsFactorBundle\Model\MessageManager;
use Meniloss\SmsFactorBundle\Model\AccountManager;
use Meniloss\SmsFactorBundle\Model\CampaignManager;
use Meniloss\SmsFactorBundle\Model\ListManager;
use Meniloss\SmsFactorBundle\Model\TokenManager;
use Meniloss\SmsFactorBundle\Model\WebhookManager;



/**
 * Description of MessagesService
 *
 * @author olivi
 */
class MessagesService {
    private $messageManager;
    
    private $accountManager;
    
    private $campaignManager;
    
    private $listManager;
    
    private $tokenManager;
    
    private $webhookManager;
    
    public function __construct(MessageManager $messageManager, AccountManager $accountManager, CampaignManager $campaignManager, ListManager $listManager, TokenManager $tokenManager, WebhookManager $webhookManager) { 
        $this->messageManager = $messageManager;
        $this->accountManager = $accountManager;
        $this->campaignManager = $campaignManager;
        $this->listManager = $listManager;
        $this->tokenManager = $tokenManager;
        $this->webhookManager = $webhookManager;
    }
    
    public function getMessage(){
        return $this->messageManager;
    }
    
    public function getAccount(){
        return $this->accountManager;
    }
    
    public function getCampaign(){
        return $this->campaignManager;
    }
    
    public function getList(){
        return $this->listManager;
    }
    
    public function getToken(){
        return $this->tokenManager;
    }
    
    public function getWebhook(){
        return $this->webhookManager;
    }
}
