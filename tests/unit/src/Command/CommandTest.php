<?php
namespace airmoi\FileMaker\Command;

use airmoi\FileMaker\FileMaker;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-09-09 at 19:46:49.
 */
class CommandTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Command
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $fm = new FileMaker($GLOBALS['DB_FILE'], $GLOBALS['DB_HOST'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD']);
        $this->object = new Command($fm, 'sample');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setResultLayout
     * @todo   Implement testSetResultLayout().
     */
    public function testSetResultLayout()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setScript
     * @todo   Implement testSetScript().
     */
    public function testSetScript()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setPreCommandScript
     * @todo   Implement testSetPreCommandScript().
     */
    public function testSetPreCommandScript()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setPreSortScript
     * @todo   Implement testSetPreSortScript().
     */
    public function testSetPreSortScript()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setRecordClass
     * @todo   Implement testSetRecordClass().
     */
    public function testSetRecordClass()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::validate
     * @todo   Implement testValidate().
     */
    public function testValidate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::execute
     * @todo   Implement testExecute().
     */
    public function testExecute()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setRecordId
     * @todo   Implement testSetRecordId().
     */
    public function testSetRecordId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers \airmoi\FileMaker\Command\Command::setGlobal
     * @todo   Implement testSetGlobal().
     */
    public function testSetGlobal()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
