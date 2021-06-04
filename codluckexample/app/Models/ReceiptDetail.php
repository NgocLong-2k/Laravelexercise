<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceiptDetail extends Model
{
    use HasFactory;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'receipt_id',
        'product_id',
        'quantity',
        'price',
        'tax',
    ];
    /**
     * Get the receipt for the receipt detail.
     */
    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
    /**
     * Get the products for the receipt detail.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
