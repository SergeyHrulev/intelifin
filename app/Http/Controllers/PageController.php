<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servise;
use App\Modules\SEO\Seo;

class PageController extends Controller
{
    public function main(){

        $data = [
            'metatitle' => 'Финансовый аутсорсинг в Санкт-Петербурге| intelifin.ru',
            'metadesc' => 'Финансовый аутсорсинг · Предоставим финансовый отдел в пользование · Опытные сотрудники · Выгодная цена · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);
        $servises = Servise::all();

        dump($servises);

        return view('pages.main', [
            'servises' => $servises,
            'head' => $head
        ]);
    }
    public function contacts(){
        $data = [
            'metatitle' => 'Контакты| intelifin.ru',
            'metadesc' => 'Контакты',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);
        return view('pages.contacts', [
            'head' => $head
        ]);
    }

    public function finDictionary(){
        $data = [
            'metatitle' => 'ФинСловарь | intelifin.ru',
            'metadesc' => 'В Словаре финансовых терминов Вы найдете полезную информацию о том, что означают те ли иные финансовые термины· Заходите!',
            'metacanonical' => ''
        ];
        $head = Seo::extractHead($data);
        return view('pages.fin_dictionary', [
            'head' => $head
        ]);
    }

    public function servises(){
        $data = [
            'metatitle' => 'Услуги| intelifin.ru',
            'metadesc' => 'Услуги для Вашего бизнеса · Оперативный подбор кадров · Опытные сотрудники · Выгодная цена · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);

        return view('pages.servises', [
            'head' => $head
        ]);
    }

    public function htmlmap(){
        return view('pages.htmlmap');
    }
}
