<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryNote extends Model
{
    use HasFactory,SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_of_delivery_note',
        'customer_id',
        'user_id',
        'total',
        'delivery_price',
        'note',
    ];
    /**
     * Get the User for the delivery_note.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the delivery note detail for the delivery note.
     */
    public function deliveryNoteDetails()
    {
        return $this->hasMany(DeliveryNoteDetail::class);
    }
    /**
     * Get the customer for the delivery_note.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
