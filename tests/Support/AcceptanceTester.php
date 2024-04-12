<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */
 /**
     * @Given I am on :arg1
     */
     public function iAmOn($url)
     {
          $this->amOnPage($url);
     }

    /**
     * @When I click the date link
     */
     public function iClickTheDateLink()
     {
		$this->click('.date-link');
     }

    /**
     * @Then I see :arg1
	 * @Then I see :arg1;
     */
     public function iSee($arg1)
     {
         $this->see($arg1);
     }

	

     /**
     * @Given I am on 'Client/paymentInfo'
     */
     public function iAmOnClientpaymentInfo()
     {
         $this->amOnPage('Client/paymentInfo');
     }

    /**
     * @When I enter Card Number :arg1 in the cardNumber box
     */
     public function iEnterCardNumberInTheCardNumberBox($cardNumber)
     {
		 
        $this->fillField('cardNumber', $cardNumber);
     }

    /**
     * @When I enter Security Code :arg1 in the securityCode box
     */
     public function iEnterSecurityCodeInTheSecurityCodeBox($securityCode)
     {
		 
         $this->fillField('securityCode', $securityCode);
     }

    /**
     * @When I enter Expiry Date :arg1 in the expiryDate box
     */
     public function iEnterExpiryDateInTheExpiryDateBox($expiryDate)
     {
		 
         $this->fillField('expiryDate', $expiryDate);
     }

    /**
     * @Then assert Saved Payment Info:arg1, :arg2, :arg3
     */
     public function assertSavedPaymentInfo($cardNumber, $securityCode, $expiryDate)
     {
        $this->seeInField('PaymentInformation ', ' card number: $cardNumber \n securityCode: $securityCode \n expirydate $expiryDate');
        $this->seeInField('securityCode', $securityCode);
        $this->seeInField('expiryDate', $expiryDate);
     }
	 
    /**
     * @When I click pay
     */
     public function iClickPay()
     {
         $this->click('Pay');
     }
		/**
     * @When I clickCancel
     */
		public function iClickCancel()
     {
        $this->click('Cancel');
     }

    /**
     * @Then I don't see :arg1
     */
     public function iDontSee($arg1)
     {
         $this->dontSee($arg1);
     }
	   /**
     * @When I edit to :arg1
     */
     public function iEditTo($arg1)
     {
		 $this->click('Edit');
         $this->fillField('appointment', $arg1);
     }
    /**
     * @Given I see my appointment :arg1
     */
	 
     public function iSeeMyAppointment($arg1)
     {
        $this->seeInField('#appointment', $arg1);
     }
	 
	 
    /**
     * @Then I see my updated appointment:arg1
     */
     public function iSeeMyUpdatedAppointment($arg1)
     {
        $this->seeInField('#appointment', $arg1);
     }
	   /**
     * @When I send :arg1 to :arg2
     */
       public function iSendTo($arg1, $arg2)
     {
		 
        $this->fillField('message', $arg1);
		$this->fillField('barber', $arg2);
		$this->click('Send');
     }

    /**
     * @Then I see my sent message :arg1 in the messaging system
     */
     public function iSeeMySentMessageInTheMessagingSystem($arg1)
     {
         $this->see($arg1);
     }
	   /**
     * @When I receive :arg1
     */
     public function iReceive($arg1)
     {
        
     }

    /**
     * @Then I see :arg1 in the messaging system
     */
     public function iSeeInTheMessagingSystem($arg1)
     {
       $this->see($arg1);
     }


}

