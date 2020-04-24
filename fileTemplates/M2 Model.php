<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Magento\Framework\Model\AbstractModel;

class ${NAME} extends AbstractModel 
{
    #if (${NAMESPACE})
    protected function _construct()
    {
        ${DS}this->_init(\\${NAMESPACE}\ResourceModel\\${NAME}::class);
    }
    #end
}
