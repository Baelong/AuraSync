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
     * @Given I am on :arg1 
     */ 
  
 /**
     * @Given I am on :arg1
     */
     public function iAmOn($url) 
     { 
         $this->amOnPage($url); //make the browser go on a URL 
     } 
 
    /** 
     * @When I enter :arg1 in the search box 
     */ 
     public function iEnterInTheSearchBox($term) 
     { 
         $this->fillField('q', $term);//write the term in the box 
     } 
 
    /** 
     * @When click Search 
     */ 
     public function clickSearch() 
     { 
        $this->click('Google Search'); 
     } 

    /**
     * @Then I see :arg1 
     */ 
  /**
     * @Then I see :arg1
	 * @Then I see :arg1;
     */
     public function iSee($arg1) 
     { 
         $this->see($arg1);//assert that you can see the string 
     }

	 /**
     * @Given a new user wants to register
     */
    public function aNewUserWantsToRegister()
    {
        // Navigate to the registration page
        $this->amOnPage('/Authentication/register');
    }

    /**
     * @When they provide their email :email and password :password
     */
    public function theyProvideTheirEmailAndPasswordForRegistration($email, $password)
    {
        // Fill out the registration form with provided email and password
        $this->fillField('email', $email);
        $this->fillField('password', $password);
    }

    /**
     * @When they submit the registration form
     */
    public function theySubmitTheRegistrationForm()
    {
        // Submit the registration form
        $this->click('Register');
    }

    /**
     * @Then they should be successfully registered
     */
    public function theyShouldBeSuccessfullyRegistered()
    {
        // Assert that the user is redirected to the login page
        $this->seeCurrentUrlEquals('/Authentication/login.php');
    }

    
    /**
     * @Given a registered user wants to log in
     */
    public function aRegisteredUserWantsToLogIn()
    {
        $this->amOnPage('/Authentication/login');
    }

    /**
     * @When they provide their email :email and password :password
     */
    public function theyProvideTheirEmailAndPassword($email, $password)
    {   
        $this->fillField('email', 'user@gmail.com');
        $this->fillField('password', 'password123');
    }

    /**
     * @When they click on the login button
     */
    public function theyClickOnTheLoginButton()
    {
        $this->click('Login');
    }

    /**
     * @Then they should be redirected to the client profile creation page
     */
    public function theyShouldBeRedirectedToTheClientProfileCreationPage()
    {
        $this->seeInCurrentUrl('/Client/create_profile');
    }

    /**
     * @When they provide incorrect email :email or password :password
     */
    public function theyProvideIncorrectEmailOrPassword($email, $password)
    {
        $this->fillField('email', 'invalid@example.com');
        $this->fillField('password', 'invalidpassword');
        $this->click('Login');
    }

    /**
     * @Then they should stay on the login page
     */
    public function theyShouldStayOnTheLoginPage()
    {
        $this->seeInCurrentUrl('/Authentication/login');
    }

    /**
     * @Then they should see an error message indicating invalid credentials
     */
    public function theyShouldSeeAnErrorMessage()
    {
        $this->seeInCurrentUrl('/login?error=invalid_credentials');
    }

    /**
    * @Given a client wants to create a profile
    */
    public function aClientWantsToCreateProfile()
    {
    $this->amOnPage('/Client/create_profile');
    }

    /**
    * @When they provide their name :name and age :age, and other relevant information
    */
    public function theyProvideTheirNameAgeAndOtherRelevantInformation($name, $age)
    {
        $this->fillField('name', $name);
        $this->fillField('age', $age);
    }

    /**
    * @When they submit the profile creation form
    */
    public function theySubmitTheProfileCreationForm()
    {
        $this->click('Create Profile');
    }

    /**
    * @Then their profile should be successfully created
    */
    public function theyShouldBeRedirectedToTheClientProfilePage()
    {
        $this->seeInCurrentUrl('/Client/profile');
    }


    /**
     * @Given a logged-in user wants to log out
     */
    public function aLoggedInUserWantsToLogOut()
    {
        $this->amOnPage('/Client/profile');
    }

    /**
     * @When they click on the logout button
     */
    public function theyClickOnTheLogoutButton()
    {
        $this->click('Logout');
    }

    /**
     * @Then they should be logged out of their account
     */
    public function theyShouldBeLoggedOutOfTheirAccount()
    {
        $this->seeInCurrentUrl('/Authentication/login');
    }

     /**
     * @Given a client wants to update their profile
     */
    public function aClientWantsToUpdateTheirProfile()
    {
        $this->amOnPage('/Client/edit_profile');
    }

     /**
     * @When they modify their profile information, changing their name to :name and updating their age to :age
     */
    public function theyModifyTheirProfileInformation($name, $age)
    {
        $this->fillField('name', $name);
        $this->fillField('age', $age);
    }

     /**
     * @When they submit the profile update form
     */

     public function theySubmitTheProfileUpdateForm()
    {
        $this->click('Edit Profile');
    }

    /**
     * @Then their profile should be successfully updated
     */
    public function theirProfileShouldBeSuccessfullyUpdated()
    {
        $this->seeInCurrentUrl('/Client/profile');
    }

    /**
     * @Given a client wants to browse barbers
     */
    public function aClientWantsToBrowseBarbers()
    {
        $this->amOnPage('/Client/profile');
       
    }

    /**
     * @When they access the list of available barbers
     */
    public function theyAccessTheListOfAvailableBarbers()
    {
        $this->click('Browse Barbers');
    }

    /**
     * @Then they should be able to view a list of barbers
     */
    public function theyShouldBeAbleToViewAListOfBarbers()
    {
        $this->see('Barber 1');
        $this->see('Barber 2');
        $this->see('Barber 3');
    }

    /**
     * @Given a client wants to view details of a specific barber
     */
    public function aClientWantsToViewDetailsOfASpecificBarber()
    {
        $this->amOnPage('/Barber/browse_barbers');
    }

    /**
     * @When they select a barber from the list
     */
    public function theySelectABarberFromTheList()
    {
         $this->click('a:contains("Barber 1")');
    }

    /**
     * @Then they should be able to view detailed information about the barber, including services, pricing, and availability.
     */
    public function theyShouldBeAbleToViewDetailedInformationAboutTheBarber()
    {
        $this->seeInCurrentUrl('/Barber/profile');
    }

    /**
     * @Given a client wants to view the availability of a barber
     */
    public function aClientWantsToViewTheAvailabilityOfABarber()
    {
        $this->amOnPage('/Barber/profile');
       
    }

    /**
     * @When they press the "View Schedule" link
     */
    public function theyPressTheViewScheduleLink()
    {
        $this->click('a:contains("View Schedule")');
    }

    /**
     * @Then they should be redirected to the Barber's availability schedule page
     */
    public function theyShouldBeRedirectedToTheBarbersAvailabilitySchedulePage()
    {
        $this->amOnPage('/Barber/schedule');
    }

}
    

    /**
     * @When I click the date link
     */
     public function iClickTheDateLink()
     {
		$this->click('.date-link');
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
