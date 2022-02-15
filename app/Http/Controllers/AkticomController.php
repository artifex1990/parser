<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\AkticomsImport;
use DB;

class AkticomController extends Controller
{
    private const COUNT_ELEMENT_ON_PAGE = 30;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImportExport()
    {
       return view('file-import');
    }

    /**
     * Display a listing of the resource
     */
    public function output()
    {
        $data['akticoms'] = DB::table('akticoms')->select()->paginate(self::COUNT_ELEMENT_ON_PAGE);
        return view('output', $data);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new AkticomsImport, $request->file('file')->store('temp'));

        return redirect('/output')->with('success', 'All good!');
    }
}
