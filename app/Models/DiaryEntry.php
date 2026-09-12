<?php

namespace App\Models;

use App\Support\WithoutEmDashes;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'entry_date',
    'mood',
    'energy',
    'nystatin_morning',
    'nystatin_afternoon',
    'nystatin_evening',
    'symptom_tags',
    'note',
    'meals',
])]
class DiaryEntry extends Model
{
    use WithoutEmDashes;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'entry_date' => 'date',
            'mood' => 'integer',
            'energy' => 'integer',
            'nystatin_morning' => 'boolean',
            'nystatin_afternoon' => 'boolean',
            'nystatin_evening' => 'boolean',
            'symptom_tags' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
