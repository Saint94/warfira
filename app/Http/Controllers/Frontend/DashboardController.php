<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfilRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profil()
    {
        return view('frontend.dashboard.profil');
    }

    public function updateProfil(ProfilRequest $request, $id)
    {
        User::FindOrFail($id)->update($request->all());
        return redirect()->route('mon-profil.index')->with('success','Profil mis à jour avec succès');
    }

    public function vols()
    {
        return view('frontend.dashboard.vol');
    }

    public function hotels()
    {
        return view('frontend.dashboard.hotel');
    }

    public function voitures()
    {
        return view('frontend.dashboard.voiture');
    }
}
