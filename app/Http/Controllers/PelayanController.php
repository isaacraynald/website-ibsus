<?php

namespace App\Http\Controllers;

use App\Pelayan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelayanController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $listPelayan = DB::table('pelayan')
            ->select("*")->get();
        return view('admin/pelayan/list')->with("listPelayan", $listPelayan);
    }

    public function listWl(){
        $listPelayan = DB::table('pelayan')
            ->select("*")->where('wl', true)->get();
        return view('admin/pelayan/wl')->with("listPelayan", $listPelayan);
    }

    public function addPelayan(Request $request){
        $pelayan = new Pelayan();
        $pelayan->nama= $request->input('nama');
        $pelayan->marga= $request->input('marga');
        $pelayan->jenis_kelamin= $request->input('gender');
        $pelayan->alamat= $request->input('alamat');
        $pelayan->wijk= $request->input('wijk');
        $pelayan->hp= $request->input('noHp');
        $pelayan->status= $request->input('status');

        foreach ($request->input('peminatan') as $peminatan ){
            if($peminatan == 'wl'){
                $pelayan->wl = true;
                break;
            }
            else{
                $pelayan->wl = false;
            }
        }
        foreach ($request->input('peminatan') as $peminatan ){
            if($peminatan == 'pemusik'){
                $pelayan->pemusik = true;
                break;
            }
            else{
                $pelayan->pemusik = false;
            }
        }
        foreach ($request->input('peminatan') as $peminatan ){
            if($peminatan == 'singer'){
                $pelayan->singer = true;
                break;
            }
            else{
                $pelayan->singer = false;
            }
        }
        foreach ($request->input('peminatan') as $peminatan ){
            if($peminatan == 'multimedia'){
                $pelayan->multimedia = true;
                break;
            }
            else{
                $pelayan->multimedia = false;
            }
        }
        foreach ($request->input('peminatan') as $peminatan ){
            if($peminatan == 'bulib'){
                $pelayan->bulib = true;
                break;
            }
            else{
                $pelayan->bulib = false;
            }
        }

        $pelayan->save();

        return back()->with('message', 'success');

    }

    public function formPelayan(){

        return view("formPelayan");
    }
}
