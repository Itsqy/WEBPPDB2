<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulirController extends Controller
{
    public function index()
    {
        return view('content.formulir');
    }
    public function store(Request $request)
    {
        $formulir = Formulir::create([
            'full_name' => $request->full_name,
            'nisn' => $request->nisn,
            'place' => $request->place,
            'birthday' => $request->birthday,
            'agama' => $request->agama,
            'address' => $request->address,
            'anak_ke' => $request->anak_ke,
            'jml_saudara' => $request->jml_saudara,
            'school' => $request->school,
            'gender' => $request->gender,
            'tinggal_dengan' => $request->tinggal_dengan,
            'penyakit' => $request->penyakit,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'kerja_ayah' => $request->kerja_ayah,
            'kerja_ibu' => $request->kerja_ibu,
            'pend_akhira' => $request->pend_akhira,
            'pend_akhiri' => $request->pend_akhiri,
            'infoppdb' => $request->infoppdb,
            'prestasi' => $request->prestasi,
            'photo'         => $request->file('photo')->store('image-data'),
            'rapot'         => $request->file('rapot')->store('rapot-data'),
            'ijazah'         => $request->file('ijazah')->store('ijazah-data'),
            'file_prestasi'         => $request->file('file_prestasi')->store('prestasi-data'),
            'phone' => $request->phone,
            'no_telpayah' => $request->no_telpayah,
            'user_id' => Auth::user()->id
        ]);
        // dd($formulir);
        return view('content.beforedetail', compact('formulir'));
    }
    public function beforedetailshow()
    {
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        if ($formulir) {
            return view('content.beforedetail', compact('formulir'));
        } else {

            return view('content.formulir');
        }
    }
    public function tableusershow()
    {
        $i = 1;
        $formulir = Formulir::all();
        return view('admin.tableuser', compact('formulir', 'i'));
    }
    public function detail()
    {
        $i = 1;
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();
        if ($formulir) {
            return view('content.detail', compact('formulir', 'i', 'user'));
        } else {
            return back();
        }
    }
    public function update(Request $request, $id)
    {
        // $total = $request->nilai1 + $request->nilai2;
        $formulir = Formulir::find($id);
        $formulir->update([

            'nilai1' => $request->nilai1,
            'nilai2' => $request->nilai2,
        ]);

        $formulir->save();
        return view('content.afterdetail', [
            'formulir'  => $formulir,
            // 'title' => $title,
            // 'total' => $total,


        ]);
    }

    public function afterdetail()
    {
        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        if ($formulir) {
            return view('content.afterdetail', compact('formulir'));
        } else {
            return view('content.formulir');
        }
    }

    public function card()
    {

        $user = Auth::user();
        $formulir = Formulir::where('user_id', '=', $user->id)->first();

        // $formulir = Formulir::findOrFail($id);
        if ($formulir) {
            return view('content.card', compact('formulir'));
        } else {
            return view('content.formulir');
        }
    }

    public function cetakcard($id)
    {
        $formulir = Formulir::find($id);
        return view('content.cetakcard', compact('formulir'));
    }

    public function absen()
    {
        $i = 1;
        $formulir = Formulir::all();
        return view('admin.absen', compact('formulir', 'i'));
    }
    public function cetakabsen()
    {
        // $title = 'absen';
        $i = 1;
        $formulir = Formulir::all();
        return view('admin.cetakabsen', compact('formulir', 'i'));
    }
}
