<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;

use App\CereriOferta;
use App\Mail\CerereOferta;

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

    public function configurator()
    {
        return view('configurator');
    }

    public function proceseaza(Request $request) {
        $validator = Validator::make($request->all(), [
            // date identificare
            'nume' => 'required',
            'prenume' => 'required',
            'email' => 'required|email',
            'telefon' => 'required',
            // date cladire
            'destinatie_cladire' => 'required',
            'lungime' => 'required',
            'latime' => 'required',
            'inaltime' => 'required',
            'suprafata_totala' => 'required',
            'panta_acoperis' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $model = CereriOferta::create($request->all());

        Mail::send(new CerereOferta($model));

        return redirect("confirmare");

    }

    public function confirmare() {
        return view("confirmare");
    }
}
