<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model
{
    use HasFactory,SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_of_receipt',
        'supplier_id',
        'user_id',
        'total',
        'note',
    ];
    /**
     * Get the User for the receipt
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the receipt detail for the receipt.
     */
    public function receiptDetails()
    {
        return $this->hasMany(ReceiptDetail::class);
    }
    /**
     * Get the supplier for the receipt
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
