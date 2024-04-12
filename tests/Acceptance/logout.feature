Feature: User Logout

  In order to secure their account and maintain privacy,
  As a logged-in user,
  I want to be able to log out of my account.

  Scenario: Logged-in user wants to log out
    Given a logged-in user wants to log out
    When they click on the logout button
    Then they should be logged out of their account

