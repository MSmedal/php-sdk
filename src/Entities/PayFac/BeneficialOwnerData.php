<?php

namespace GlobalPayments\Api\Entities\PayFac;

use GlobalPayments\Api\Entities\PayFac\OwnersData;

class BeneficialOwnerData
{
    /**
     * Number of Beneficiary Owners, should be maximum 5.
     *
     * @var string
     */
    public $ownersCount;

    /**
     * Sellerís Authorized Signer Last Name. By default Merchantís Last name is saved
     *
     * @var Array GlobalPayments\Api\Entities\PayFac\OwnersData
     */
    public $ownersList = [];
}
