Feature: Canceling an appointment
  In order to avoid inconveniencing my service provider,
  As a client, 
  I need to be able to cancel my appointments up to 48 hours before the scheduled time.

  Scenario: Canceling an appointment that is 5/4/2024 at 14:00
    Given I am on "/Appointment/index"
    And I see "5/4/2024 14:00"
    When I clickCancel
    Then I don't see "5/4/2024 14:00"

