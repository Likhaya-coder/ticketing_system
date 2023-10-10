<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TicketStatus;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 
        'description', 
        'attachment', 
        'status'
    ];

    protected $casts = [
        'status' => TicketStatus::class,
    ];
}
