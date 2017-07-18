<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('namespace:name')
            ->setAliases(array('name'))
            ->setDescription('description')
<<<<<<< HEAD
            ->setHelp('helper')
=======
            ->setHelp('help')
>>>>>>> origin/master
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('execute called');
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('interact called');
    }
}
