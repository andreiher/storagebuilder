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

    public function termenisiconditii()
    {
        return view('termenisiconditii');
    }

    public function termsandconditions()
    {
        return view('termsandconditions');
    }

    public function configurator()
    {
        return view('configurator');
    }

    public function proceseaza(Request $request) {




        $validator = Validator::make($request->all(), [
//            'nume' => 'required',
//            'prenume' => 'required',
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

        if($request->has("snapshot") && !empty($request->input("snapshot"))) {
            $path = public_path().'/snapshots/' . $model->id.".jpg";
            \Image::make(file_get_contents($request->input("snapshot")))->save($path);
        }

        Mail::send(new CerereOferta($model));

        return redirect(route("confirmare"));

    }

    public function confirmare() {
        return view("confirmare");
    }

    public function trimiteProiect()
    {
        return view('trimite-proiect');
    }

    public function proceseazaTrimiteProiect(Request $request) {


        $validator = Validator::make($request->all(), [
//            'nume' => 'required',
//            'prenume' => 'required',
            'firma' => 'required',
            'localitate' => 'required',
            'email' => 'required|email',
            'telefon' => 'required',
            'project_file' => 'required|max:100000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $model = CereriOferta::create($request->all());

        if($request->has("project_file")) {
            $fileName = str_replace($request->project_file->getClientOriginalExtension(),"",$request->project_file->getClientOriginalName())."-".time().'.'.$request->project_file->getClientOriginalExtension();

            $request->project_file->storeAs("project_files", $fileName, 'projects_folder');

            $model->project_file = $fileName;
            $model->save();
        }

        Mail::send(new CerereOferta($model));

        return redirect(route("confirmare"));
    }
}
