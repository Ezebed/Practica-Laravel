<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'sender_id',
        'body',
    ];

    public function chat():BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }

    public function User():HasOne
    {
        return $this->hasOne(User::class,'sender_id');
    }
}
