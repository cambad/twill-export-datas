<?php

namespace App\Models;

use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\{HasSlug, HasTranslation};

class Article extends Model
{
    use HasTranslation;
    use HasSlug;

    protected $fillable = ['published', 'title', 'description'];

    public array $translatedAttributes = ['title', 'description', 'active'];

    public array $slugAttributes = ['title'];

    public $casts = [
        'published' => 'boolean',
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'deleted_at' => 'datetime:Y-m-d',
    ];
}
