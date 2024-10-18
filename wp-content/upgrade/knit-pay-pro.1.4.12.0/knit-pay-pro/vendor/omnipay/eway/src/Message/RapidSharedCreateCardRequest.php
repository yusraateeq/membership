<?php
/**
 * eWAY Rapid Shared Page Create Card Request
 */

namespace Omnipay\Eway\Message;

/**
 * eWAY Rapid Shared Page Create Card Request
 *
 * Creates a payment URL using eWAY's Responsive Shared Page
 *
 * @link https://eway.io/api-v3/#responsive-shared-page
 */
class RapidSharedCreateCardRequest extends RapidSharedPurchaseRequest
{
    protected $action;

    /**
     * @return string|NULL
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    public function getData()
    {
        $this->validate('returnUrl');

        $data = $this->getBaseData();

        $data['TransactionType'] = 'Purchase';
        $data['RedirectUrl'] = $this->getReturnUrl();

        // Shared page parameters (optional)
        $data['CancelUrl'] = $this->getCancelUrl();
        $data['LogoUrl'] = $this->getLogoUrl();
        $data['HeaderText'] = $this->getHeaderText();
        $data['Language'] = $this->getLanguage();
        $data['CustomerReadOnly'] = $this->getCustomerReadOnly();
        $data['CustomView'] = $this->getCustomView();

        $data['Payment'] = array();

        if ($this->getAction() === 'Purchase') {
            $data['Payment']['TotalAmount'] = (int) $this->getAmountInteger();
            $data['Payment']['InvoiceNumber'] = $this->getTransactionId();
            $data['Payment']['InvoiceDescription'] = $this->getDescription();
            $data['Payment']['CurrencyCode'] = $this->getCurrency();
            $data['Payment']['InvoiceReference'] = $this->getInvoiceReference();
            $data['Method'] = 'TokenPayment';
        } else {
            $data['Method'] = 'CreateTokenCustomer';
            $data['Payment']['TotalAmount'] = 0;
        }

        return $data;
    }
}
