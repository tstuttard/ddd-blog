Feature:
  As Developer
  I want to make sure behat is working
  So that I can write features

  Scenario: Root Test
    When I am on the homepage
    Then I should see "Laravel 5"
