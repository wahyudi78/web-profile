<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;

class PatchController extends Controller
{
    public function PatchAbout(Request $request, About $about) {
        // $about->users = $request->users;
        // $about->jenis = $request->jenis;
        // $about->description = $request->description;
        $about->status = $request->status;
        // $about = $request;

        $about->save();

        return AboutResource::make($about);
    }
}
