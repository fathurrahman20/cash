<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 'bank_id', 'title', 'amount', 'status','description','transaction_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    protected function createdAt(): Attribute
     {
         return Attribute::make(
             get: fn ($value) => Carbon::parse($value)->format('d-M-Y H:i:s'),
         );
     }
}