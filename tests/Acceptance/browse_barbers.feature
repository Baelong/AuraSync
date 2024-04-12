Feature: Barber Browsing

  In order to find a suitable barber for their needs,
  As a client,
  I want to be able to browse through available barbers.

  Scenario: User wants to browse barbers
    Given a client wants to browse barbers
    When they access the list of available barbers
    Then they should be able to view a list of barbers

