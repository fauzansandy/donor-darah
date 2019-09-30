<?php

namespace App\Traits;

use App\Models\Branch;
use App\Models\BranchToConfigNumbering;
use App\Models\ConfigNumbering;

trait Numbering
{
    public function getTransactionNumber($branch, $type)
    {
        $ConfigNumbering = ConfigNumbering::where('branch_id', $branch->id)->where('type', $type)->first();
        $prefix = $ConfigNumbering->prefix;
        $length = $ConfigNumbering->length;
        $lastValue = $ConfigNumbering->last_value;
        $transactionNumber = str_pad((int)$lastValue + 1, (int)$length, '0', STR_PAD_LEFT);
        $transactionNumber = $prefix . $transactionNumber;
        return [
            'success' => true,
            'value' => $transactionNumber
        ];
    }

    public function addTransactionNumber($branch, $type, $lastTransactionNumber)
    {
        $ConfigNumbering = ConfigNumbering::where('branch_id', $branch->id)->where('type', $type)->first();
        $ConfigNumbering->last_value = $ConfigNumbering->last_value + 1;
        $ConfigNumbering->value = $lastTransactionNumber;
        $ConfigNumbering->save();
    }
}
