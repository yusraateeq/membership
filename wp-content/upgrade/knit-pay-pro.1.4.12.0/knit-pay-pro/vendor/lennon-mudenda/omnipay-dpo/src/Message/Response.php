<?php

namespace Omnipay\DPO\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\ResponseInterface;


class Response extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful(): bool
    {
        return isset($this->data['success']) && $this->data['success'];
    }

    public function getTransactionReference()
    {
        return $this->data['reference'] ?? null;
    }

    public function getTransactionId()
    {
        return $this->data['token'] ?? null;
    }

    public function getMessage()
    {
        return $this->data['message'] ?? null;
    }

	public function getMetadata()
	{
		return $this->data['metadata'] ?? null;
	}

	public function getTransactionPaymentLink(): ?string
	{
		if (!$this->getTransactionId()) return null;

		return $this->data['payURL'] . "?ID=" . $this->getTransactionId();
	}

	public function isRedirect(): bool
	{
		return $this->data['redirect'] ?? false;
	}

	public function getRedirectUrl(): ?string
	{
		return $this->getTransactionPaymentLink();
	}
}