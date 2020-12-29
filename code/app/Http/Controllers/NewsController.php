<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request): \Illuminate\Contracts\Support\Renderable
    {
        $data = [];
        $data['title'] = 'Главная | ' . env('APP_NAME');
        $data['menu'] = $this->buildMenu();
        $data['settings'] = $this->buildSettings();

        $data['news'] = News::orderBy('id', 'DESC')->get();

        return view('news', $data);
    }

    public function indexItem(Request $request, $id) {
        $data = [];
        $data['title'] = 'Главная | ' . env('APP_NAME');
        $data['menu'] = $this->buildMenu();
        $data['settings'] = $this->buildSettings();

        $team = News::whereId($id)->first();
        $data['news'] = $team;

        return view('news_item', $data);
    }
}
