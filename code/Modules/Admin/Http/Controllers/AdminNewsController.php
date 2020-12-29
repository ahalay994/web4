<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\News;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminNewsController extends Controller
{
    protected $model = \App\Models\News::class;

    public function anyData()
    {
        $query = News::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('image', function($row) {
                return '/' . News::IMAGE_PATH . '/' . $row->image;
            })
            ->editColumn('short_description', function($row) {
                return strip_tags($row->short_description);
            })
            ->addColumn('published', function($row) {
                return Carbon::createFromTimeString($row->published_at)->timezone('Europe/Minsk')->format('d.m.Y H:i');
            })
            ->addColumn('author', function($row) {
                return User::getOptions()[$row->user_id];
            })
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.news.edit', ['id' => $row->id]), 'Редактировать', 'icon-pencil7', null],
                    [route('admin.news.view', ['id' => $row->id]), 'Карточка', 'icon-profile', null],
                    [route('admin.news.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
                        'data-method' => 'delete',
                        'data-confirm' => 'Вы действительно хотите это удалить?',
                    ]],
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index()
    {
        return view('admin::news.index');
    }

    public function edit($id) {
        $entity = $this->model::findOrFail($id);

        return view('admin::news.edit', ['entity' => $entity]);
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();
        $imageName = null;

        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {

                $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);

                $imageName = $request->file('image')->getClientOriginalName();
                $request->image->move(public_path(News::IMAGE_PATH), $imageName);
            }
        }

        $data['image'] = $imageName;
        $data['published_at'] = dateWithoutTimeZone($data['published_at']);

        $entity = $this->model::findOrFail($data['id']);

        $entity->update($data);
        $entity->save();

        return redirect()->route('admin.news.index')
            ->with('msg.success', 'Запись сохранена.')
        ;
    }

    public function create() {
        return view('admin::news.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        $imageName = null;

        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {

                $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);

                $imageName = $request->file('image')->getClientOriginalName();
                $request->image->move(public_path(News::IMAGE_PATH), $imageName);
            }
        }

        $data['image'] = $imageName;
        $data['published_at'] = dateWithoutTimeZone($data['published_at']);

        $this->model::create($data);

        return redirect()->route('admin.news.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id)
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.news.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.news.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }

    public function view($id)
    {
        $entity = $this->model::findOrFail($id);

        $entity['image'] = '/' . News::IMAGE_PATH . '/' . $entity['image'];
        $entity['published_at'] = normalizeDate($entity['published_at']);

        return view('admin::news.view', compact('entity'));
    }

}
