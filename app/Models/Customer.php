<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\db_cuci;


class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [ 'name', 'alamat', 'no_hp'];

    public function db_cuci(): BelongsTo
    {
        return $this->belongsTo(db_cuci::class, 'cust_id');
    }
}