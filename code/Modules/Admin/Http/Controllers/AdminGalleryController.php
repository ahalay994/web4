<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminGalleryController extends Controller
{
    protected $model = \App\Models\Gallery::class;

    public function anyData()
    {
        $query = Gallery::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('image', function($row) {
                return '/' . Gallery::IMAGE_PATH . '/' . $row->image;
            })
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.gallery.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
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
        return view('admin::gallery.index');
    }

    public function edit() {
        $entity = $this->model::get();

        return view('admin::gallery.edit', ['entity' => $entity]);
    }

    public function create() {
        return view('admin::gallery.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        $imageName = null;

        if (count($data['image']) > 0) {
            foreach($data['image'] as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path(Gallery::IMAGE_PATH), $imageName);
                $this->model::create([
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('admin.gallery.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.gallery.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.gallery.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }
}
