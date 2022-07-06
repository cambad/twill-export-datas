<?php

namespace App\Models\Translations;

use App\Models\Article;
use A17\Twill\Models\Model;

class ArticleTranslation extends Model
{
    protected string $baseModuleModel = Article::class;
}
