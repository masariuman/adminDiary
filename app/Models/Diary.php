<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table = 'diary';
    protected $fillable = [
        'link',
        'period_id',
        'date',
        'title',
        'content',
        'active',
        'created_at',
        'updated_at'
    ];

    public function diaryHistory()
    {
        return $this->hasMany('App\Models\DiaryHistory', 'diary_id');
    }
    public function period()
    {
        return $this->belongsTo('App\Models\Period', 'period_id');
    }
}
