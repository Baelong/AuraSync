Feature: ClientLogin
  In order to Login
  As a Client
  I need to enter my email and password to then get redirected to Client dashboard page

  Scenario: try ClientLogin "ali"
    Given I am on "http://localhost/Client/login" 
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"

   Scenario: try ClientLogin "kami"
    Given I am on "http://localhost/Client/login" 
    When I enter "kami" in the email box
    And I enter "123" in the password box
    And Click Login 
    Then I am on "http://localhost/Client/securePlace"
