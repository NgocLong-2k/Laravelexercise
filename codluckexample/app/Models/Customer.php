<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory,SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'city',
        'country',
        'address',
        'phone',
        'email',
        'customer_type',
        'description',
    ];
    /**
     * Get all of the delivery notes for the customer
     */
    public function deliveryNotes()
    {
        return $this->hasMany(DeliveryNote::class);
    }
}
