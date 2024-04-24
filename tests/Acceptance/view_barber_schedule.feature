Feature: Barber Availability Viewing

   In order to schedule an appointment with a preferred barber,
   As a client,
   I want to be able to view the availability schedule of that barber.

  Scenario: User wants to view the availability of a barber
    Given a client wants to view the availability of a barber
    When they press the "View Schedule" link
    Then they should be redirected to the Barber's availability schedule page





