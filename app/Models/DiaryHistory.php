<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiaryHistory extends Model
{
    protected $table = 'diary_history';
    protected $fillable = [
        'link',
        'period_id',
        'diary_id',
        'date',
        'title',
        'content',
        'history_status',
        'active',
        'created_at',
        'updated_at'
    ];

    public function diary()
    {
        return $this->belongsTo('App\Models\Diary', 'diary_id');
    }
    public function period()
    {
        return $this->belongsTo('App\Models\Period', 'period_id');
    }
}
