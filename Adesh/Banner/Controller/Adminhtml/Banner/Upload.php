<?php
/**
 * Adesh_Banner
 *
 * PHP version 7.x
 *
 * @category  PHP
 * @package   Adesh\Banner
 * @copyright 2020 Copyright (c)
 **/
declare(strict_types=1);

namespace Adesh\Banner\Controller\Adminhtml\Banner;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Catalog\Model\ImageUploader;

class Upload extends \Magento\Backend\App\Action
{
    /**
     * @param \Magento\Catalog\Model\ImageUploader
     */
    private $imageUploader;

    /**
     * @var string[]
     */
    private $allowedImageExtensions;

    /**
     * @var string[]
     */
    private $allowedVideoExtensions;

    const IMAGE_TYPE = 'image';

    /**
     * Upload constructor.
     * @param Context $context
     * @param ImageUploader $imageUploader
     * @param $allowedImageExtensions
     * @param $allowedVideoExtensions
     */
    public function __construct(
        Context $context,
        ImageUploader $imageUploader,
        $allowedImageExtensions,
        $allowedVideoExtensions
    ) {
        $this->imageUploader = $imageUploader;
        $this->allowedImageExtensions = $allowedImageExtensions;
        $this->allowedVideoExtensions = $allowedVideoExtensions;
        return parent::__construct($context);
    }

    /**
     * @return string[]
     */
    public function getAllowedImageExtensions()
    {
        return $this->allowedImageExtensions;
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $file = $this->getRequest()->getFiles('image');
        try {
            $result = $this->imageUploader->saveFileToTmpDir($file);
        } catch (\Exception $e) {
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}
