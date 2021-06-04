<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'quantity',
        'photo',
        'category_id',
        'sale_off',
        'user_id',
    ];
    /**
     * Get the category for the products.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the User for the products.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the receipt detail for the products.
     */
    public function receiptDetails()
    {
        return $this->hasMany(ReceiptDetail::class);
    }
    /**
     * Get the delivery note detail for the products.
     */
    public function deliveryNoteDetails()
    {
        return $this->hasMany(DeliveryNoteDetail::class);
    }
}
