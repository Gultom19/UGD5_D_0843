<?php
namespace App\Http\Controllers;
/* Import Model */
use App\Models\Pegawai;
use Illuminate\Http\Request;
class PegawaiController extends Controller
{
/**
* index
*
* @return void
*/
public function index()
{
    //get posts
$pegawais = Pegawai::get();
//render view with posts
return view('pegawai.index', compact('pegawais'));
}
/**
* create
*
* @return void
*/
public function create()
{
return view('pegawai.create');
}
/**
* store
*
* @param Request $request
* @return void
*/
public function store(Request $request)
{
//Validasi Formulir
$this->validate($request, [
'nomor_induk_pegawai' => 'required',
'nama_pegawai' => 'required',
'id_departemen' => 'required',
'email' => 'required',
'telepon' => 'required',
'gender' => 'required',
'status' => 'required'
]);
//Fungsi Simpan Data ke dalam Database
Departemen::create([
'nomor_induk_pegawai' => $request->nama_departemen,
'nama_pegawai' => $request->nama_manager,
'id_departemen' => $request->nama_departemen,
'email' => $request->nama_manager,
'telepon' => $request->nama_departemen,
'gender' => $request->nama_manager,
'status' => $request->jumlah_pegawai
]);
try{
//Mengisi variabel yang akan ditampilkan pada view mail
$content = [
'body' => $request->nama_pegawai,
];
//Mengirim email ke emailtujuan@gmail.com
Mail::to('emailtujuan@gmail.com')->send(new
DepartemenMail($content));
//Redirect jika berhasil mengirim email
return redirect()->route('pegawai.index')->with(['success'
=> 'Data Berhasil Disimpan, email telah terkirim!']);
}catch(Exception $e){
//Redirect jika gagal mengirim email
return redirect()->route('departemen.index')->with(['success'
=> 'Data Berhasil Disimpan, namun gagal mengirim email!']);
}
}
public function update(Request $request, $id)
{
    $request->validate(['nama_pegawai'=>'required', ]);
Pegawai::find($id)->update($request->all());
 return redirect()->route('pegawai.index')->with('succes','Item Berhasil Update');
    }
public function edit($id)
 {
    $pegawais=Pegawai::find($id);
return view('pegawai.edit',compact('pegawai'));
}
public function destroy($id)
{
 departemen::find($id)->delete();
return redirect()->route('pegawai.index')->with('succes','Item Berhasil di Hapus');
}
}