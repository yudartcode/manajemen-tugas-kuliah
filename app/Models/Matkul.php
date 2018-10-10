<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matkul extends Model
{
    //jika nama tabelnya mempunyai huruf s diakhir misal matkuls, maka code dibawah ga usah ditulis
    // protected $table = 'matkul';


	use SoftDeletes;
	protected $dates = ['deleted_at'];

    //public $timestamps = false; //created_at updated_at nggak dipake di table tugas.



    protected $fillable = ['nama_matkul', 'dosen', 'sks']; //whitelist

    //protected $guarded = ['created_at', 'updated_at']; //blascklist
}
