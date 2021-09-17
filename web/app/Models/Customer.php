<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'customer';
    protected $fillable = [
        'name_coustomer', 'phone_customer', 'address_customer', 'emai_customer', 'city_customer'
    ];
    protected $primarykey = 'id';
}
