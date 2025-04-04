<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'imagen',
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];
    protected $appends = [
        'formatted_price',
    ];
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }
    public function getImagenAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }
    public function setImagenAttribute($value)
    {
        if (is_string($value)) {
            $this->attributes['imagen'] = $value;
        } elseif ($value instanceof \Illuminate\Http\UploadedFile) {
            $this->attributes['imagen'] = $value->store('products', 'public');
        }
    }
}
