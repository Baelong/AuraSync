Feature: Profile Update

  In order to keep their profile information accurate,
  As a user,
  I want to be able to update my profile.

  Scenario: User wants to update their profile
    Given a client wants to update their profile
    When they modify their profile information, changing their name to "Jane Smith" and updating their age to "35"
    And they submit the profile update form
    Then their profile should be successfully updated

