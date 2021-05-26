<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
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
        'description',
    ];
    /**
     * Get all of the receipts for the supplier
     */
    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
}
