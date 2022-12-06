<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'creator',
        'title',
        'body',
        'description',
    ];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'creator');
    }
}
