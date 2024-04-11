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
         $this->amOnPage($url); //make the browser go on a URL 
     }
      /**
     * @When I click :arg1 and :arg2
     */
     /**
     * @When I click :arg1
     */
      /**
     * @When I click the date link
     */
    public function iClickTheDateLink()
    {
        $this->click('.date-link');
    }

   /**
    * @Then I see :arg1
    */
    public function iSee($arg1)
    {
        $this->see($arg1);
    }



}

