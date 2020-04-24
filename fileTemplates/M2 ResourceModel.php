<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ${NAME} extends AbstractDb 
{
    protected function _construct() 
    {
        ${DS}this->_init('$TABLE', '$COLUMNID');
    }
}
