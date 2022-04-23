<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = 'period';
    protected $fillable = [
        'link',
        'year',
        'month',
        'active',
        'created_at',
        'updated_at'
    ];

    public function diary()
    {
        return $this->hasMany('App\Models\Diary', 'period_id');
    }
    public function diaryHistory()
    {
        return $this->hasMany('App\Models\DiaryHistory', 'period_id');
    }
    public function periodHistory()
    {
        return $this->hasMany('App\Models\PeriodHistory', 'period_id');
    }
}
