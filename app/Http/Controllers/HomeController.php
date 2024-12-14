<?php
namespace App\Http\Controllers;

use App\Models\Duty;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $duties = Duty::all();
        return view('home', compact('duties'));
    }
}