Feature: ClientViewAppointmentsDetails
  In order to view drtails of my appointment
  As a client
  I need to click the view details button

  Scenario: try ClientViewAppointmentsDetails
    Given I am on "http://localhost/Client/login" 
    When I enter "ali" in the email box
    And I enter "123" in the password box
    And Click Login
    Then I am on "http://localhost/Client/securePlace"
    And I click My Appointments
    Then I am on "http://localhost/Appointment/clientAppointments"
    And I click viewDetails "1" 
    Then I am on "http://localhost/Appointment/index"