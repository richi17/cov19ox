<?php

namespace App\Http\Controllers;

use App\Http\Requests\VaccinationRequest;
use App\Models\Vaccination;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccinationController extends Controller
{
    public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
    }

    public function showVaccination(){
        auth();
        $documents = DB::table('vaccinations')->get();
        return view('vaccination')->with('documents', $documents);
    }

    public function addVaccination(VaccinationRequest $request){
        auth();
        $result = $request->img->storeOnCloudinary();
        Vaccination::insert([
            'first_name'=> session('user')->first_name,
            'last_name'=> session('user')->last_name,
            'img_url' => $result->getSecurePath(),
            'img_id' => $result->getPublicId(),
        ]);
        return redirect('vaccination')->with('success', "Your document has been sent, wait for confirmation!");
    }
}
