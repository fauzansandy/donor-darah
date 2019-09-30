<?php

namespace App\Http\Controllers\Upload;

use Cache;
use Closure;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Support\Response\Json;
use App\Support\Generate\Hash as GenerateKey;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function UploadExcel(Request $request)
    {
        $expect = 'json';
        !$request->input('expect') || $expect = $request->input('expect');
        if ($expect === 'json') {
            $DataArray = $request->Payload->all()['DataArray'];
            Json::set('data.expect', $expect);
            Json::set('data.records', $DataArray);
        }
        return response()->json(Json::get(), 201);
    }
}
