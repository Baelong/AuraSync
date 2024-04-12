Feature: User Registration

  In order to join the platform
  As a new user
  I want to create a new account

  Scenario: New user wants to create a new account
    Given a new user wants to register
    When they provide their email "user@example.com" and password "password123"
    And they submit the registration form
    Then they should be successfully registered

