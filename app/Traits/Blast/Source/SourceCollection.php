<?php

namespace App\Traits\Blast\Source;

/* Models */
use App\Models\Blast\Source;

use DB;

trait SourceCollection
{
    public function __construct()
    {
        $this->SourceModel = Source::class;
        $this->SourceTable = getTable($this->SourceModel);
    }

    public function GetSourceDetails($Sources)
    {
        $SourceID = $Sources->pluck('id');

        $Sources->map(function($Source) {
            return $Source;
        });
        return $Sources;
    }

}
