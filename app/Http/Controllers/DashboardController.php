<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('admin')){

          $user = Auth::user();
          return view('admin.dashboard', compact('user'));
           
       }elseif(Auth::user()->hasRole('pmt')){
          
          $user = Auth::user();
          return view('pmt.dashboard', compact('user'));

       }elseif(Auth::user()->hasRole('office')){

        
        $user = Auth::user();
        return view('office.dashboard', compact('user'));

       }elseif(Auth::user()->hasRole('employee')){

        $user = Auth::user();
        return view('employee.dashboard', compact('user'));
     }
   }
}
