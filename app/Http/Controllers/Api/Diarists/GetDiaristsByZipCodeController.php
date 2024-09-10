<?php

namespace App\Http\Controllers\Api\Diarists;

use App\Enums\TypeUserEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Diarists\DiaristsPublicCollection;
use App\Http\Resources\Api\Diarists\DiaristsPublicResource;
use App\Models\User;
use Illuminate\Http\Request;

class GetDiaristsByZipCodeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $diarists = User::diarists()->get();
        return new DiaristsPublicCollection($diarists);
    }
}
