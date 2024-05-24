Feature: RescheduleAppointment
  In order to manage my appointments
  As a client
  I need to reschedule an appointment

  Scenario: try RescheduleAppointment
    Given I am on "http://localhost/Client/login"
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"
    And I click My Appointments
    Then I am on "http://localhost/Appointment/clientAppointments"
    And I click viewDetails "2"
    And I am on "http://localhost/Appointment/index"