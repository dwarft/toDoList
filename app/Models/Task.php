<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\User;


class Task extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'deskripsi',
        'due_date',
        'is_complete',
        'is_important',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'is_complete' => 'boolean',
        'is_important' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
