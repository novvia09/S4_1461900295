<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public $timestamps = false;
    use HasFactory;
    protected $table = "pasien";

    protected $fillable = ['nama', 'alamat'];
}
