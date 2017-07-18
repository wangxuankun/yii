<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Tests\Command;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Console\Command\HelpCommand;
use Symfony\Component\Console\Command\ListCommand;
use Symfony\Component\Console\Application;

class HelpCommandTest extends TestCase
{
    public function testExecuteForCommandAlias()
    {
        $command = new HelpCommand();
        $command->setApplication(new Application());
        $commandTester = new CommandTester($command);
        $commandTester->execute(array('command_name' => 'li'), array('decorated' => false));
<<<<<<< HEAD
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text helper for the given command alias');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text helper for the given command alias');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text helper for the given command alias');
=======
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text help for the given command alias');
>>>>>>> origin/master
    }

    public function testExecuteForCommand()
    {
        $command = new HelpCommand();
        $commandTester = new CommandTester($command);
        $command->setCommand(new ListCommand());
        $commandTester->execute(array(), array('decorated' => false));
<<<<<<< HEAD
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
=======
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
>>>>>>> origin/master
    }

    public function testExecuteForCommandWithXmlOption()
    {
        $command = new HelpCommand();
        $commandTester = new CommandTester($command);
        $command->setCommand(new ListCommand());
        $commandTester->execute(array('--format' => 'xml'));
<<<<<<< HEAD
        $this->assertContains('<command', $commandTester->getDisplay(), '->execute() returns an XML helper text if --xml is passed');
=======
        $this->assertContains('<command', $commandTester->getDisplay(), '->execute() returns an XML help text if --xml is passed');
>>>>>>> origin/master
    }

    public function testExecuteForApplicationCommand()
    {
        $application = new Application();
<<<<<<< HEAD
        $commandTester = new CommandTester($application->get('helper'));
        $commandTester->execute(array('command_name' => 'list'));
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
=======
        $commandTester = new CommandTester($application->get('help'));
        $commandTester->execute(array('command_name' => 'list'));
        $this->assertContains('list [options] [--] [<namespace>]', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
        $this->assertContains('format=FORMAT', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
        $this->assertContains('raw', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
>>>>>>> origin/master
    }

    public function testExecuteForApplicationCommandWithXmlOption()
    {
        $application = new Application();
<<<<<<< HEAD
        $commandTester = new CommandTester($application->get('helper'));
        $commandTester->execute(array('command_name' => 'list', '--format' => 'xml'));
        $this->assertContains('list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]', $commandTester->getDisplay(), '->execute() returns a text helper for the given command');
        $this->assertContains('<command', $commandTester->getDisplay(), '->execute() returns an XML helper text if --format=xml is passed');
=======
        $commandTester = new CommandTester($application->get('help'));
        $commandTester->execute(array('command_name' => 'list', '--format' => 'xml'));
        $this->assertContains('list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]', $commandTester->getDisplay(), '->execute() returns a text help for the given command');
        $this->assertContains('<command', $commandTester->getDisplay(), '->execute() returns an XML help text if --format=xml is passed');
>>>>>>> origin/master
    }
}
