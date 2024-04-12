Feature: Receiving a message from my barber
  In order to get feedback from my barber,
  As a client,
  I need to be able to receive messages through the platform's messaging system.

  Scenario: Receiving "35$" from my barber
    Given I am on "Client/ReceiveMessage"
    When I receive "35$"
    Then I see "35$" in the messaging system

