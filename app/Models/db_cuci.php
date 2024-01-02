<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Customer;
use App\Models\User;

class db_cuci extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'db_cuci';

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'cust_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getJoinedData()
    {
        $result = $this->select('db_cuci.*', 'customer.name as customer_name', 'customer.no_hp as customer_no_hp','users.id as user_id')
            ->join('customer', 'customer.id', '=', 'db_cuci.cust_id')
            ->join('users', 'users.id', '=', 'db_cuci.user_id')
            ->orderBy('db_cuci.created_at', 'asc')
            ->get();

        return $result;
    }
}
