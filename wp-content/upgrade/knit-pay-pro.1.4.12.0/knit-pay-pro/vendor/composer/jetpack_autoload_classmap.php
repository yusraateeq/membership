<?php

// This file `jetpack_autoload_classmap.php` was auto generated by automattic/jetpack-autoloader.

$vendorDir = dirname(__DIR__);
$baseDir   = dirname($vendorDir);

return array(
	'Autoloader' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-autoloader.php'
	),
	'Autoloader_Handler' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-autoloader-handler.php'
	),
	'Autoloader_Locator' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-autoloader-locator.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php'
	),
	'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php'
	),
	'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/ManifestGenerator.php'
	),
	'Container' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-container.php'
	),
	'Dpo\\Common\\Dpo' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/dpo/dpo-pay-common/src/Dpo.php'
	),
	'Hook_Manager' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-hook-manager.php'
	),
	'Latest_Autoloader_Guard' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-latest-autoloader-guard.php'
	),
	'Manifest_Reader' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-manifest-reader.php'
	),
	'Omnipay\\Ameria\\Gateway' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Gateway.php'
	),
	'Omnipay\\Ameria\\Message\\AbstractRequest' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Message/AbstractRequest.php'
	),
	'Omnipay\\Ameria\\Message\\GetOrderStatusRequest' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Message/GetOrderStatusRequest.php'
	),
	'Omnipay\\Ameria\\Message\\RefundRequest' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Message/RefundRequest.php'
	),
	'Omnipay\\Ameria\\Message\\RegisterRequest' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Message/RegisterRequest.php'
	),
	'Omnipay\\Ameria\\Message\\Response' => array(
		'version' => '1.0.2.0',
		'path'    => $vendorDir . '/gauravjain028/omnipay-ameria/src/Message/Response.php'
	),
	'Omnipay\\CyberSource\\HostedGateway' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/HostedGateway.php'
	),
	'Omnipay\\CyberSource\\Message\\CompletePurchaseRequest' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/Message/CompletePurchaseRequest.php'
	),
	'Omnipay\\CyberSource\\Message\\CompletePurchaseResponse' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/Message/CompletePurchaseResponse.php'
	),
	'Omnipay\\CyberSource\\Message\\PurchaseRequest' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/Message/PurchaseRequest.php'
	),
	'Omnipay\\CyberSource\\Message\\PurchaseResponse' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/Message/PurchaseResponse.php'
	),
	'Omnipay\\CyberSource\\Message\\Security' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/patronbase/omnipay-cybersource-hosted/src/Message/Security.php'
	),
	'Omnipay\\DPO\\Gateway' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/lennon-mudenda/omnipay-dpo/src/Gateway.php'
	),
	'Omnipay\\DPO\\Message\\BaseRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/lennon-mudenda/omnipay-dpo/src/Message/BaseRequest.php'
	),
	'Omnipay\\DPO\\Message\\InitiateTransactionRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/lennon-mudenda/omnipay-dpo/src/Message/InitiateTransactionRequest.php'
	),
	'Omnipay\\DPO\\Message\\Response' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/lennon-mudenda/omnipay-dpo/src/Message/Response.php'
	),
	'Omnipay\\DPO\\Message\\VerifyTransactionRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/lennon-mudenda/omnipay-dpo/src/Message/VerifyTransactionRequest.php'
	),
	'Omnipay\\Eway\\DirectGateway' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/DirectGateway.php'
	),
	'Omnipay\\Eway\\Message\\AbstractRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/AbstractRequest.php'
	),
	'Omnipay\\Eway\\Message\\AbstractResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/AbstractResponse.php'
	),
	'Omnipay\\Eway\\Message\\DirectAbstractRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectAbstractRequest.php'
	),
	'Omnipay\\Eway\\Message\\DirectAuthorizeRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectAuthorizeRequest.php'
	),
	'Omnipay\\Eway\\Message\\DirectCaptureRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectCaptureRequest.php'
	),
	'Omnipay\\Eway\\Message\\DirectPurchaseRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectPurchaseRequest.php'
	),
	'Omnipay\\Eway\\Message\\DirectRefundRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectRefundRequest.php'
	),
	'Omnipay\\Eway\\Message\\DirectResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectResponse.php'
	),
	'Omnipay\\Eway\\Message\\DirectVoidRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/DirectVoidRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidCaptureRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidCaptureRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidCompletePurchaseRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidCompletePurchaseRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidCreateCardRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidCreateCardRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectAbstractRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectAbstractRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectAuthorizeRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectAuthorizeRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectCreateCardRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectCreateCardRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectCreateCardResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectCreateCardResponse.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectPurchaseRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectPurchaseRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectUpdateCardRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectUpdateCardRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidDirectVoidRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidDirectVoidRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidPurchaseRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidPurchaseRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidResponse.php'
	),
	'Omnipay\\Eway\\Message\\RapidSharedCreateCardRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidSharedCreateCardRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidSharedPurchaseRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidSharedPurchaseRequest.php'
	),
	'Omnipay\\Eway\\Message\\RapidSharedResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidSharedResponse.php'
	),
	'Omnipay\\Eway\\Message\\RapidSharedUpdateCardRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RapidSharedUpdateCardRequest.php'
	),
	'Omnipay\\Eway\\Message\\RefundRequest' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RefundRequest.php'
	),
	'Omnipay\\Eway\\Message\\RefundResponse' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/Message/RefundResponse.php'
	),
	'Omnipay\\Eway\\RapidDirectGateway' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/RapidDirectGateway.php'
	),
	'Omnipay\\Eway\\RapidGateway' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/RapidGateway.php'
	),
	'Omnipay\\Eway\\RapidSharedGateway' => array(
		'version' => '3.0.2.0',
		'path'    => $vendorDir . '/omnipay/eway/src/RapidSharedGateway.php'
	),
	'Omnipay\\Midtrans\\Message\\AbstractRequest' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/Message/AbstractRequest.php'
	),
	'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionCompletePurchaseRequest' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionCompletePurchaseRequest.php'
	),
	'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionCompletePurchaseResponse' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionCompletePurchaseResponse.php'
	),
	'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionPurchaseRequest' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionPurchaseRequest.php'
	),
	'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionPurchaseResponse' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionPurchaseResponse.php'
	),
	'Omnipay\\Midtrans\\SnapWindowRedirectionGateway' => array(
		'version' => '2.0.1.0',
		'path'    => $vendorDir . '/dilab/omnipay-midtrans/src/SnapWindowRedirectionGateway.php'
	),
	'Omnipay\\PayFast\\Gateway' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Gateway.php'
	),
	'Omnipay\\PayFast\\Message\\CompletePurchaseItnResponse' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Message/CompletePurchaseItnResponse.php'
	),
	'Omnipay\\PayFast\\Message\\CompletePurchasePdtResponse' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Message/CompletePurchasePdtResponse.php'
	),
	'Omnipay\\PayFast\\Message\\CompletePurchaseRequest' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Message/CompletePurchaseRequest.php'
	),
	'Omnipay\\PayFast\\Message\\PurchaseRequest' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Message/PurchaseRequest.php'
	),
	'Omnipay\\PayFast\\Message\\PurchaseResponse' => array(
		'version' => '3.1.0.0',
		'path'    => $vendorDir . '/omnipay/payfast/src/Message/PurchaseResponse.php'
	),
	'Omnipay\\Paystack\\Gateway' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Gateway.php'
	),
	'Omnipay\\Paystack\\Message\\AbstractRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/AbstractRequest.php'
	),
	'Omnipay\\Paystack\\Message\\CompletePurchaseRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/CompletePurchaseRequest.php'
	),
	'Omnipay\\Paystack\\Message\\CompletePurchaseResponse' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/CompletePurchaseResponse.php'
	),
	'Omnipay\\Paystack\\Message\\PurchaseRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/PurchaseRequest.php'
	),
	'Omnipay\\Paystack\\Message\\PurchaseResponse' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/PurchaseResponse.php'
	),
	'Omnipay\\Paystack\\Message\\RefundRequest' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/RefundRequest.php'
	),
	'Omnipay\\Paystack\\Message\\RefundResponse' => array(
		'version' => '1.0.0.0',
		'path'    => $vendorDir . '/paystackhq/omnipay-paystack/src/Message/RefundResponse.php'
	),
	'Omnipay\\Redsys\\Message\\CompletePurchaseRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/CompletePurchaseRequest.php'
	),
	'Omnipay\\Redsys\\Message\\CompletePurchaseResponse' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/CompletePurchaseResponse.php'
	),
	'Omnipay\\Redsys\\Message\\PurchaseRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/PurchaseRequest.php'
	),
	'Omnipay\\Redsys\\Message\\PurchaseResponse' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/PurchaseResponse.php'
	),
	'Omnipay\\Redsys\\Message\\Security' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/Security.php'
	),
	'Omnipay\\Redsys\\Message\\WebservicePurchaseRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/WebservicePurchaseRequest.php'
	),
	'Omnipay\\Redsys\\Message\\WebservicePurchaseResponse' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/Message/WebservicePurchaseResponse.php'
	),
	'Omnipay\\Redsys\\RedirectGateway' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/RedirectGateway.php'
	),
	'Omnipay\\Redsys\\WebserviceGateway' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/edu27/omnipay-redsys/src/WebserviceGateway.php'
	),
	'Omnipay\\ToyyibPay\\Gateway' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Gateway.php'
	),
	'Omnipay\\ToyyibPay\\Message\\AbstractRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Message/AbstractRequest.php'
	),
	'Omnipay\\ToyyibPay\\Message\\CompletePurchaseRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Message/CompletePurchaseRequest.php'
	),
	'Omnipay\\ToyyibPay\\Message\\CompletePurchaseResponse' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Message/CompletePurchaseResponse.php'
	),
	'Omnipay\\ToyyibPay\\Message\\PurchaseRequest' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Message/PurchaseRequest.php'
	),
	'Omnipay\\ToyyibPay\\Message\\PurchaseResponse' => array(
		'version' => 'dev-master',
		'path'    => $vendorDir . '/sitehandy/omnipay-toyyibpay/src/Message/PurchaseResponse.php'
	),
	'PHP_Autoloader' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-php-autoloader.php'
	),
	'Path_Processor' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-path-processor.php'
	),
	'Plugin_Locator' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-plugin-locator.php'
	),
	'Plugins_Handler' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-plugins-handler.php'
	),
	'Shutdown_Handler' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-shutdown-handler.php'
	),
	'Version_Loader' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-version-loader.php'
	),
	'Version_Selector' => array(
		'version' => '3.1.0',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/class-version-selector.php'
	),
);
