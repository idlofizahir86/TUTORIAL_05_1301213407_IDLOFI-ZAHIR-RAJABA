<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index() {
        $data["nama"] = "Idlofi Zahir";
        $data["asal"] = "Kalimantan Tengah";

        return view('v_latihan1', $data);
    }

    public function method2(){
		$data['title'] = "Daftar Mahasiswa";
		$data['daf_mhs'] = array(
			array("nama" => "Idlofi", "asal" => "Bandung"),
	 	    array("nama" => "Zahir", "asal" => "Palangka Raya"),
			array("nama" => "Rajaba", "asal" => "Seruyan")
		);
		return view('v_latihan2', $data);
	}
}
