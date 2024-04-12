Feature: Rescheduling an appointment
  In order to change my appointment to a more suitable time,
  As a client,
  I need to be able to reschedule my appointments up to 48 hours before the scheduled time.

  Scenario: I want to change my appointment time from 14:00 to 16:00
    Given I am on "/Appointment/index"
    And I see my appointment "5/4/2024 14:00"
    When I edit to "5/4/2024 16:00" 
    Then I see my updated appointment"5/4/2024 16:00"

