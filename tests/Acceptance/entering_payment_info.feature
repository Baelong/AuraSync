Feature: Entering online payment information

  In order to secure my booking slot,
  As a client,
  I need to enter my online payment information during the booking process with a service provider.

  Scenario: Entering card information for payment
    Given I am on "Client/paymentInfo"
    When I enter Card Number "4356-5463-6454-3536" in the cardNumber box
    And I enter Security Code "907" in the securityCode box
    And I enter Expiry Date "09/24" in the expiryDate box
    Then assert Saved Payment Info"4356-5463-6454-3536", "907", "09/24"

