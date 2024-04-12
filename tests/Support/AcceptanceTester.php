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
    public function theyProvideTheirEmailAndPassword($email, $password)
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
        // You may add additional assertions here if needed
    }

}

