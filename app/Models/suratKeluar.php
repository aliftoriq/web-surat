<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class suratKeluar extends Model
{
    use HasFactory;
    protected $guarded = [

    ];

    public function instansi(){
        return $this->belongsTo(instansi::class);
        // , 'instansi_id','id'
    }




}
