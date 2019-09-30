<?php

namespace App\Traits\Blast\UserPhoneNumber;

/* Models */
use App\Models\Blast\UserPhoneNumber;
use App\Models\Blast\PhoneNumber;
use App\Models\Blast\Category;
use App\Models\Blast\Source;

use DB;

trait UserPhoneNumberCollection
{
    public function __construct()
    {
        $this->UserPhoneNumberModel = UserPhoneNumber::class;
        $this->UserPhoneNumberTable = getTable($this->UserPhoneNumberModel);

        $this->PhoneNumberModel = PhoneNumber::class;
        $this->PhoneNumberTable = getTable($this->PhoneNumberModel);

        $this->CategoryModel = Category::class;
        $this->CategoryTable = getTable($this->CategoryModel);

        $this->SourceModel = Source::class;
        $this->SourceTable = getTable($this->SourceModel);
    }

    public function GetUserPhoneNumberDetails($UserPhoneNumbers)
    {
        $UserPhoneNumberID = $UserPhoneNumbers->pluck('id');

        $UserPhoneNumbers->map(function($UserPhoneNumber) {
            return $UserPhoneNumber;
        });
        return $UserPhoneNumbers;
    }

}
