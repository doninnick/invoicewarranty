<?php
/**
 * Donin
 *
 * @category Donin
 * @package Donin_Invoice
 */
namespace Donin\Invoice\Block\Pdf\Item;

use Magento\Framework\View\Element\Template;
use Vianetz\AdvancedInvoiceLayout\Block\Pdf\Item\Invoice as ItemInvoice;

/**
 * Class Invoice
 * @package Donin\Invoice\Block\Pdf\Item
 */
class Invoice extends ItemInvoice
{
    /**
     * Init template depending on the chosen theme.
     */
    protected function _construct()
    {
        $this->setTemplate($this->_getTemplateFilePath('item' . DIRECTORY_SEPARATOR . 'invoice.phtml'));
        Template::_construct();
    }

    /**
     * Get Template File Path
     *
     * @param string $templateFilePath
     * @return string
     */
    protected function _getTemplateFilePath($templateFilePath)
    {
        return 'Donin_Invoice::' . $this->getThemeName() . DIRECTORY_SEPARATOR . $templateFilePath;
    }
}
