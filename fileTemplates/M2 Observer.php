<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

class ${NAME} implements ObserverInterface
{

    public function execute(EventObserver ${DS}observer)
    {
        
    }
    
}
