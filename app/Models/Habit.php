<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Habit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id'
    ];

    // um hábito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // um hábito pode ter muitos logs
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }

    // um hábito pode ter muitos registros
    public function habitLogEntries(): HasMany
    {
        return $this->hasMany(HabitLog::class);

    }
}
