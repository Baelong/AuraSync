Feature: Viewing appointments
  In order to easily access information about my appointments,
  As a client,
  I need to be able to view my appointments with details such as the service provider, service, date and time, address, and price.

  Scenario: View the past appointments: 2/2/2024 at 14:00 , 1/10/2024 at 17:00
    Given I am on "/Client/AllAppointments"
    Then I see "2/2/2024 14:00"
    And I see "1/10/2024 17:00"

