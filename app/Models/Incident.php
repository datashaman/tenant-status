<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Wildside\Userstamps\Userstamps;

class Incident extends Model
{
    use HasFactory;
    use Userstamps;

    protected $casts = [
        'resolved_at',
    ];

    public function venture(): BelongsTo
    {
        return $this->belongsTo(Venture::class);
    }

    public function updates(): HasMany
    {
        return $this->hasMany(Update::class)->orderByDesc('id');
    }

    public function resolve(): bool
    {
        $this->status = 'resolved';

        return $this->save();
    }

    public function unresolve(): bool
    {
        $this->status = 'investigating';

        return $this->save();
    }
}
