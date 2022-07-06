<?php

namespace App\Repositories;

use App\Models\Article;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleTranslations;

class ArticleRepository extends ModuleRepository
{
    use HandleTranslations;
    use HandleSlugs;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }
}
