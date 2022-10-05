<?php
namespace App\Http\Controllers;
/* Import Model */
use App\Models\Proyek;
use Illuminate\Http\Request;
class ProyekController extends Controller
{
/**
* index
*
* @return void
*/
public function index()
{
    //get posts
$proyeks = Proyek::get();
//render view with posts
return view('proyek.index', compact('proyeks'));
}
}