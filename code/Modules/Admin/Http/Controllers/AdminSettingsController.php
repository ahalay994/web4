<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminSettingsController extends Controller
{
    protected $model = Settings::class;

    public function anyData()
    {
        $query = Settings::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.settings.edit', ['id' => $row->id]), 'Редактировать', 'icon-pencil7', null],
                    [route('admin.settings.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
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
        return view('admin::settings.index');
    }

    public function edit($id) {
        $entity = $this->model::findOrFail($id);

        return view('admin::settings.edit', ['entity' => $entity]);
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $entity = $this->model::findOrFail($data['id']);

        $entity->update($data);
        $entity->save();

        return redirect()->route('admin.settings.index')
            ->with('msg.success', 'Запись сохранена.')
        ;
    }

    public function create() {
        return view('admin::settings.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        $this->model::create($data);

        return redirect()->route('admin.settings.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.settings.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.settings.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }
}
