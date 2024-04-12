Feature: SelectDateAndTime


  In order to schedule appointments at their convenience,
  As a client, 
  I need to select a date and time for my appointment with a chosen barber from their available slots.


  Scenario: Selecting the 25th april 2024
	Given I am on "Appointment/Chose_date_and_time"
	When I click the date link
	Then I see "25 april 2024" 
	And I see "14:00"
