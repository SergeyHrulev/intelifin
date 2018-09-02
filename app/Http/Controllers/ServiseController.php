<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\SEO\Seo;

class ServiseController extends Controller
{
    public function creditExpert(){
        $data = [
            'metatitle' => 'Кредитный эксперт  | intelifin.ru',
            'metadesc' => 'Помощь в получении кредита · Досрочное погашение · Ведение кредитного плана  · Заходите!',
            'metacanonical' => ''
        ];
        $head = Seo::extractHead($data);
        return view('pages.servises.credit_expert', ['head' => $head]);
    }

    public function cfo(){
        $data = [
            'metatitle' => 'Ваш Финансовый директор| intelifin.ru',
            'metadesc' => 'Ваш Финансовый директор · Аутсорсинг Финансового директора · Найти Финансового директора · Опытные сотрудники · Выгодная цена · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);
        return view('pages.servises.cfo', [
            'head' => $head
        ]);
    }

    public function cfoSchool(){
        $data = [
            'metatitle' => 'Школа финансового директора в Спб| intelifin.ru',
            'metadesc' => 'Школа финансового директора · Удобная программа обучения · Подготовим ваши финансовые кадры · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);
        return view('pages.servises.cfo_school', [
            'head' => $head
        ]);
    }

    public function easyStart(){
        $data = [
            'metatitle' => 'Программа "Легкий Старт"| intelifin.ru',
            'metadesc' => 'Программа "Легкий Старт" · Помощь в выборе формы собственности · Запуск бизнеса "под ключ" · Огранизация учета · Постановка компании на учет · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);
        return view('pages.servises.easy_start', [
            'head' => $head
        ]);
    }

    public function businessSecurity(){
        $data = [
            'metatitle' => 'Безопастность Бизнеса| intelifin.ru',
            'metadesc' => 'Безопастность Бизнеса · Все про безопастность бизнеса · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);

        return view('pages.servises.business_security', [
            'head' => $head
        ]);
    }

    public function personalBanking(){
        $data = [
            'metatitle' => 'Ваш персональный банкир | intelifin.ru',
            'metadesc' => 'Персональный банкир · Подбор банковских продуктов · Помощь с банковскими инструментами · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);

        return view('pages.servises.personal_banking', [
            'head' => $head
        ]);
    }
}
