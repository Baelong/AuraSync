Feature: ClientViewAppointments
  In order to view all my appointments
  As a client
  I need to click on My Appointments in my navigation bar

  Scenario: try ClientViewAppointments
    Given I am on "http://localhost/Client/login" 
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"
    And I click My Appointments
    Then I am on "http://localhost/Appointment/clientAppointments"