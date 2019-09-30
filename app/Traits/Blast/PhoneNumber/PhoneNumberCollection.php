<?php

namespace App\Traits\Blast\PhoneNumber;

/* Models */
use App\Models\Blast\PhoneNumber;
use App\Models\Blast\UserPhoneNumber;

use DB;

trait PhoneNumberCollection
{
    public function __construct()
    {
        $this->PhoneNumberModel = PhoneNumber::class;
        $this->PhoneNumberTable = getTable($this->PhoneNumberModel);

        $this->UserPhoneNumberModel = UserPhoneNumber::class;
        $this->UserPhoneNumberTable = getTable($this->UserPhoneNumberModel);
    }

    public function GetPhoneNumberDetails($PhoneNumbers)
    {
        $PhoneNumberID = $PhoneNumbers->pluck('id');

        $PhoneNumbers->map(function($PhoneNumber) {
            return $PhoneNumber;
        });
        return $PhoneNumbers;
    }

}
