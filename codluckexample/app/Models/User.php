<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'avatar',
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'address',
        'phone',
        'department_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the department for the user.
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    /**
     * Get the products for the user.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    /**
     * Get the receipts for the user.
     */
    public function receipts()
    {
        return $this->hasMany(Receipt::class);
    }
    /**
     * Get the delivery note for the user.
     */
    public function deliveryNotes()
    {
        return $this->hasMany(DeliveryNote::class);
    }
    public function roleUsers()
    {
        return $this->hasMany(RoleUser::class, 'user_id', 'id');
    }
}
