Feature: ChooseUser
  In order to Choose the type.
  As a user
  I need to click either Client or Barber

  Scenario: try ChooseUser "Client"
    Given I am on "http://localhost/Authentication/index" 
    When I click Client
    Then I am on "http://localhost/Client/login"

  Scenario: try ChooseUser "Barber"
    Given I am on "http://localhost/Authentication/index"
    When I click Barber                   
    Then I am on "http://localhost/Barber/login"
