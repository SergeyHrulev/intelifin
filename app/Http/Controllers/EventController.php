<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Modules\SEO\Seo;

class EventController extends Controller
{
    public function index(){
        $data = [
            'metatitle' => 'Мероприятия| intelifin.ru',
            'metadesc' => 'Мероприятия · Анонс конференций  · Ведущие спикеры отрасли  · Без воды  · Заходите!',
            'metacanonical' => ''
        ];

        $head = Seo::extractHead($data);

        $events = Event::all();
        return view('pages.events.events', [
            'events' => $events,
            'head' => $head
        ]);
    }

    public function getEvent(Event $event, $slug){
        $event = $event->getEventBySlug($slug);
        //dd($event);
        $data = [
            'metatitle' => $event[0]['metatitle'],
            'metadesc' => $event[0]['metadescription'],
            'metacanonical' => $event[0]['metacanonical'] !== null ? $event[0]['metacanonical'] : ''
        ];

        $head = Seo::extractHead($data);
        return view('pages.events.event', [
            'event' => $event[0],
            'head' => $head
        ]);
    }
}
