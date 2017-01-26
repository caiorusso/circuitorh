<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        $feed = \Feeds::make('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=0&ned=pt-BR_br&topic=n&output=rss', 0, true);

        $data = [ 'title' => $feed->get_title(),
                  'permalink' => $feed->get_permalink(),
                  'items' => $feed->get_items(),
        ];

        return view('feed.read', $data);

    }
}
