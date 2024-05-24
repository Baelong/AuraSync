Feature: ClientEditProfile
  In order to modify my profile
  As a Client
  I need to modify the info i want and click save

  Scenario: try ClientEditProfile "firstName"
    Given I am on "http://localhost/Client/login" 
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"
    And I click Modify my profile
    Then I am on "http://localhost/ClientProfile/edit_profile"
    And I enter "LALALLA" in the firstName box
    And I Click Save Changes
    Then I am on "http://localhost/ClientProfile/index"


   Scenario: try ClientEditProfile "age"
    Given I am on "http://localhost/Client/login" 
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"
    And I click Modify my profile
    Then I am on "http://localhost/ClientProfile/edit_profile"
    And I enter "54" in the age box
    And I Click Save Changes
    Then I am on "http://localhost/ClientProfile/index"