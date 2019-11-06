<?php

namespace Zone\AdvancedSortby\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{

	protected $helperData;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Zone\AdvancedSortby\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.

		echo $this->helperData->getGeneralConfig('enable');
		exit();

	}
}