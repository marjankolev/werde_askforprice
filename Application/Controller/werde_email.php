<?php

use \OxidEsales\Eshop\Core\Email;
class werde_email extends oxUBase{

// sendMail function sent from the Pop-up form 'Request for Price'
	public function sendEmail(){
		
	    $oEmail = oxNew(\OxidEsales\Eshop\Core\Email::class);

	    // Get parameters from the view (pop-up form)
	    $aParams = oxConfig::getRequestParameter('editval');
	    $sName = $aParams['name'];
	    $sEmail = $aParams['email'];
	    $sSubject = $aParams['subject'];
	    $sMessage = $aParams['message'];

	    // Call the function for sending email with needed parameters
	    $oEmail->sendAskForPriceMail($sName,$sEmail,$sSubject,$sMessage);    

	    $sUrl = $_SERVER['HTTP_REFERER'];
		oxRegistry::getUtils()->redirect($sUrl, false);


  }
  
}