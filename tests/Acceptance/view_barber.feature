Feature: Barber Details Viewing

  In order to make an informed decision about which barber to choose,
  As a client,
  I want to be able to view detailed information about specific barbers.

  Scenario: User wants to view details of a specific barber
    Given a client wants to view details of a specific barber
    When they select a barber from the list
    Then they should be able to view detailed information about the barber, including services, pricing, and availability.

