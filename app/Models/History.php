<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'histories';
    protected $primaryKey = 'id';
    protected $fillable = [ 'name', 'alamat', 'no_hp', 'username', 'type','jumlah' ];
}
