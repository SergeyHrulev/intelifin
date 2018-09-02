<?php

//returns route index page

Breadcrumbs::register('main', function ($breadcrumbs){
    $breadcrumbs->push('Главная', route('main'));
});

Breadcrumbs::register('credit-expert', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Кредитный эксперт', route('credit-expert'));
});
Breadcrumbs::register('chief-financial-officer', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Ваш Финансовый директор', route('chief-financial-officer'));
});
Breadcrumbs::register('cfo-school', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Школа Финансового директора', route('cfo-school'));
});
Breadcrumbs::register('easy-start', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Программа "легкий старт"', route('easy-start'));
});
Breadcrumbs::register('business-security', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Безопасность бизнеса', route('business-security'));
});
Breadcrumbs::register('personal-banking', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Ваш банкир', route('personal-banking'));
});
Breadcrumbs::register('contacts', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Контакты', route('contacts'));
});
//returns routes article
Breadcrumbs::register('articles', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Статьи', route('articles'));
});
Breadcrumbs::register('article', function ($breadcrumbs, $article){
   $breadcrumbs->parent('articles');
   $breadcrumbs->push($article->title, route('articles', $article->slug));
});

//returns routes events
Breadcrumbs::register('events', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Мероприятия', route('events'));
});
Breadcrumbs::register('event', function ($breadcrumbs, $event){
    $breadcrumbs->parent('events');
    $breadcrumbs->push($event->title, route('events', $event->slug));
});
//returns routes htmlmap
Breadcrumbs::register('htmlmap', function ($breadcrumbs){
    $breadcrumbs->parent('main');
    $breadcrumbs->push('Карта сайта', route('htmlmap'));
});