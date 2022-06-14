<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Adesh\Banner\Api\Data;

interface BannerInterface
{

    const AGE_GROUP = 'age_group';
    const ENTITY_ID = 'entity_id';
    const BANNER_NAME = 'banner_name';
    const IMAGE = 'image';

    /**
     * Get entity_id
     * @return string|null
     */
    public function getBannerId();

    /**
     * Set entity_id
     * @param string $bannerId
     * @return \Adesh\Banner\Banner\Api\Data\BannerInterface
     */
    public function setBannerId($bannerId);

    /**
     * Get banner_name
     * @return string|null
     */
    public function getBannerName();

    /**
     * Set banner_name
     * @param string $bannerName
     * @return \Adesh\Banner\Banner\Api\Data\BannerInterface
     */
    public function setBannerName($bannerName);

    /**
     * Get age_group
     * @return string|null
     */
    public function getAgeGroup();

    /**
     * Set age_group
     * @param string $ageGroup
     * @return \Adesh\Banner\Banner\Api\Data\BannerInterface
     */
    public function setAgeGroup($ageGroup);

    /**
     * Get image
     * @return string|null
     */
    public function getImage();

    /**
     * Set image
     * @param string $image
     * @return \Adesh\Banner\Banner\Api\Data\BannerInterface
     */
    public function setImage($image);
}

