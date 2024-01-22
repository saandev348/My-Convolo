<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['phone_num', 'cust_email']; // Add 'phone_num' to the $fillable array

    protected $attributes = [
        'status' => 'NEW',
        'company' => 0, // Set your desired default value for 'company'
    ];
    public $timestamps=false;
}
