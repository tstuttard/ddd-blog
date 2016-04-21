Feature:
  As an author
  I want to be able to create a published blog post
  so that it can be viewed online

  Scenario: Successful Published Post Creation
    Given I am on "post/create"
    When I fill in the blog title with "My First Post"
    And I fill in the blogs content with "The content of my first blog post"
    And I check "publish"
    And I click save
    Then I should see "My First Post has been published"

  Scenario: Unsuccessful Post Creation
    Given I am on "post/create"
    When I check "publish"
    And I click save
    Then I should see "A post needs a title before it can be published"
    And I should see "A post needs content before it can be published"




