<?php

use Behat\Behat\Context\Context;
use Behat\Mink\Mink;
use Behat\Mink\Session;
use Behat\Mink\Driver\GoutteDriver;
use Behat\Gherkin\Node\TableNode;
use Knp\FriendlyContexts\Context\RawMinkContext;
use Doctrine\ORM\EntityManagerInterface;
use Acme\UserBundle\Entity\User;

class FeatureContext extends RawMinkContext
{

    private $globalSession;

    /**
     * @Given i am logged in
     */
    public function iAmLoggedIn()
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getEntityManager();
        $users = $em->getRepository(User::class);
        var_dump($users);

        $driver = new GoutteDriver();

        $session = new Session($driver);
        $session->start();
        $session->visit('http://localhost:8000/login');

        $page =  $session->getPage();

        $logininput = $page->find('css','#username');
        $logininput->setValue("dylan");

        $passwordinput = $page->find('css', '#password');
        $passwordinput->setValue("1234");

        $formsubmit = $page->find('css', '#submit');
        $formsubmit->submit();

        $this->setGlobalSession($session);
    }

    /**
     * @Given i am on the page :url
     */
    public function iAmOnTheUrlPage($url)
    {
        $driver = new GoutteDriver();

        $session = new Session($driver);
        $session->start();
        $session->visit('http://localhost:8000' . $url);

        $this->setGlobalSession($session);
    }

    /**
     * @When i navigate to :url
     */
    public function iNavigateToUrl($url)
    {
        $session = $this->getGlobalSession();
        $session->visit('http://localhost:8000' . $url);

        $this->setGlobalSession($session);
    }

    /**
     * @When i log in
     */
    public function iLogIn()
    {
        $session = $this->getGlobalSession();
        $session->visit('http://localhost:8000/login');

        $page =  $session->getPage();

        $logininput = $page->find('css','#username');
        $logininput->setValue("dylan");

        $passwordinput = $page->find('css', '#password');
        $passwordinput->setValue("1234");

        $formsubmit = $page->find('css', '#submit');
        $formsubmit->submit();

        $this->setGlobalSession($session);
    }

    /**
     * @When i log in with :username & :password
     */
    public function iLogInWith($username, $password)
    {
        $session = $this->getGlobalSession();
        $session->visit('http://localhost:8000/login');

        $page =  $session->getPage();

        $logininput = $page->find('css','#username');
        $logininput->setValue($username);

        $passwordinput = $page->find('css', '#password');
        $passwordinput->setValue($password);

        $formsubmit = $page->find('css', '#submit');
        $formsubmit->submit();

        $this->setGlobalSession($session);
    }

    /**
     * @When i press the button with id :id
     */
    public function iPressTheButtonWithId($id)
    {
        $session = $this->getGlobalSession();

        $page =  $session->getPage();

        $formsubmit = $page->find('css', $id);
        $formsubmit->submit();

        $this->setGlobalSession($session);
    }

    /**
     * Fills in form fields with provided table
     * Example: When I fill in the following"
     *              | username | bruceWayne |
     *              | password | iLoveBats123 |
     * Example: And I fill in the following"
     *              | username | bruceWayne |
     *              | password | iLoveBats123 |
     *
     * @When /^(?:|I )fill in the following:$/
     */
    public function fillFields(TableNode $fields)
    {
        foreach ($fields->getRowsHash() as $field => $value) {
            $this->fillField($field, $value);
        }
    }

    /**
     * Fills in form field with specified id|name|label|value
     * Example: When I fill in "username" with: "bwayne"
     * Example: And I fill in "bwayne" for "username"
     *
     * @When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with "(?P<value>(?:[^"]|\\")*)"$/
     * @When /^(?:|I )fill in "(?P<field>(?:[^"]|\\")*)" with:$/
     * @When /^(?:|I )fill in "(?P<value>(?:[^"]|\\")*)" for "(?P<field>(?:[^"]|\\")*)"$/
     */
    public function fillField($field, $value)
    {
        $field = $this->fixStepArgument($field);
        $value = $this->fixStepArgument($value);
        $this->getGlobalsession()->getPage()->fillField($field, $value);
    }

    /**
     * Returns fixed step argument (with \\" replaced back to ")
     *
     * @param string $argument
     *
     * @return string
     */
    private function fixStepArgument($argument)
    {
        return str_replace('\\"', '"', $argument);
    }

    /**
     * @Then i should see the text :text
     */
    public function iShouldSeeText($text)
    {
        $session = $this->getGlobalSession();

        $page = $session->getPage();
        if($page->hasContent($text) === FALSE) {
            throw new \RuntimeException(sprintf("the text %s was not found on the page", $text));
        }
    }

    /**
     * @Then i should be on :url
     */
    public function iShouldBeOnUrl($url)
    {
        $session = $this->getGlobalSession();

        $currentUrl = str_replace('http://localhost:8000', '', $session->getCurrentUrl());
        if($currentUrl !== $url) {
            throw new \RuntimeException(sprintf("you are on the page %s , not %s", $currentUrl, $url));
        }
    }

    /**
     * @Then i should recieve a :response response
     */
    public function iShouldRecieveAResponse($response)
    {
        $session = $this->getGlobalSession();
        $contentType = $session->getResponseHeaders()['Content-Type'][0];

        $contentTypeBool = strpos($contentType, $response);

        if($contentTypeBool === FALSE) {
            throw new \RuntimeException(sprintf("you recieve a %s response, not a %s response", $contentType, $response));
        }
    }

    /**
     * @return mixed
     */
    public function getGlobalSession()
    {
        return $this->globalSession;
    }

    /**
     * @param mixed $globalSession
     */
    public function setGlobalSession($globalSession)
    {
        $this->globalSession = $globalSession;
    }
}
