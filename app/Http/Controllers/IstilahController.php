<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Istilah;

class IstilahController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showIstilah($nama_istilah)
    {
        $istilah = Istilah::where('Nama_Istilah', $nama_istilah)->firstOrFail();
        return view('istilah', compact('istilah'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $istilah = Istilah::where('Nama_Istilah', 'LIKE', "%$query%")->first();

        if ($istilah) {
            return view('istilah', compact('istilah'));
        }

        return redirect()->back()->with('error', 'Istilah tidak ditemukan.');
    }

    public function glossary()
    {
        $istilahs = Istilah::all();
        return view('glossary', compact('istilahs'));
    }
}