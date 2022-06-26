<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Gaji;
use App\Models\Presensi;
use App\Models\Jabatan;
use DateTime;
use DateTimeZone;

class AdminController extends Controller
{
    public function searchPresensi(){
        return view('dashboard.admin.searchpresensi');
    }

    public function listPresensi(Request $request){
        $tanggal = $request->date;

        return view('dashboard.admin.listpresensi', [
            'presensi' => Presensi::where('tanggal', $tanggal)->get()
        ]);
    }

    public function listGaji(){
        return view('dashboard.admin.listgaji', [
            'pegawai' => Gaji::orderBy('tanggal', 'desc')->get()
        ]);
    }

    public function tambahGaji(){
        return view('dashboard.admin.tambahgaji', [
            'pegawai' => User::all()
        ]);
    }

    public function simpanGaji(Request $request){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $bulan = $date->format('Y-m');

        $gaji = Gaji::where([
            ['user_id','=',$request->nama],
            ['tanggal','like', '%' . $bulan . '%'],
        ])->first();

        if ($gaji){
            return redirect('/dashboard/admin/tambahgaji')->with('exists', 'Salary for this month already exists!');
        }

        Gaji::create([
            'user_id' => $request->nama,
            'tanggal' => $tanggal,
            'tunjangan' => $request->tunjangan,
            'potongan' => $request->potongan,
            'gaji_lembur' => $request->gaji_lembur,
            'bonus' => $request->bonus
        ]);

        return redirect('/dashboard/admin/listgaji')->with('success', 'Salary for this month has been added!');
    }

    public function editGaji(){
        return view('dashboard.admin.editgaji', [
            'pegawai' => User::all()
        ]);
    }

    public function updateGaji(Request $request){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $bulan = $date->format('Y-m');

        Gaji::where([
            ['user_id','=',$request->nama],
            ['tanggal','like', '%' . $bulan . '%'],
            ])
            ->update([
                'user_id' => $request->nama,
                'tanggal' => $tanggal,
                'tunjangan' => $request->tunjangan,
                'potongan' => $request->potongan,
                'gaji_lembur' => $request->gaji_lembur,
                'bonus' => $request->bonus,
            ]);

            return redirect('/dashboard/admin/listgaji')->with('success1', 'Salary has been updated!');
    }

    public function setJabatan(){
        return view('dashboard.admin.setjabatan', [
            'pegawai' => User::all(),
            'jabatan' => Jabatan::all()
        ]);
    }
}