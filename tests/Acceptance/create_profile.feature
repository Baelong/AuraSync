Feature: Profile Creation

  In order to establish a presence on the platform,
  As a user,
  I want to create a profile.

  Scenario: User wants to create a profile
    Given a client wants to create a profile
    When they provide their name "John Doe", age "30", and other relevant information
    And they submit the profile creation form
    Then their profile should be successfully created

