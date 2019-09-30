<?php

namespace App\Http\Middleware\Upload;

use Closure;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\IReader;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use App\Http\Middleware\BaseMiddleware;

class Excel extends BaseMiddleware
{
    private $Mimes = ['vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/plain', 'text/csv', 'application/vnd.ms-excel'];
    private $Expect = [ 'json', 'key' ];
    private $DataArray = [];
    protected $RequestExpect = 'json';

    private function Initiate()
    {
        $this->Excel = $this->_Request->file('excel');
        if ($this->_Request->file('file')) {
            $this->Excel = $this->_Request->file('file');
        }
        if ($this->_Request->input('expect')) {
            $this->RequestExpect = $this->_Request->input('expect');
        }
    }

    private function ReadExcel()
    {
        $this->Spreadsheet = IOFactory::load($this->Excel);
        $this->Worksheet = $this->Spreadsheet->getActiveSheet();
        if (!in_array($this->RequestExpect, $this->Expect)) {
            return false;
        } else {
            if ($this->RequestExpect === 'json') {
                $rows = [];
                $columnKey = [];
                foreach ($this->Worksheet->getRowIterator() AS $row) {
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(FALSE);
                    $cells = [];
                    foreach ($cellIterator as $cell) {
                        $cells[] = $cell->getValue();
                    }
                    $rows[] = $cells;
                }
                foreach ($rows as $key => $row) {
                    if ($key === 0) {
                        foreach ($row as $key => $column) {
                            if ($column) {
                                $columnKey[] = $column;
                            }
                        }
                    }
                    break;
                }
                foreach ($rows as $rowKey => $row) {
                    if ($rowKey > 0 && $rowKey) {
                        $newRow = [];
                        foreach ($row as $key => $column) {
                            if (isset($columnKey[$key])) {
                                $newRow[$columnKey[$key]] = $column;
                            }
                        }
                        $this->DataArray[] = $newRow;
                    }
                }
            }
        }
        return true;
    }

    private function ReadCsv()
    {
        $reader = new Csv();
        $filePathName = (string)$this->Excel;
        $this->Spreadsheet = $reader->load($filePathName);
        $this->Worksheet = $this->Spreadsheet->getActiveSheet();
        if (!in_array($this->RequestExpect, $this->Expect)) {
            return false;
        } else {
            if ($this->RequestExpect === 'json') {
                $rows = [];
                $columnKey = [];
                foreach ($this->Worksheet->getRowIterator() AS $row) {
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(FALSE);
                    $cells = [];
                    foreach ($cellIterator as $cell) {
                        $cells[] = $cell->getValue();
                    }
                    $rows[] = $cells;
                }
                foreach ($rows as $key => $row) {
                    if ($key === 0) {
                        foreach ($row as $key => $column) {
                            if ($column) {
                                $columnKey[] = $column;
                            }
                        }
                    }
                    break;
                }
                foreach ($rows as $rowKey => $row) {
                    if ($rowKey > 0 && $rowKey) {
                        $newRow = [];
                        foreach ($row as $key => $column) {
                            if (isset($columnKey[$key])) {
                                $newRow[$columnKey[$key]] = $column;
                            }
                        }
                        $this->DataArray[] = $newRow;
                    }
                }
            }
        }
        return true;
    }

    private function Validation()
    {
        if (!$this->Validator::Require($this->Excel)) {
            $this->Json::set('exception.code', 'EmptyExcel');
            $this->Json::set('exception.message', trans('validation.'.$this->Json::get('exception.code')));
            return false;
        } elseif (!$this->Validator::CheckMimeType($this->Excel->getMimeType(), $this->Mimes)) {
            $this->Json::set('exception.code', 'InvalidExcel');
            $this->Json::set('exception.message', trans('validation.'.$this->Json::get('exception.code')) . ' ' . $this->Excel->getMimeType());
            return false;
        }
        if (($this->Excel->getMimeType() !== 'text/plain') && !$this->ReadExcel()) {
            return false;
        }
        if (($this->Excel->getMimeType() === 'text/plain') && !$this->ReadCsv()) {
            return false;
        }
        return true;
    }

    public function handle($request, Closure $next)
    {
        $this->Initiate();
        if ($this->Validation()) {
            $this->Payload->put('Excel', $this->Excel);
            $this->Payload->put('Spreadsheet', $this->Spreadsheet);
            $this->Payload->put('Worksheet', $this->Worksheet);
            $this->Payload->put('DataArray', $this->DataArray);

            $this->_Request->merge(['Payload' => $this->Payload]);
            return $next($this->_Request);
        } else {
            return response()->json($this->Json::get(), $this->HttpCode);
        }
    }
}
