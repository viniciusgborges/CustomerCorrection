<?php

namespace Vb\CustomerCorrection\Plugin\Api;

class CustomerRepositoryInterfacePlugin
{
    public function beforeSave(\Magento\Customer\Api\CustomerRepositoryInterface $subject,
                               \Magento\Customer\Api\Data\CustomerInterface $customer, $passwordHash = null)
    {
        $customer -> setFirstname(mb_convert_case($customer -> getFirstname(), MB_CASE_TITLE));
        $customer -> setLastname(mb_convert_case($customer -> getLastname(), MB_CASE_TITLE));
        $customer -> setEmail(mb_convert_case($customer -> getEmail(), MB_CASE_LOWER));
        return [$customer, $passwordHash];
    }
}
