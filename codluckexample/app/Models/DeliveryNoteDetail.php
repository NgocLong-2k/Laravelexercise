<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryNoteDetail extends Model
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
        'delivery_note_id',
        'product_id',
        'quantity',
        'price',
        'tax',
    ];
    /**
     * Get the User for the products.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    /**
     * Get the deliveryNoteDetails for the deliveryNote.
     */
    public function deliveryNote()
    {
        return $this->belongsTo(DeliveryNote::class);
    }
}
