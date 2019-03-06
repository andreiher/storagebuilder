<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function step1()
    {
        return view('steps.step1');
    }

    public function step2()
    {
        return view('steps.step2');
    }

    public function step3()
    {
        return view('steps.step3');
    }

    public function summary()
    {
        return view('steps.summary');
    }

    public function desprenoi()
    {
        return view('desprenoi');
    }
}
