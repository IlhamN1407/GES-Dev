<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_penawaran';
    protected $table = 'tb_penawaran';

    protected $fillable = [
        'email',
        'nama_PT',
        'Alamat',
        'Perihal',
        'No_HP',
    ];

    // protected $guarded = ['id'];

    protected $hidden =[

    ];

    
}
