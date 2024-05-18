<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desrada_ismail extends Model
{
    use HasFactory;

    protected $table = "desrada_ismail";

    protected $fillable = [
        "nim",
        "nama",
        "kelas",
        "jenis_kelamin"
    ];
}
