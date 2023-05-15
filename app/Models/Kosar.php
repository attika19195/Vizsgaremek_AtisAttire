<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kosar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'termek',
        'mennyiseg'
    ];

    public function termek(): BelongsTo
    {
        return $this->belongsTo(Termek::class, 'termek', 'termek_id')->with('modellObj');
    }

    public function felhasznalok(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'f_azon');
    }
}
