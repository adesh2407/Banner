<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Adesh\Banner\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BannerRepositoryInterface
{

    /**
     * Save Banner
     * @param \Adesh\Banner\Api\Data\BannerInterface $banner
     * @return \Adesh\Banner\Api\Data\BannerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Adesh\Banner\Api\Data\BannerInterface $banner
    );

    /**
     * Retrieve Banner
     * @param string $bannerId
     * @return \Adesh\Banner\Api\Data\BannerInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($bannerId);

    /**
     * Retrieve Banner matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Adesh\Banner\Api\Data\BannerSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Banner
     * @param \Adesh\Banner\Api\Data\BannerInterface $banner
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Adesh\Banner\Api\Data\BannerInterface $banner
    );

    /**
     * Delete Banner by ID
     * @param string $bannerId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($bannerId);
}

