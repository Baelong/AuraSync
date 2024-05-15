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
     * Define custom actions here     */

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
     * @When I click Client
     */
     public function iClickClient()
     {
         $this->click('Client');
     }

    /**
     * @When I click Barber
     */
     public function iClickBarber()
     {
         $this->click('Barber');
     }
 /**
     * @When I enter :arg1 in the email box
     */
     public function iEnterInTheEmailBox($arg1)
     {
         $this->fillField('email',$arg1);
     }

    /**
     * @When I enter :arg1 in the password box
     */
     public function iEnterInThePasswordBox($arg1)
     {
         $this->fillField('password',$arg1);
     }
     /**
     * @When Click Login
     */
    public function clickLogin()
    {
        $this->submitForm("form", ['action' => 'Login']);
    }
     /**
     * @When Click Register
     */
    public function clickRegister()
    {
        $this->submitForm("form", ['action' => 'Register']);
    }
    /**
     * @When I enter :arg1 in the firstName box
     */
    public function iEnterInTheFirstNameBox($arg1)
    {
        $this->fillField('first_name',$arg1);
    }

   
    /**
     * @When I enter :arg1 in the age box
     */
    public function iEnterInTheAgeBox($arg1)
    {
        $this->fillField('age',$arg1);
    }
    /**
     * @When I click Modify my profile
     */
    public function iClickModifyMyProfile()
    {
        $this->click('.nav-link[href="/ClientProfile/edit_profile"]');

     }
    

   /**
    * @When I Click Save Changes
    */
    public function iClickSaveChanges()
    {
        $this->submitForm("form", ['action' => 'Save Changes']);
    }
}
