Feature: User Login

   In order to access their account,
   As a registered user,
   I want to be able to log in.

  Scenario: Registered user wants to log in
    Given a registered user wants to log in
    When they provide their email "user@gmail.com" and password "password123"
    And they click on the login button
    Then they should be redirected to the client profile creation page

  Scenario: User provides incorrect credentials
    Given a registered user wants to log in
    When they provide incorrect email "invalid@example.com" or password "invalidpassword"
    And they click on the login button
    Then they should stay on the login page
    And they should see an error message indicating invalid credentials

