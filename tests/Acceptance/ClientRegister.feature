Feature: ClientRegister
  In order to Register
  As a Client
  I need to enter my email and password to then get redirected to Client Login page

  Scenario: try ClientRegister "Hammad"
    Given I am on "http://localhost/Client/register" 
    When I enter "Hammad" in the email box
    And I enter "12345" in the password box
    And Click Register
    Then I am on "http://localhost/Client/login"

   Scenario: try ClientRegister "Javad"
    Given I am on "http://localhost/Client/register" 
    When I enter "Javad" in the email box
    And I enter "javad" in the password box
    And Click Register
    Then I am on "http://localhost/Client/login"