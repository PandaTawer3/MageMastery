<?php

namespace MageMastery\Todo\Model\ResourceModel\Task;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MageMastery\Todo\Model\Task as ModelTask;
use MageMastery\Todo\Model\ResourceModel\Task as ResourceTask;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(ModelTask::class, ResourceTask::class);
    }
}