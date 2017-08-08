<?php
namespace airmoi\FileMaker\Command;

use airmoi\FileMaker\FileMaker;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-09-09 at 20:40:04.
 */
class FindAnyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FileMaker
     */
    protected $fm;

    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $fm = new FileMaker($GLOBALS['DB_FILE'], $GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']);
        $fm->newPerformScriptCommand('sample', 'create sample data', 10)->execute();
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->fm = new FileMaker($GLOBALS['DB_FILE'], $GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \airmoi\FileMaker\Command\FindAny::execute
     * @todo   Implement testExecute().
     */
    public function testExecute()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
