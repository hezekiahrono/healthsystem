<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RandomController extends Controller
{
    //
    public function getCandidates() {
        $party = User::find(1);
        $spouses = $party->$spouses; // Returns a Laravel Collection
        return response(['spouse' => $spouses], 200); // Returns JSON object containing an array of candidates
      }

}
