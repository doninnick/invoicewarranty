<?php
/**
 * Donin
 *
 * @category Donin
 * @package Donin_Invoice
 */
namespace Donin\Invoice\Block\Order\Email\Items;

use Magento\Framework\View\Element\Template\Context;
use Magento\Sales\Block\Order\Email\Items\DefaultItems as EmailDefaultItems;
use Magento\Catalog\Api\ProductRepositoryInterface;

/**
 * Class DefaultItems
 * @package Donin\Invoice\Block\Order\Email\Items
 */
class DefaultItems extends EmailDefaultItems
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * DefaultItems constructor.
     * @param Context $context
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository
    ) {
        $this->productRepository = $productRepository;
        parent::__construct(
            $context
        );
    }

    public function getProduct($sku)
    {
        return $this->productRepository->get($sku);
    }

    /**
     * Get Warranty
     *
     * @param $item
     * @return mixed
     */
    public function getWarranty($item)
    {
        $product = $this->getProduct($item->getSku());
        $warranty = $product->getAttributeText('warranty');
        return $warranty;
    }
}
