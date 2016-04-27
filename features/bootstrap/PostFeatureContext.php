<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;

class PostFeatureContext extends FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @When I fill in the blog title with :arg1
     */
    public function iFillInTheBlogTitleWith($arg1)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When I fill in the blogs content with :arg1
     */
    public function iFillInTheBlogsContentWith($arg1)
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
