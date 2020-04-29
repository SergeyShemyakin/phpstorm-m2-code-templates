<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ${NAME} extends \Symfony\Component\Console\Command\Command
{
    
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        ${DS}this->setName('$COMMAND_NAME');
        ${DS}this->setDescription('$COMMAND_DESCRIPTION');

        parent::configure();
    }
    
    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface ${DS}input, OutputInterface ${DS}output)
    {
        
    }
    
}
