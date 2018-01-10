@reset-schema @alice(Minimal)
Feature: Url verification
  In order to verify that logged in users can access secured pages
  Scenario: I navigate to a secure url when logged in
    Given i am logged in
    When i navigate to "/posts/b"
    And i navigate to "/wot"
    Then i should see the text "This is a page where u can post any text you want."

  Scenario: I navigate to all posts when logged in
    Given i am logged in
    When i navigate to "/posts/b"
    Then i should see the text "Welcome to Random"

  Scenario: I navigate to a page that is only accessable by logged in users
    Given i am on the page "/posts/b"
    Then i should be on "/"

  Scenario: I navigate to the page that exports the csv
    Given i am on the page "/"
    When i navigate to "/posts/report/allposts.csv"
    Then i should be on "/"
    When i log in
    And i navigate to "/posts/report/allposts.csv"
    Then i should recieve a "csv" response

  Scenario: I navigate to a page that doesn't exist
    Given i am on the page "/"
    When i navigate to "/kekekeekmekek"
    Then i should see the text Error

  Scenario: I register a new User
    Given i am on the page "/register"
    When I fill in the following:
      | register_form_username             | KekBoiii            |
      | register_form_email                | KekBoiii@gmail.com  |
      | register_form_plainPassword_first  | Kek1                |
      | register_form_plainPassword_second | Kek1                |
    And i press the button with id "#submitRegistration"
    Then i should be on "/login"
