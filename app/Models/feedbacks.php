<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class feedbacks extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';
    protected $fillable = [
        'performance_appraisal_id',
        'feedback',
    ];
    public function performanceAppraisal():BelongsTo
    {
        return $this->belongsTo(PerformanceAppraisal::class);
    }
}
