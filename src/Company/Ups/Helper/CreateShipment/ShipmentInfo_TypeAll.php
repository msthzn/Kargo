<?php

namespace Teknomavi\Kargo\Company\Ups\Helper\CreateShipment;

class ShipmentInfo_TypeAll
{
    /**
     * @var string $ShipperAccountNumber
     */
    protected $ShipperAccountNumber = null;
    /**
     * @var string $ShipperName
     */
    protected $ShipperName = null;
    /**
     * @var string $ShipperContactName
     */
    protected $ShipperContactName = null;
    /**
     * @var string $ShipperAddress
     */
    protected $ShipperAddress = null;
    /**
     * @var int $ShipperCityCode
     */
    protected $ShipperCityCode = null;
    /**
     * @var int $ShipperAreaCode
     */
    protected $ShipperAreaCode = null;
    /**
     * @var string $ShipperPostalCode
     */
    protected $ShipperPostalCode = null;
    /**
     * @var string $ShipperPhoneNumber
     */
    protected $ShipperPhoneNumber = null;
    /**
     * @var string $ShipperPhoneExtension
     */
    protected $ShipperPhoneExtension = null;
    /**
     * @var string $ShipperMobilePhoneNumber
     */
    protected $ShipperMobilePhoneNumber = null;
    /**
     * @var string $ShipperEMail
     */
    protected $ShipperEMail = null;
    /**
     * @var string $ShipperExpenseCode
     */
    protected $ShipperExpenseCode = null;
    /**
     * @var string $ConsigneeAccountNumber
     */
    protected $ConsigneeAccountNumber = null;
    /**
     * @var string $ConsigneeName
     */
    protected $ConsigneeName = null;
    /**
     * @var string $ConsigneeContactName
     */
    protected $ConsigneeContactName = null;
    /**
     * @var string $ConsigneeAddress
     */
    protected $ConsigneeAddress = null;
    /**
     * @var int $ConsigneeCityCode
     */
    protected $ConsigneeCityCode = null;
    /**
     * @var int $ConsigneeAreaCode
     */
    protected $ConsigneeAreaCode = null;
    /**
     * @var string $ConsigneePostalCode
     */
    protected $ConsigneePostalCode = null;
    /**
     * @var string $ConsigneePhoneNumber
     */
    protected $ConsigneePhoneNumber = null;
    /**
     * @var string $ConsigneePhoneExtension
     */
    protected $ConsigneePhoneExtension = null;
    /**
     * @var string $ConsigneeMobilePhoneNumber
     */
    protected $ConsigneeMobilePhoneNumber = null;
    /**
     * @var string $ConsigneeEMail
     */
    protected $ConsigneeEMail = null;
    /**
     * @var string $ConsigneeExpenseCode
     */
    protected $ConsigneeExpenseCode = null;
    /**
     * @var int $ServiceLevel
     */
    protected $ServiceLevel = null;
    /**
     * @var int $PaymentType
     */
    protected $PaymentType = null;
    /**
     * @var string $PackageType
     */
    protected $PackageType = null;
    /**
     * @var int $NumberOfPackages
     */
    protected $NumberOfPackages = null;
    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;
    /**
     * @var string $CustomerInvoiceNumber
     */
    protected $CustomerInvoiceNumber = null;
    /**
     * @var string $DescriptionOfGoods
     */
    protected $DescriptionOfGoods = null;
    /**
     * @var string $DeliveryNotificationEmail
     */
    protected $DeliveryNotificationEmail = null;
    /**
     * @var int $IdControlFlag
     */
    protected $IdControlFlag = null;
    /**
     * @var int $PhonePrealertFlag
     */
    protected $PhonePrealertFlag = null;
    /**
     * @var int $SmsToShipper
     */
    protected $SmsToShipper = null;
    /**
     * @var int $SmsToConsignee
     */
    protected $SmsToConsignee = null;
    /**
     * @var float $InsuranceValue
     */
    protected $InsuranceValue = null;
    /**
     * @var string $InsuranceValueCurrency
     */
    protected $InsuranceValueCurrency = null;
    /**
     * @var float $ValueOfGoods
     */
    protected $ValueOfGoods = null;
    /**
     * @var string $ValueOfGoodsCurrency
     */
    protected $ValueOfGoodsCurrency = null;
    /**
     * @var int $ValueOfGoodsPaymentType
     */
    protected $ValueOfGoodsPaymentType = null;
    /**
     * @var int $DeliveryByTally
     */
    protected $DeliveryByTally = null;
    /**
     * @var string $ThirdPartyAccountNumber
     */
    protected $ThirdPartyAccountNumber = null;
    /**
     * @var string $ThirdPartyExpenseCode
     */
    protected $ThirdPartyExpenseCode = null;
    /**
     * @var ArrayOfDimensionInfo $PackageDimensions
     */
    protected $PackageDimensions = null;
    /**
     * @var int $ShipperAccountId
     */
    protected $ShipperAccountId = null;
    /**
     * @var string $ShipperCityName
     */
    protected $ShipperCityName = null;
    /**
     * @var string $ShipperAreaName
     */
    protected $ShipperAreaName = null;
    /**
     * @var int $ConsigneeAccountId
     */
    protected $ConsigneeAccountId = null;
    /**
     * @var string $ConsigneeCityName
     */
    protected $ConsigneeCityName = null;
    /**
     * @var string $ConsigneeAreaName
     */
    protected $ConsigneeAreaName = null;
    /**
     * @var int $ThirdPartyAccountId
     */
    protected $ThirdPartyAccountId = null;

    /**
     * @param int   $ShipperCityCode
     * @param int   $ShipperAreaCode
     * @param int   $ConsigneeCityCode
     * @param int   $ConsigneeAreaCode
     * @param int   $ServiceLevel
     * @param int   $PaymentType
     * @param int   $NumberOfPackages
     * @param int   $IdControlFlag
     * @param int   $PhonePrealertFlag
     * @param int   $SmsToShipper
     * @param int   $SmsToConsignee
     * @param float $InsuranceValue
     * @param float $ValueOfGoods
     * @param int   $ValueOfGoodsPaymentType
     * @param int   $DeliveryByTally
     * @param int   $ShipperAccountId
     * @param int   $ConsigneeAccountId
     * @param int   $ThirdPartyAccountId
     */
    public function __construct(
        $ShipperCityCode,
        $ShipperAreaCode,
        $ConsigneeCityCode,
        $ConsigneeAreaCode,
        $ServiceLevel,
        $PaymentType,
        $NumberOfPackages,
        $IdControlFlag,
        $PhonePrealertFlag,
        $SmsToShipper,
        $SmsToConsignee,
        $InsuranceValue,
        $ValueOfGoods,
        $ValueOfGoodsPaymentType,
        $DeliveryByTally,
        $ShipperAccountId,
        $ConsigneeAccountId,
        $ThirdPartyAccountId
    ) {
        $this->ShipperCityCode = $ShipperCityCode;
        $this->ShipperAreaCode = $ShipperAreaCode;
        $this->ConsigneeCityCode = $ConsigneeCityCode;
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;
        $this->ServiceLevel = $ServiceLevel;
        $this->PaymentType = $PaymentType;
        $this->NumberOfPackages = $NumberOfPackages;
        $this->IdControlFlag = $IdControlFlag;
        $this->PhonePrealertFlag = $PhonePrealertFlag;
        $this->SmsToShipper = $SmsToShipper;
        $this->SmsToConsignee = $SmsToConsignee;
        $this->InsuranceValue = $InsuranceValue;
        $this->ValueOfGoods = $ValueOfGoods;
        $this->ValueOfGoodsPaymentType = $ValueOfGoodsPaymentType;
        $this->DeliveryByTally = $DeliveryByTally;
        $this->ShipperAccountId = $ShipperAccountId;
        $this->ConsigneeAccountId = $ConsigneeAccountId;
        $this->ThirdPartyAccountId = $ThirdPartyAccountId;
    }

    /**
     * @return string
     */
    public function getShipperAccountNumber()
    {
        return $this->ShipperAccountNumber;
    }

    /**
     * @param string $ShipperAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAccountNumber($ShipperAccountNumber)
    {
        $this->ShipperAccountNumber = $ShipperAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperName()
    {
        return $this->ShipperName;
    }

    /**
     * @param string $ShipperName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperName($ShipperName)
    {
        $this->ShipperName = $ShipperName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperContactName()
    {
        return $this->ShipperContactName;
    }

    /**
     * @param string $ShipperContactName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperContactName($ShipperContactName)
    {
        $this->ShipperContactName = $ShipperContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }

    /**
     * @param string $ShipperAddress
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAddress($ShipperAddress)
    {
        $this->ShipperAddress = $ShipperAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipperCityCode()
    {
        return $this->ShipperCityCode;
    }

    /**
     * @param int $ShipperCityCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperCityCode($ShipperCityCode)
    {
        $this->ShipperCityCode = $ShipperCityCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipperAreaCode()
    {
        return $this->ShipperAreaCode;
    }

    /**
     * @param int $ShipperAreaCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAreaCode($ShipperAreaCode)
    {
        $this->ShipperAreaCode = $ShipperAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPostalCode()
    {
        return $this->ShipperPostalCode;
    }

    /**
     * @param string $ShipperPostalCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPostalCode($ShipperPostalCode)
    {
        $this->ShipperPostalCode = $ShipperPostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhoneNumber()
    {
        return $this->ShipperPhoneNumber;
    }

    /**
     * @param string $ShipperPhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPhoneNumber($ShipperPhoneNumber)
    {
        $this->ShipperPhoneNumber = $ShipperPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperPhoneExtension()
    {
        return $this->ShipperPhoneExtension;
    }

    /**
     * @param string $ShipperPhoneExtension
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperPhoneExtension($ShipperPhoneExtension)
    {
        $this->ShipperPhoneExtension = $ShipperPhoneExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperMobilePhoneNumber()
    {
        return $this->ShipperMobilePhoneNumber;
    }

    /**
     * @param string $ShipperMobilePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperMobilePhoneNumber($ShipperMobilePhoneNumber)
    {
        $this->ShipperMobilePhoneNumber = $ShipperMobilePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperEMail()
    {
        return $this->ShipperEMail;
    }

    /**
     * @param string $ShipperEMail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperEMail($ShipperEMail)
    {
        $this->ShipperEMail = $ShipperEMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperExpenseCode()
    {
        return $this->ShipperExpenseCode;
    }

    /**
     * @param string $ShipperExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperExpenseCode($ShipperExpenseCode)
    {
        $this->ShipperExpenseCode = $ShipperExpenseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAccountNumber()
    {
        return $this->ConsigneeAccountNumber;
    }

    /**
     * @param string $ConsigneeAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAccountNumber($ConsigneeAccountNumber)
    {
        $this->ConsigneeAccountNumber = $ConsigneeAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->ConsigneeName;
    }

    /**
     * @param string $ConsigneeName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeName($ConsigneeName)
    {
        $this->ConsigneeName = $ConsigneeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeContactName()
    {
        return $this->ConsigneeContactName;
    }

    /**
     * @param string $ConsigneeContactName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeContactName($ConsigneeContactName)
    {
        $this->ConsigneeContactName = $ConsigneeContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAddress()
    {
        return $this->ConsigneeAddress;
    }

    /**
     * @param string $ConsigneeAddress
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAddress($ConsigneeAddress)
    {
        $this->ConsigneeAddress = $ConsigneeAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeCityCode()
    {
        return $this->ConsigneeCityCode;
    }

    /**
     * @param int $ConsigneeCityCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeCityCode($ConsigneeCityCode)
    {
        $this->ConsigneeCityCode = $ConsigneeCityCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeAreaCode()
    {
        return $this->ConsigneeAreaCode;
    }

    /**
     * @param int $ConsigneeAreaCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAreaCode($ConsigneeAreaCode)
    {
        $this->ConsigneeAreaCode = $ConsigneeAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePostalCode()
    {
        return $this->ConsigneePostalCode;
    }

    /**
     * @param string $ConsigneePostalCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePostalCode($ConsigneePostalCode)
    {
        $this->ConsigneePostalCode = $ConsigneePostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePhoneNumber()
    {
        return $this->ConsigneePhoneNumber;
    }

    /**
     * @param string $ConsigneePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePhoneNumber($ConsigneePhoneNumber)
    {
        $this->ConsigneePhoneNumber = $ConsigneePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneePhoneExtension()
    {
        return $this->ConsigneePhoneExtension;
    }

    /**
     * @param string $ConsigneePhoneExtension
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneePhoneExtension($ConsigneePhoneExtension)
    {
        $this->ConsigneePhoneExtension = $ConsigneePhoneExtension;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeMobilePhoneNumber()
    {
        return $this->ConsigneeMobilePhoneNumber;
    }

    /**
     * @param string $ConsigneeMobilePhoneNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeMobilePhoneNumber($ConsigneeMobilePhoneNumber)
    {
        $this->ConsigneeMobilePhoneNumber = $ConsigneeMobilePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeEMail()
    {
        return $this->ConsigneeEMail;
    }

    /**
     * @param string $ConsigneeEMail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeEMail($ConsigneeEMail)
    {
        $this->ConsigneeEMail = $ConsigneeEMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeExpenseCode()
    {
        return $this->ConsigneeExpenseCode;
    }

    /**
     * @param string $ConsigneeExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeExpenseCode($ConsigneeExpenseCode)
    {
        $this->ConsigneeExpenseCode = $ConsigneeExpenseCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->ServiceLevel;
    }

    /**
     * @param int $ServiceLevel
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setServiceLevel($ServiceLevel)
    {
        $this->ServiceLevel = $ServiceLevel;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param int $PaymentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPaymentType($PaymentType)
    {
        $this->PaymentType = $PaymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->PackageType;
    }

    /**
     * @param string $PackageType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPackageType($PackageType)
    {
        $this->PackageType = $PackageType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPackages()
    {
        return $this->NumberOfPackages;
    }

    /**
     * @param int $NumberOfPackages
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setNumberOfPackages($NumberOfPackages)
    {
        $this->NumberOfPackages = $NumberOfPackages;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setCustomerReference($CustomerReference)
    {
        $this->CustomerReference = $CustomerReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerInvoiceNumber()
    {
        return $this->CustomerInvoiceNumber;
    }

    /**
     * @param string $CustomerInvoiceNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setCustomerInvoiceNumber($CustomerInvoiceNumber)
    {
        $this->CustomerInvoiceNumber = $CustomerInvoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
        return $this->DescriptionOfGoods;
    }

    /**
     * @param string $DescriptionOfGoods
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setDescriptionOfGoods($DescriptionOfGoods)
    {
        $this->DescriptionOfGoods = $DescriptionOfGoods;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryNotificationEmail()
    {
        return $this->DeliveryNotificationEmail;
    }

    /**
     * @param string $DeliveryNotificationEmail
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setDeliveryNotificationEmail($DeliveryNotificationEmail)
    {
        $this->DeliveryNotificationEmail = $DeliveryNotificationEmail;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdControlFlag()
    {
        return $this->IdControlFlag;
    }

    /**
     * @param int $IdControlFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setIdControlFlag($IdControlFlag)
    {
        $this->IdControlFlag = $IdControlFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhonePrealertFlag()
    {
        return $this->PhonePrealertFlag;
    }

    /**
     * @param int $PhonePrealertFlag
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPhonePrealertFlag($PhonePrealertFlag)
    {
        $this->PhonePrealertFlag = $PhonePrealertFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmsToShipper()
    {
        return $this->SmsToShipper;
    }

    /**
     * @param int $SmsToShipper
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setSmsToShipper($SmsToShipper)
    {
        $this->SmsToShipper = $SmsToShipper;
        return $this;
    }

    /**
     * @return int
     */
    public function getSmsToConsignee()
    {
        return $this->SmsToConsignee;
    }

    /**
     * @param int $SmsToConsignee
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setSmsToConsignee($SmsToConsignee)
    {
        $this->SmsToConsignee = $SmsToConsignee;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceValue()
    {
        return $this->InsuranceValue;
    }

    /**
     * @param float $InsuranceValue
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setInsuranceValue($InsuranceValue)
    {
        $this->InsuranceValue = $InsuranceValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsuranceValueCurrency()
    {
        return $this->InsuranceValueCurrency;
    }

    /**
     * @param string $InsuranceValueCurrency
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setInsuranceValueCurrency($InsuranceValueCurrency)
    {
        $this->InsuranceValueCurrency = $InsuranceValueCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getValueOfGoods()
    {
        return $this->ValueOfGoods;
    }

    /**
     * @param float $ValueOfGoods
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoods($ValueOfGoods)
    {
        $this->ValueOfGoods = $ValueOfGoods;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueOfGoodsCurrency()
    {
        return $this->ValueOfGoodsCurrency;
    }

    /**
     * @param string $ValueOfGoodsCurrency
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoodsCurrency($ValueOfGoodsCurrency)
    {
        $this->ValueOfGoodsCurrency = $ValueOfGoodsCurrency;
        return $this;
    }

    /**
     * @return int
     */
    public function getValueOfGoodsPaymentType()
    {
        return $this->ValueOfGoodsPaymentType;
    }

    /**
     * @param int $ValueOfGoodsPaymentType
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setValueOfGoodsPaymentType($ValueOfGoodsPaymentType)
    {
        $this->ValueOfGoodsPaymentType = $ValueOfGoodsPaymentType;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryByTally()
    {
        return $this->DeliveryByTally;
    }

    /**
     * @param int $DeliveryByTally
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setDeliveryByTally($DeliveryByTally)
    {
        $this->DeliveryByTally = $DeliveryByTally;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyAccountNumber()
    {
        return $this->ThirdPartyAccountNumber;
    }

    /**
     * @param string $ThirdPartyAccountNumber
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyAccountNumber($ThirdPartyAccountNumber)
    {
        $this->ThirdPartyAccountNumber = $ThirdPartyAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyExpenseCode()
    {
        return $this->ThirdPartyExpenseCode;
    }

    /**
     * @param string $ThirdPartyExpenseCode
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyExpenseCode($ThirdPartyExpenseCode)
    {
        $this->ThirdPartyExpenseCode = $ThirdPartyExpenseCode;
        return $this;
    }

    /**
     * @return ArrayOfDimensionInfo
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }

    /**
     * @param ArrayOfDimensionInfo $PackageDimensions
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setPackageDimensions($PackageDimensions)
    {
        $this->PackageDimensions = $PackageDimensions;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipperAccountId()
    {
        return $this->ShipperAccountId;
    }

    /**
     * @param int $ShipperAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAccountId($ShipperAccountId)
    {
        $this->ShipperAccountId = $ShipperAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperCityName()
    {
        return $this->ShipperCityName;
    }

    /**
     * @param string $ShipperCityName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperCityName($ShipperCityName)
    {
        $this->ShipperCityName = $ShipperCityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperAreaName()
    {
        return $this->ShipperAreaName;
    }

    /**
     * @param string $ShipperAreaName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setShipperAreaName($ShipperAreaName)
    {
        $this->ShipperAreaName = $ShipperAreaName;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsigneeAccountId()
    {
        return $this->ConsigneeAccountId;
    }

    /**
     * @param int $ConsigneeAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAccountId($ConsigneeAccountId)
    {
        $this->ConsigneeAccountId = $ConsigneeAccountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeCityName()
    {
        return $this->ConsigneeCityName;
    }

    /**
     * @param string $ConsigneeCityName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeCityName($ConsigneeCityName)
    {
        $this->ConsigneeCityName = $ConsigneeCityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeAreaName()
    {
        return $this->ConsigneeAreaName;
    }

    /**
     * @param string $ConsigneeAreaName
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setConsigneeAreaName($ConsigneeAreaName)
    {
        $this->ConsigneeAreaName = $ConsigneeAreaName;
        return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAccountId()
    {
        return $this->ThirdPartyAccountId;
    }

    /**
     * @param int $ThirdPartyAccountId
     *
     * @return \Teknomavi\Kargo\Company\Ups\Helper\CreateShipment\ShipmentInfo_TypeAll
     */
    public function setThirdPartyAccountId($ThirdPartyAccountId)
    {
        $this->ThirdPartyAccountId = $ThirdPartyAccountId;
        return $this;
    }
}
