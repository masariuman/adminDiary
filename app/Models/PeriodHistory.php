<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeriodHistory extends Model
{
    protected $table = 'period';
    protected $fillable = [
        'link',
        'period_id',
        'year',
        'month',
        'history_status',
        'active',
        'created_at',
        'updated_at'
    ];

    public function period()
    {
        return $this->belongsTo('App\Models\Period', 'period_id');
    }
}
