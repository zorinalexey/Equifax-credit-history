<?php

namespace Equifax\CreditHistory;

if ( ! defined('ROOT')) {
    define('ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
}

use Equifax\CreditHistory\ReferenceBooks\DocumentTypes;
use Equifax\CreditHistory\ReferenceBooks\OperationCodeCreditHistory;
use Equifax\CreditHistory\ReferenceBooks\ReasonForProvidingCodeD;
use Equifax\CreditHistory\ReferenceBooks\TheVolumeOfTheOperationPerformed;
use Equifax\CreditHistory\ReferenceBooks\TypesOfRegistrationAddress;
use Equifax\CreditHistory\ReferenceBooks\TypesOfLegalCapacity;
use Equifax\CreditHistory\ReferenceBooks\StagesOfBankruptcyCase;
use Equifax\CreditHistory\ReferenceBooks\TypesOfTaxpayerNumbers;
use Equifax\CreditHistory\ReferenceBooks\SignOfReorganization;
use Equifax\CreditHistory\ReferenceBooks\SignOfMisconductInCase;
use Equifax\CreditHistory\ReferenceBooks\SignOfRegistrationInTheRF;
use Equifax\CreditHistory\ReferenceBooks\SignOfIntentionalOrFictitiousBankruptcy;
use Equifax\CreditHistory\ReferenceBooks\SignOfExemptionFromFulfillmentOfCreditorsClaims;
use Equifax\CreditHistory\ReferenceBooks\TypesOfParticipationInTheTransaction;
use Equifax\CreditHistory\ReferenceBooks\TransactionTypes;
use Equifax\CreditHistory\ReferenceBooks\TypesOfLoan;
use Equifax\CreditHistory\ReferenceBooks\PurposeOfTheLoan;
use Equifax\CreditHistory\ReferenceBooks\SignOfConsumerCredit;
use Equifax\CreditHistory\ReferenceBooks\SignOfUsingPaymentCard;
use Equifax\CreditHistory\ReferenceBooks\SignOfTheEmergenceOfLiabilityAsResultOfInnovation;
use Equifax\CreditHistory\ReferenceBooks\SignOfTheMonetaryObligationOfTheSource;
use Equifax\CreditHistory\ReferenceBooks\SignOfTheSubjectsMonetaryObligation;
use Equifax\CreditHistory\ReferenceBooks\GracePeriodTypes;
use Equifax\CreditHistory\ReferenceBooks\TypesOfAmendmentOfTheContract;
use Equifax\CreditHistory\ReferenceBooks\ReasonsForSettlingBadDebts;
use Equifax\CreditHistory\ReferenceBooks\TypesOfOtherAmendmentsToTheContract;
use Equifax\CreditHistory\ReferenceBooks\ReasonsForTerminationOfTheContractAmendment;
use Equifax\CreditHistory\ReferenceBooks\TypesOfPaymentCompliance;
use Equifax\CreditHistory\ReferenceBooks\TypesOfComplianceWithTheDeadlineForMakingPayments;
use Equifax\CreditHistory\ReferenceBooks\GroundsForTerminatingAnObligation;
use Equifax\CreditHistory\ReferenceBooks\SettlementSignForTheLastPayment;
use Equifax\CreditHistory\ReferenceBooks\SignOfAnUnconfirmedGracePeriod;
use Equifax\CreditHistory\ReferenceBooks\SignOfDelayOfTheDebtorMoreThan90Days;
use Equifax\CreditHistory\ReferenceBooks\SignOfTheTerminationOfTheObligation;
use Equifax\CreditHistory\ReferenceBooks\TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction;
use Equifax\CreditHistory\ReferenceBooks\ReasonsForTerminatingCollateral;
use Equifax\CreditHistory\ReferenceBooks\TypesOfCollateralUsed;
use Equifax\CreditHistory\ReferenceBooks\SignOfImproperPerformanceOfAnObligation;
use Equifax\CreditHistory\ReferenceBooks\SignOfAnotherEncumbranceOfTheSubjectOfPledge;
use Equifax\CreditHistory\ReferenceBooks\SignOfFranchise;
use Equifax\CreditHistory\ReferenceBooks\SignOfComplianceWithTheProcedureForCompensation;
use Equifax\CreditHistory\ReferenceBooks\TypesOfRecoverableDebts;
use Equifax\CreditHistory\ReferenceBooks\ReasonsForStoppingTheTransferOfInformation;
use Equifax\CreditHistory\ReferenceBooks\SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson;
use Equifax\CreditHistory\ReferenceBooks\TypesOfSources;
use Equifax\CreditHistory\ReferenceBooks\TypesOfAcquirersOfTheRightsOfCreditorLegalEntity;
use Equifax\CreditHistory\ReferenceBooks\TypesOfRequestsToMakeDeal;
use Equifax\CreditHistory\ReferenceBooks\ReasonsForNotMakingDeal;
use Equifax\CreditHistory\ReferenceBooks\LiabilityAccountingAttribute;
use Equifax\CreditHistory\ReferenceBooks\CodesOfCountriesAccordingToOKSM;
use Equifax\CreditHistory\ReferenceBooks\OKWCurrencyCodes;

/**
 * Класс User
 * @version 0.0.1
 * @package Equifax\CreditHistory\User
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 */
class Client
{

    private static array $historyData = [
        /**
         * @var DocumentTypes
         */
        'documentTypes' => false, # DocumentTypes
        /**
         * @var OperationCodeCreditHistory
         */
        'operationCode' => false, # OperationCodeCreditHistory
        /**
         * @var ReasonForProvidingCodeD
         */
        'reasonForProvidingCodeD' => false, # ReasonForProvidingCodeD
        /**
         * @var TheVolumeOfTheOperationPerformed
         */
        'theVolumeOfTheOperationPerformed' => false, # TheVolumeOfTheOperationPerformed
        /**
         * @var TypesOfRegistrationAddress
         */
        'typeOfRegistrationAddress' => false, # TypesOfRegistrationAddress
        /**
         * @var TypesOfLegalCapacity
         */
        'typesOfLegalCapacity' => false, # TypesOfLegalCapacity
        /**
         * @var StagesOfBankruptcyCase
         */
        'stagesOfBankruptcyCase' => false, # StagesOfBankruptcyCase
        /**
         * @var TypesOfTaxpayerNumbers
         */
        'typesOfTaxpayerNumbers' => false, # TypesOfTaxpayerNumbers
        /**
         * @var SignOfReorganization
         */
        'signOfReorganization' => false, # SignOfReorganization
        /**
         * @var SignOfRegistrationInTheRF
         */
        'signOfRegistrationInTheRF' => false, # SignOfRegistrationInTheRF
        /**
         * @var SignOfMisconductInCase
         */
        'signOfMisconductInCase' => false, # SignOfMisconductInCase
        /**
         * @var SignOfIntentionalOrFictitiousBankruptcy
         */
        'signOfIntentionalOrFictitiousBankruptcy' => false, # SignOfIntentionalOrFictitiousBankruptcy
        /**
         * @var SignOfExemptionFromFulfillmentOfCreditorsClaims
         */
        'signOfExemptionFromFulfillmentOfCreditorsClaims' => false, # SignOfExemptionFromFulfillmentOfCreditorsClaims
        /**
         * @var TypesOfParticipationInTheTransaction
         */
        'typesOfParticipationInTheTransaction' => false, # TypesOfParticipationInTheTransaction
        /**
         * @var TransactionTypes
         */
        'transactionTypes' => false, # TransactionTypes
        /**
         * @var TypesOfLoan
         */
        'typesOfLoan' => false, # TypesOfLoan
        /**
         * @var PurposeOfTheLoan
         */
        'purposeOfTheLoan' => false, # PurposeOfTheLoan
        /**
         * @var SignOfConsumerCredit
         */
        'signOfConsumerCredit' => false, # SignOfConsumerCredit
        /**
         * @var SignOfUsingPaymentCard
         */
        'signOfUsingPaymentCard' => false, # SignOfUsingPaymentCard
        /**
         * @var SignOfTheEmergenceOfLiabilityAsResultOfInnovation
         */
        'signOfTheEmergenceOfLiabilityAsResultOfInnovation' => false, # SignOfTheEmergenceOfLiabilityAsResultOfInnovation
        /**
         * @var SignOfTheMonetaryObligationOfTheSource
         */
        'signOfTheMonetaryObligationOfTheSource' => false, # SignOfTheMonetaryObligationOfTheSource
        /**
         * @var SignOfTheSubjectsMonetaryObligation
         */
        'signOfTheSubjectsMonetaryObligation' => false, # SignOfTheSubjectsMonetaryObligation
        /**
         * @var TypesOfAmendmentOfTheContract
         */
        'typesOfAmendmentOfTheContract' => false, # TypesOfAmendmentOfTheContract
        /**
         * @var GracePeriodTypes
         */
        'gracePeriodTypes' => false, # GracePeriodTypes
        /**
         * @var ReasonsForSettlingBadDebts
         */
        'reasonsForSettlingBadDebts' => false, # ReasonsForSettlingBadDebts
        /**
         * @var TypesOfOtherAmendmentsToTheContract
         */
        'typesOfOtherAmendmentsToTheContract' => false, # TypesOfOtherAmendmentsToTheContract
        /**
         * @var ReasonsForTerminationOfTheContractAmendment
         */
        'reasonsForTerminationOfTheContractAmendment' => false, # ReasonsForTerminationOfTheContractAmendment
        /**
         * @var TypesOfPaymentCompliance
         */
        'typesOfPaymentCompliance' => false, # TypesOfPaymentCompliance
        /**
         * @var TypesOfComplianceWithTheDeadlineForMakingPayments
         */
        'typesOfComplianceWithTheDeadlineForMakingPayments' => false, # TypesOfComplianceWithTheDeadlineForMakingPayments
        /**
         * @var GroundsForTerminatingAnObligation
         */
        'groundsForTerminatingAnObligation' => false, # GroundsForTerminatingAnObligation
        /**
         * @var SettlementSignForTheLastPayment
         */
        'settlementSignForTheLastPayment' => false, # SettlementSignForTheLastPayment
        /**
         * @var SignOfAnUnconfirmedGracePeriod
         */
        'signOfAnUnconfirmedGracePeriod' => false, # SignOfAnUnconfirmedGracePeriod
        /**
         * @var SignOfDelayOfTheDebtorMoreThan90Days
         */
        'signOfDelayOfTheDebtorMoreThan90Days' => false, # SignOfDelayOfTheDebtorMoreThan90Days
        /**
         * @var SignOfTheTerminationOfTheObligation
         */
        'signOfTheTerminationOfTheObligation' => false, # SignOfTheTerminationOfTheObligation
        /**
         * @var TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction
         */
        'typesOfCollateralAndNonMonetaryGrantsUnderTheTransaction' => false, # TypesOfCollateralAndNonMonetaryGrantsUnderTheTransaction
        /**
         * @var ReasonsForTerminatingCollateral
         */
        'reasonsForTerminatingCollateral' => false, # ReasonsForTerminatingCollateral
        /**
         * @var TypesOfCollateralUsed
         */
        'typesOfCollateralUsed' => false, # TypesOfCollateralUsed
        /**
         * @var SignOfImproperPerformanceOfAnObligation
         */
        'signOfImproperPerformanceOfAnObligation' => false, # SignOfImproperPerformanceOfAnObligation
        /**
         * @var SignOfAnotherEncumbranceOfTheSubjectOfPledge
         */
        'signOfAnotherEncumbranceOfTheSubjectOfPledge' => false, # SignOfAnotherEncumbranceOfTheSubjectOfPledge
        /**
         * @var SignOfFranchise
         */
        'signOfFranchise' => false, # SignOfFranchise
        /**
         * @var SignOfComplianceWithTheProcedureForCompensation
         */
        'signOfComplianceWithTheProcedureForCompensation' => false, # SignOfComplianceWithTheProcedureForCompensation
        /**
         * @var TypesOfRecoverableDebts
         */
        'typesOfRecoverableDebts' => false, # TypesOfRecoverableDebts
        /**
         * @var ReasonsForStoppingTheTransferOfInformation
         */
        'reasonsForStoppingTheTransferOfInformation' => false, # ReasonsForStoppingTheTransferOfInformation
        /**
         * @var SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson
         */
        'signOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson' => false, #SignOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson
        /**
         * @var TypesOfSources
         */
        'typesOfSources' => false, # TypesOfSources
        /**
         * @var TypesOfAcquirersOfTheRightsOfCreditorLegalEntity
         */
        'typesOfAcquirersOfTheRightsOfCreditorLegalEntity' => false, # TypesOfAcquirersOfTheRightsOfCreditorLegalEntity
        /**
         * @var TypesOfRequestsToMakeDeal
         */
        'typesOfRequestsToMakeDeal' => false, # TypesOfRequestsToMakeDeal
        /**
         * @var ReasonsForNotMakingDeal
         */
        'reasonsForNotMakingDeal' => false, # ReasonsForNotMakingDeal
        /**
         * @var LiabilityAccountingAttribute
         */
        'liabilityAccountingAttribute' => false, # LiabilityAccountingAttribute
        /**
         * @var CodesOfCountriesAccordingToOKSM
         */
        'codesOfCountriesAccordingToOKSM' => false, # CodesOfCountriesAccordingToOKSM
        /**
         * @var OKWCurrencyCodes
         */
        'oKWCurrencyCodes' => false, # OKWCurrencyCodes
    ];

    /**
     * Коды валют по ОКВ
     * @var string|null
     */
    public ?string $oKWCurrencyCodes = null;

    /**
     * Коды стран по ОКСМ
     * @var string|null
     */
    public ?string $codesOfCountriesAccordingToOKSM = null;

    /**
     * Признак учета обязательства
     * @var string|null
     */
    public ?string $liabilityAccountingAttribute = null;

    /**
     * Причины отказа совершить сделку
     * @var string|null
     */
    public ?string $reasonsForNotMakingDeal = null;

    /**
     * Виды обращений с предложением совершить сделку
     * @var string|null
     */
    public ?string $typesOfRequestsToMakeDeal = null;

    /**
     * Виды приобретателей прав кредитора - юридического лица
     * @var string|null
     */
    public ?string $typesOfAcquirersOfTheRightsOfCreditorLegalEntity = null;

    /**
     * Виды источников
     * @var string|null
     */
    public ?string $typesOfSources = null;

    /**
     * Признак перехода прав кредитора к другому лицу
     * @var string|null
     */
    public ?string $signOfTheTransferOfTheRightsOfTheCreditorToAnotherPerson = null;

    /**
     * Причины прекращения передачи информации
     * @var string|null
     */
    public ?string $reasonsForStoppingTheTransferOfInformation = null;

    /**
     * Виды взыскиваемых долгов
     * @var string|null
     */
    public ?string $typesOfRecoverableDebts = null;

    /**
     * Признак соблюдения порядка возмещения
     * @var string|null
     */
    public ?string $signOfComplianceWithTheProcedureForCompensation = null;

    /**
     * Признак наличия франшизы
     * @var string|null
     */
    public ?string $signOfFranchise = null;

    /**
     * Признак иного обременения предмета залога
     * @var string|null
     */
    public ?string $signOfAnotherEncumbranceOfTheSubjectOfPledge = null;

    /**
     * Признак ненадлежащего исполнения обязательства
     * @var string|null
     */
    public ?string $signOfImproperPerformanceOfAnObligation = null;

    /**
     * Виды использованного обеспечения
     * @var string|null
     */
    public ?string $typesOfCollateralUsed = null;

    /**
     * Причины прекращения обеспечения
     * @var string|null
     */
    public ?string $reasonsForTerminatingCollateral = null;

    /**
     * Виды предметов залога и неденежных предоставлений по сделке
     * @var string|null
     */
    public ?string $typesOfCollateralAndNonMonetaryGrantsUnderTheTransaction = null;

    /**
     * Признак прекращения обязательства
     * @var string|null
     */
    public ?string $signOfTheTerminationOfTheObligation = null;

    /**
     * Признак просрочки должника более 90 дней
     * @var string|null
     */
    public ?string $signOfDelayOfTheDebtorMoreThan90Days = null;

    /**
     * Признак неподтвержденного льготного периода
     * @var string|null
     */
    public ?string $settlementSignForTheLastPayment = null;

    /**
     * Основания прекращения обязательства
     * @var string|null
     */
    public ?string $groundsForTerminatingAnObligation = null;

    /**
     * Виды соблюдения срока внесения платежей
     * @var string|null
     */
    public ?string $typesOfComplianceWithTheDeadlineForMakingPayments = null;

    /**
     * Виды соблюдения размера платежей
     * @var string|null
     */
    public ?string $typesOfPaymentCompliance = null;

    /**
     * Причины прекращения действия изменения договора
     * @var string|null
     */
    public ?string $reasonsForTerminationOfTheContractAmendment = null;

    /**
     * Виды прочих изменений договора
     * @var string|null
     */
    public ?string $typesOfOtherAmendmentsToTheContract = null;

    /**
     * Причины урегулирования проблемной задолженности
     * @var string|null
     */
    public ?string $reasonsForSettlingBadDebts = null;

    /**
     * Виды льготного периода
     * @var string|null
     */
    public ?string $gracePeriodTypes = null;

    /**
     * Виды изменения договора
     * @var string|null
     */
    public ?string $typesOfAmendmentOfTheContract = null;

    /**
     * Признак денежного обязательства субъекта
     * @var string|null
     */
    public ?string $signOfTheSubjectsMonetaryObligation = null;

    /**
     * Признак денежного обязательства источника
     * @var string|null
     */
    public ?string $signOfTheMonetaryObligationOfTheSource = null;

    /**
     * Признак возникновения обязательства в результате новации
     * @var string|null
     */
    public ?string $signOfTheEmergenceOfLiabilityAsResultOfInnovation = null;

    /**
     * Признак использования платежной карты
     * @var string|null
     */
    public ?string $signOfUsingPaymentCard = null;

    /**
     * Признак потребительского кредита (займа)
     * @var string|null
     */
    public ?string $signOfConsumerCredit = null;

    /**
     * Типы сделки
     * @var string|null
     */
    public ?string $transactionTypes = null;

    /**
     * Виды участия в сделке
     * @var string|null
     */
    public ?string $typesOfParticipationInTheTransaction = null;

    /**
     * Код операции, производимой с записью кредитной истории
     * @var string|null
     */
    public ?string $operationCode = null;

    /**
     * Причина предоставления операции D, производимой с записью кредитной истории
     * @var string|null
     */
    public ?string $reasonForProvidingCodeD = null;

    /**
     * Объём выполняемой операции, производимой с записью кредитной истории
     * @var string|null
     */
    public ?string $theVolumeOfTheOperationPerformed = null;

    /**
     * Виды документов, удостоверяющих личность
     * @var string|null
     */
    public ?string $documentTypes = null;

    /**
     * Виды адреса регистрации
     * @var string|null
     */
    public ?string $typeOfRegistrationAddress = null;

    /**
     * Виды дееспособности
     * @var string|null
     */
    public ?string $typesOfLegalCapacity = null;

    /**
     * Стадии рассмотрения дела о банкротстве
     * @var string|null
     */
    public ?string $stagesOfBankruptcyCase = null;

    /**
     * Виды номеров налогоплательщика
     * @var string|null
     */
    public ?string $typesOfTaxpayerNumbers = null;

    /**
     * Признак реорганизации
     * @var string|null
     */
    public ?string $signOfReorganization = null;

    /**
     * Признак регистрации в Российской Федерации
     * @var string|null
     */
    public ?string $signOfRegistrationInTheRF = null;

    /**
     * Признак неправомерных действий в деле
     * @var string|null
     */
    public ?string $signOfMisconductInCase = null;

    /**
     * Признак преднамеренного или фиктивного банкротства
     * @var string|null
     */
    public ?string $signOfIntentionalOrFictitiousBankruptcy = null;

    /**
     * Признак освобождения от исполнения требований кредиторов
     * @var string|null
     */
    public ?string $signOfExemptionFromFulfillmentOfCreditorsClaims = null;

    /**
     * Виды займа (кредита)
     * @var string|null
     */
    public ?string $typesOfLoan = null;

    /**
     * Цели займа (кредита)
     * @var string|null
     */
    public ?string $purposeOfTheLoan = null;

    /**
     * Получить сформированый отчет в виде xml документа
     * @return string
     */
    public function getReport()
    {
        foreach ($this as $key => $value) {
            if ($value) {
                $className = '\Equifax\CreditHistory\ReferenceBooks\\' . ucfirst($key);
                #self::$historyData[$key] = $className::instance()->set($value);
            }
        }
        $xmlData = new XmlGenerator\Generator(self::$historyData);
        return $xmlData->get();
    }

}
