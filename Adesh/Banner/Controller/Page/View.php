<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Adesh\Banner\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class View extends Action
{
    /**
     * @var JsonFactory
     */
    private  $resultJsonFactory;
    /**
     * @var PageFactory
     */
    private  $_resultPageFactory;

    /**
     * @param Context $context
     * @param JsonFactory $resultJsonFactory
     */
    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * View  page action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $resultPage = $this->_resultPageFactory->create();

        $block = $resultPage->getLayout()
            ->createBlock('Adesh\Banner\Block\Banner')
            ->setTemplate('Adesh_Banner::data.phtml')
            ->toHtml();

        $result->setData(['output' => $block]);
        return $result;
    }
}
