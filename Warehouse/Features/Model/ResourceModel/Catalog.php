<?php
namespace Warehouse\Features\Model\ResourceModel;

class Catalog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('catalog_product_entity', 'entity_id');
    }
}
