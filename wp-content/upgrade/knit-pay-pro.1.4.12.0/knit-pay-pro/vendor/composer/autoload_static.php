<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ccedd13934db05973ed6cef77f174b4
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Omnipay\\ToyyibPay\\' => 18,
            'Omnipay\\Redsys\\' => 15,
            'Omnipay\\Paystack\\' => 17,
            'Omnipay\\PayFast\\' => 16,
            'Omnipay\\Midtrans\\' => 17,
            'Omnipay\\Eway\\' => 13,
            'Omnipay\\DPO\\' => 12,
            'Omnipay\\CyberSource\\' => 20,
            'Omnipay\\Ameria\\' => 15,
        ),
        'D' => 
        array (
            'Dpo\\Common\\' => 11,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Omnipay\\ToyyibPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src',
        ),
        'Omnipay\\Redsys\\' => 
        array (
            0 => __DIR__ . '/..' . '/edu27/omnipay-redsys/src',
        ),
        'Omnipay\\Paystack\\' => 
        array (
            0 => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src',
        ),
        'Omnipay\\PayFast\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/payfast/src',
        ),
        'Omnipay\\Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src',
        ),
        'Omnipay\\Eway\\' => 
        array (
            0 => __DIR__ . '/..' . '/omnipay/eway/src',
        ),
        'Omnipay\\DPO\\' => 
        array (
            0 => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src',
        ),
        'Omnipay\\CyberSource\\' => 
        array (
            0 => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src',
        ),
        'Omnipay\\Ameria\\' => 
        array (
            0 => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src',
        ),
        'Dpo\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/dpo/dpo-pay-common/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dpo\\Common\\Dpo' => __DIR__ . '/..' . '/dpo/dpo-pay-common/src/Dpo.php',
        'Omnipay\\Ameria\\Gateway' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Gateway.php',
        'Omnipay\\Ameria\\Message\\AbstractRequest' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Message/AbstractRequest.php',
        'Omnipay\\Ameria\\Message\\GetOrderStatusRequest' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Message/GetOrderStatusRequest.php',
        'Omnipay\\Ameria\\Message\\RefundRequest' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Message/RefundRequest.php',
        'Omnipay\\Ameria\\Message\\RegisterRequest' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Message/RegisterRequest.php',
        'Omnipay\\Ameria\\Message\\Response' => __DIR__ . '/..' . '/gauravjain028/omnipay-ameria/src/Message/Response.php',
        'Omnipay\\CyberSource\\HostedGateway' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/HostedGateway.php',
        'Omnipay\\CyberSource\\Message\\CompletePurchaseRequest' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/Message/CompletePurchaseRequest.php',
        'Omnipay\\CyberSource\\Message\\CompletePurchaseResponse' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/Message/CompletePurchaseResponse.php',
        'Omnipay\\CyberSource\\Message\\PurchaseRequest' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/Message/PurchaseRequest.php',
        'Omnipay\\CyberSource\\Message\\PurchaseResponse' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/Message/PurchaseResponse.php',
        'Omnipay\\CyberSource\\Message\\Security' => __DIR__ . '/..' . '/patronbase/omnipay-cybersource-hosted/src/Message/Security.php',
        'Omnipay\\DPO\\Gateway' => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src/Gateway.php',
        'Omnipay\\DPO\\Message\\BaseRequest' => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src/Message/BaseRequest.php',
        'Omnipay\\DPO\\Message\\InitiateTransactionRequest' => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src/Message/InitiateTransactionRequest.php',
        'Omnipay\\DPO\\Message\\Response' => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src/Message/Response.php',
        'Omnipay\\DPO\\Message\\VerifyTransactionRequest' => __DIR__ . '/..' . '/lennon-mudenda/omnipay-dpo/src/Message/VerifyTransactionRequest.php',
        'Omnipay\\Eway\\DirectGateway' => __DIR__ . '/..' . '/omnipay/eway/src/DirectGateway.php',
        'Omnipay\\Eway\\Message\\AbstractRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/AbstractRequest.php',
        'Omnipay\\Eway\\Message\\AbstractResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/AbstractResponse.php',
        'Omnipay\\Eway\\Message\\DirectAbstractRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectAbstractRequest.php',
        'Omnipay\\Eway\\Message\\DirectAuthorizeRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectAuthorizeRequest.php',
        'Omnipay\\Eway\\Message\\DirectCaptureRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectCaptureRequest.php',
        'Omnipay\\Eway\\Message\\DirectPurchaseRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectPurchaseRequest.php',
        'Omnipay\\Eway\\Message\\DirectRefundRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectRefundRequest.php',
        'Omnipay\\Eway\\Message\\DirectResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectResponse.php',
        'Omnipay\\Eway\\Message\\DirectVoidRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/DirectVoidRequest.php',
        'Omnipay\\Eway\\Message\\RapidCaptureRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidCaptureRequest.php',
        'Omnipay\\Eway\\Message\\RapidCompletePurchaseRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidCompletePurchaseRequest.php',
        'Omnipay\\Eway\\Message\\RapidCreateCardRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidCreateCardRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectAbstractRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectAbstractRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectAuthorizeRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectAuthorizeRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectCreateCardRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectCreateCardRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectCreateCardResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectCreateCardResponse.php',
        'Omnipay\\Eway\\Message\\RapidDirectPurchaseRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectPurchaseRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectUpdateCardRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectUpdateCardRequest.php',
        'Omnipay\\Eway\\Message\\RapidDirectVoidRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidDirectVoidRequest.php',
        'Omnipay\\Eway\\Message\\RapidPurchaseRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidPurchaseRequest.php',
        'Omnipay\\Eway\\Message\\RapidResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidResponse.php',
        'Omnipay\\Eway\\Message\\RapidSharedCreateCardRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidSharedCreateCardRequest.php',
        'Omnipay\\Eway\\Message\\RapidSharedPurchaseRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidSharedPurchaseRequest.php',
        'Omnipay\\Eway\\Message\\RapidSharedResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidSharedResponse.php',
        'Omnipay\\Eway\\Message\\RapidSharedUpdateCardRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RapidSharedUpdateCardRequest.php',
        'Omnipay\\Eway\\Message\\RefundRequest' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RefundRequest.php',
        'Omnipay\\Eway\\Message\\RefundResponse' => __DIR__ . '/..' . '/omnipay/eway/src/Message/RefundResponse.php',
        'Omnipay\\Eway\\RapidDirectGateway' => __DIR__ . '/..' . '/omnipay/eway/src/RapidDirectGateway.php',
        'Omnipay\\Eway\\RapidGateway' => __DIR__ . '/..' . '/omnipay/eway/src/RapidGateway.php',
        'Omnipay\\Eway\\RapidSharedGateway' => __DIR__ . '/..' . '/omnipay/eway/src/RapidSharedGateway.php',
        'Omnipay\\Midtrans\\Message\\AbstractRequest' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/Message/AbstractRequest.php',
        'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionCompletePurchaseRequest' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionCompletePurchaseRequest.php',
        'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionCompletePurchaseResponse' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionCompletePurchaseResponse.php',
        'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionPurchaseRequest' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionPurchaseRequest.php',
        'Omnipay\\Midtrans\\Message\\SnapWindowRedirectionPurchaseResponse' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/Message/SnapWindowRedirectionPurchaseResponse.php',
        'Omnipay\\Midtrans\\SnapWindowRedirectionGateway' => __DIR__ . '/..' . '/dilab/omnipay-midtrans/src/SnapWindowRedirectionGateway.php',
        'Omnipay\\PayFast\\Gateway' => __DIR__ . '/..' . '/omnipay/payfast/src/Gateway.php',
        'Omnipay\\PayFast\\Message\\CompletePurchaseItnResponse' => __DIR__ . '/..' . '/omnipay/payfast/src/Message/CompletePurchaseItnResponse.php',
        'Omnipay\\PayFast\\Message\\CompletePurchasePdtResponse' => __DIR__ . '/..' . '/omnipay/payfast/src/Message/CompletePurchasePdtResponse.php',
        'Omnipay\\PayFast\\Message\\CompletePurchaseRequest' => __DIR__ . '/..' . '/omnipay/payfast/src/Message/CompletePurchaseRequest.php',
        'Omnipay\\PayFast\\Message\\PurchaseRequest' => __DIR__ . '/..' . '/omnipay/payfast/src/Message/PurchaseRequest.php',
        'Omnipay\\PayFast\\Message\\PurchaseResponse' => __DIR__ . '/..' . '/omnipay/payfast/src/Message/PurchaseResponse.php',
        'Omnipay\\Paystack\\Gateway' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Gateway.php',
        'Omnipay\\Paystack\\Message\\AbstractRequest' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/AbstractRequest.php',
        'Omnipay\\Paystack\\Message\\CompletePurchaseRequest' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/CompletePurchaseRequest.php',
        'Omnipay\\Paystack\\Message\\CompletePurchaseResponse' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/CompletePurchaseResponse.php',
        'Omnipay\\Paystack\\Message\\PurchaseRequest' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/PurchaseRequest.php',
        'Omnipay\\Paystack\\Message\\PurchaseResponse' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/PurchaseResponse.php',
        'Omnipay\\Paystack\\Message\\RefundRequest' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/RefundRequest.php',
        'Omnipay\\Paystack\\Message\\RefundResponse' => __DIR__ . '/..' . '/paystackhq/omnipay-paystack/src/Message/RefundResponse.php',
        'Omnipay\\Redsys\\Message\\CompletePurchaseRequest' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/CompletePurchaseRequest.php',
        'Omnipay\\Redsys\\Message\\CompletePurchaseResponse' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/CompletePurchaseResponse.php',
        'Omnipay\\Redsys\\Message\\PurchaseRequest' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/PurchaseRequest.php',
        'Omnipay\\Redsys\\Message\\PurchaseResponse' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/PurchaseResponse.php',
        'Omnipay\\Redsys\\Message\\Security' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/Security.php',
        'Omnipay\\Redsys\\Message\\WebservicePurchaseRequest' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/WebservicePurchaseRequest.php',
        'Omnipay\\Redsys\\Message\\WebservicePurchaseResponse' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/Message/WebservicePurchaseResponse.php',
        'Omnipay\\Redsys\\RedirectGateway' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/RedirectGateway.php',
        'Omnipay\\Redsys\\WebserviceGateway' => __DIR__ . '/..' . '/edu27/omnipay-redsys/src/WebserviceGateway.php',
        'Omnipay\\ToyyibPay\\Gateway' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Gateway.php',
        'Omnipay\\ToyyibPay\\Message\\AbstractRequest' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Message/AbstractRequest.php',
        'Omnipay\\ToyyibPay\\Message\\CompletePurchaseRequest' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Message/CompletePurchaseRequest.php',
        'Omnipay\\ToyyibPay\\Message\\CompletePurchaseResponse' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Message/CompletePurchaseResponse.php',
        'Omnipay\\ToyyibPay\\Message\\PurchaseRequest' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Message/PurchaseRequest.php',
        'Omnipay\\ToyyibPay\\Message\\PurchaseResponse' => __DIR__ . '/..' . '/sitehandy/omnipay-toyyibpay/src/Message/PurchaseResponse.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ccedd13934db05973ed6cef77f174b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ccedd13934db05973ed6cef77f174b4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ccedd13934db05973ed6cef77f174b4::$classMap;

        }, null, ClassLoader::class);
    }
}
