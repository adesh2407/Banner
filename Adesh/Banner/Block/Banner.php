<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Adesh\Banner\Block;

use Magento\Customer\Model\Session as CustomerSession;
use Adesh\Banner\Model\ResourceModel\Banner\Collection;
use Magento\Framework\View\Element\Template\Context;


class Banner extends \Magento\Framework\View\Element\Template
{
    private Collection $collection;

    public function __construct(
        Context    $context,
        Collection $collection
    )
    {
        parent::__construct($context);
        $this->collection = $collection;

    }

    public function getTitle()
    {
        return "Banner";
    }

    /**
     * @return string|void
     * @throws \Exception
     */
    public function getBanner()
    {
        $currentDate = new \DateTime();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        if ($customerSession->isLoggedIn()) {
            $customerData = new \DateTime($customerSession->getCustomer()->getDob());
            $age = (array)($currentDate->diff($customerData));
            $age = $age['y'];
            $ageGroup = $this->ageGroup($age);
            $data = $this->collection->addFieldToFilter('age_group', $ageGroup)
                ->getFirstItem();
            if ($data->getData()) {
                return "<img src='" . $data->getImage() . "'>";
            } else {
                return;
            }
        }
    }

    public function ageGroup($age)
    {
        if ($age < 18) {
            return 0;
        } elseif (18 < $age && $age < 25) {
            return 1;
        } else {
            return 2;
        }
    }
}
