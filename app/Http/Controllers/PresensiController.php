<?php

namespace App\Http\Controllers;


use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function checkin(){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tanggal','=',$tanggal],
        ])->first();

        if ($presensi){
            return redirect('/dashboard/presensi/masuk')->with('existsci', 'You have checked in today!');
        }

        elseif((strtotime($localtime) - strtotime('08:00:00')) > strtotime('00:15:00')){
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'jammasuk' => $localtime,
                'status' => 'Late'
            ]);
        }

        else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'jammasuk' => $localtime,
                'status' => 'On Time',
            ]);
        }

        return redirect('/dashboard/presensi/masuk')->with('checkin', 'Your Attendance has been recorded!');
    }

    public function checkout(){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tanggal','=',$tanggal],
        ])->first();
        
        $dt=[
            'jamkeluar' => $localtime,
            'jamkerja' => strtotime($localtime) - strtotime($presensi->jammasuk)
        ];

        if ($presensi->jamkeluar == ""){
            $presensi->update($dt);
            return redirect('/dashboard/presensi/keluar')->with('checkout', 'Your Attendance has been recorded!');
        }else{
            return redirect('/dashboard/presensi/keluar')->with('existsco', 'You have checked out today!');
        }
    }
}