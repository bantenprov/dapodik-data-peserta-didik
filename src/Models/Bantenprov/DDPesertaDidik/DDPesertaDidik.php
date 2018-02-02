<?php

namespace App\Models\Bantenprov\DDPesertaDidik;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DDPesertaDidik extends Model 
{

    protected $table = 'dd_peserta_didiks';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

}