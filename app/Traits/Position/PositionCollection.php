<?php

namespace App\Traits\Position;

/* Models */
use App\Models\Position;

use DB;

trait PositionCollection
{
    public function __construct()
    {
        $this->PositionModel = Position::class;
        $this->PositionTable = getTable($this->PositionModel);
    }

    public function GetPositionDetails($Positions)
    {
        $PositionID = $Positions->pluck('id');

        $Positions->map(function($Position) {
            return $Position;
        });
        return $Positions;
    }

}
