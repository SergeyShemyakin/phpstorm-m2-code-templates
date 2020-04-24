#set( $FILE_NAME = "Collection" )
<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class ${NAME} extends AbstractCollection 
{
    protected function _construct() 
    {
        ${DS}this->_init(, \\${NAMESPACE}::class);
    }
}
