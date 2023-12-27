<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = DB::table('mhs2')->get();
        return view('data-mahasiswa',['mahasiswa'=>$mahasiswa]);
    }
//     public function tambah(Request $request)
//     {
//         DB::table('mhs2')->insert([
//             'nim' => $request->nim,
//             'nama' => $request->nama,
//             'jk' => $request->jk,
//             'prodi' => $request->prodi,
//             'alamat' => $request->alamat
//         ]);
//         return redirect('/data-mhs')->with(
//             'status',
//             'Data Mahasiswa Berhasil Ditambahkan!'
//         );
// }
public function tambah(Request $request)
    {
        try {
            $data = DB::table('mhs2')->insert([
                    'nim' => $request->nim,
                    'nama' => $request->nama,
                    'jk' => $request->jk,
                    'prodi' => $request->prodi,
                    'alamat' => $request->alamat,
                    "foto" => $request->foto,]);
                    if ($data) {
                        // Jika penyisipan berhasil, tangani pengunggahan file
                        if ($request->hasFile('foto')) {
                            $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
                            // Perbarui kolom "foto" dengan nama file
                            DB::table('mhs2')
                                ->where('nim', $request->nim) // Anggap "nim" adalah pengidentifikasi unik
                                ->update(['foto' => $request->file('foto')->getClientOriginalName()]);
                        }
                    }

            return redirect('/data-mhs')->with(
                'alert',
                'Data Berhasil Diinput'
            );
        } catch (\Exception $e) {
            return redirect()->back()->width('alert', 'gagal update data');
        }
    }
    public function form()
    {
        return view('tambah-data-mhs');
    }
    public function editForm(Request $request, $nim){
        $mahasiswa = mahasiswa::where('nim', $nim)->first();
        //$mahasiswa = DB::table('mhs2')->get('nim');

        return view('edit', compact('mahasiswa'));
    }
    // public function update(Request $request, $nim){
    //     $request->validate([
    //         'nim' => 'required',
    //         'nama' => 'required',
    //         'jk' => 'required',
    //         'prodi' => 'required',
    //         'alamat' => 'required',
    //     ]);

    //     $mahasiswa = mahasiswa::where('nim', $nim)->update([
    //         'nim' => $request->nim,
    //         'nama' => $request->nama,
    //         'jk' => $request->jk,
    //         'prodi' => $request->prodi,
    //         'alamat' => $request->alamat,
    //     ]);

    //     return redirect('/data-mhs')->with('message', 'Update success');
    // }
    public function update(Request $request, $nim){
        try {
      // Mendapatkan nama file foto sebelum pembaruan
        $oldFoto = DB::table('mhs2')->where('nim', $nim)->value('foto');

            // Update data dalam database
            $updated = DB::table('mhs2')
                ->where('nim', $nim) // Anggap "nim" adalah pengidentifikasi unik
                ->update([
                    'nim' => $request->nim,
                    'nama' => $request->nama,
                    'jk' => $request->jk,
                    'prodi' => $request->prodi,
                    'alamat' => $request->alamat,
                    "foto" => $request->foto,
                ]);

            if ($updated) {
                // Jika pembaruan berhasil, tangani pengunggahan file
                if ($request->hasFile('foto')) {
                    // Hapus foto lama jika ada
                    if (!empty($oldFoto)) {
                        $oldFotoPath = public_path('gambar/') . $oldFoto;
                        if (file_exists($oldFotoPath)) {
                            unlink($oldFotoPath);
                        }
                    }
                if ($request->hasFile('foto')) {
                    $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
                    // Perbarui kolom "foto" dengan nama file
                    DB::table('mhs2')
                        ->where('nim', $nim) // Anggap "nim" adalah pengidentifikasi unik
                        ->update(['foto' => $request->file('foto')->getClientOriginalName()]);
                }

                return redirect('/data-mhs')->with(
                    'alert',
                    'Data Berhasil Diperbarui'
                );
            }
        } else {
                return redirect()->back()->with('alert', 'Gagal update data');
            }
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('alert', 'Gagal update data');
        }
    }
    public function destroy($nim){
        $mahasiswa = mahasiswa::where('nim', $nim)->delete();
        
        return redirect('/data-mhs')->with('message', 'Deleted');
    }
}