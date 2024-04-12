Feature: Paying for a service through the platform

  In order to pay for a service conveniently and hassle-free,
  As a client,
  I need to be able to pay for a service through the platform at the end of the booking process.

  Scenario: Clicking book and paying for service
    Given I am on "/Client/Pay"
	When I click pay
    Then I see "Congrats you have booked an appointment";

