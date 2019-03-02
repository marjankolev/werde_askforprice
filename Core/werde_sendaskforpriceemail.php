<?php

use \OxidEsales\Eshop\Core\Email;

class werde_sendaskforpriceemail extends werde_sendaskforpriceemail_parent {

 public function sendAskForPriceMail($sName,$sEmail,$sSubject,$sMessage)
    {
         // shop info
        $shop = $this->_getShop();
        //set mail params (from, fromName, smtp)
        $this->_setMailParams($shop);

        // get email address where the email should be sent 
        $myConfig = oxRegistry::getConfig();
        $emailTo = $myConfig->getConfigParam('werdeAskForPriceSendEmailTo');

        // set email parameters
        $this->setBody($sMessage);
        $this->setSubject($sSubject);
        $this->setRecipient($emailTo, "");
        $this->setFrom($sEmail, $sName);
        $this->setReplyTo($emailTo, "");

        // send the email
        $this->send();
    }

}