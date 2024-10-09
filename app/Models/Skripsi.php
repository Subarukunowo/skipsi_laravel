<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;
    protected $fillable= [
        'Judul','nama','nim','angkatan','Dosenpembimbing1',"Dosenpembimbing2"
    ];
}
