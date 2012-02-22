Feature: Customize Home screen
  In order to be usable
  The users
  Should be able to customize their home screen

Scenario: Remove an item
  Given I have no previous preferences
  And I am on the home page
  Then I should see the home page
  And I note the name of menu item number 3, let's call it "third_item"
  Then I click the "Customize Home Screen" link
  And the "Home Screen Customization" page loads
  Then I uncheck so-called "third_item"
  And I click the "Go Back To Home" link
  Then I should see the home page
  And I should not see the so-called "third_item" menu item

Scenario: Move items
  Given I have no previous preferences
  And I am on the home page
  Then I should see the home page
  And I note the name of menu item number 1, let's call it "first_item"
  And I note the name of menu item number 2, let's call it "second_item"
  And I note the name of menu item number 3, let's call it "third_item"
  Then I click the "Customize Home Screen" link
  And the "Home Screen Customization" page loads
  Then I click "Down" for so-called "first_item"
  And I click "Up" for so-called "third_item"
  And I click the "Go Back To Home" link
  Then I should see the home page
  And I should see that menu item number 1 is so-called "second_item"
  And I should see that menu item number 2 is so-called "third_item"
  And I should see that menu item number 3 is so-called "first_item"