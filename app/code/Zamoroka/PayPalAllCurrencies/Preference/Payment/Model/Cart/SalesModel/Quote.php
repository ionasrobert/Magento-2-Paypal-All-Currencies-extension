<?php

namespace Zamoroka\PayPalAllCurrencies\Preference\Payment\Model\Cart\SalesModel;

/**
 * Wrapper for \Magento\Quote\Model\Quote sales model
 */
class Quote extends \Magento\Payment\Model\Cart\SalesModel\Quote implements SalesModelInterface
{
    /**
     * @return float
     */
    public function getPaypalSubtotal()
    {
        return $this->_salesModel->getPaypalSubtotal();
    }

    /**
     * @return float
     */
    public function getPaypalGrandTotal()
    {
        return $this->_salesModel->getPaypalGrandTotal();
    }

    /**
     * @return float
     */
    public function getPaypalShippingAmount()
    {
        return $this->_salesModel->getPaypalShippingAmount();
    }

    /**
     * @return float
     */
    public function getPaypalDiscountAmount()
    {
        return $this->_salesModel->getPaypalDiscountAmount();
    }

    /**
     * @return float
     */
    public function getPaypalTaxAmount()
    {
        return $this->_salesModel->getPaypalTaxAmount();
    }

    /**
     * @return float
     */
    public function getPaypalRate()
    {
        return $this->_salesModel->getPaypalRate();
    }

    /**
     * @return string
     */
    public function getPaypalCurrencyCode()
    {
        return $this->_salesModel->getPaypalCurrencyCode();
    }
}