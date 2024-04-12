Feature: Sending a message to my barber
  In order to ask questions to my barber,
  As a client,
  I need to be able to send messages through the platform's messaging system.

  Scenario: Sending a "how much is it" to my barber Alan
    Given I am on "Client/SendMessage"
    When I send "how much is it" to "Alan"
    Then I see my sent message "how much is it" in the messaging system

