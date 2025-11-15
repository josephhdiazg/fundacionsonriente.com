<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'amount',
        'frequency',
        'payment_method',
        'message'
    ];
}
