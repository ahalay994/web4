<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Team;
use App\Models\TeamGallery;
use App\Models\Type;
use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminTeamsController extends Controller
{
    protected $model = Team::class;

    public function anyData()
    {
        $query = Team::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('type', function($row) {
                return Type::getOptions()[$row->type_id];
            })
            ->editColumn('description', function($row) {
                return strip_tags($row->description);
            })
            ->editColumn('image', function($row) {
                return '/' . Team::IMAGE_PATH . '/' . $row->image;
            })
            ->editColumn('sterilization_castration', function($row) {
                return $row->sterilization_castration == 1 ? 'Да' : 'Нет';
            })
            ->editColumn('is_home', function($row) {
                return $row->is_home == 1 ? 'Да' : 'Нет';
            })
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.teams.edit', ['id' => $row->id]), 'Редактировать', 'icon-pencil7', null],
                    [route('admin.teams.view', ['id' => $row->id]), 'Карточка', 'icon-pencil7', null],
                    [route('admin.teams.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
                        'data-method' => 'delete',
                        'data-confirm' => 'Вы действительно хотите это удалить?',
                    ]],
                    [null, null, null, null],
                    [route('admin.teams.gallery', ['id' => $row->id]), 'Галлерея', 'icon-pencil7', null],

                ]);
            })
            ->rawColumns(['type', 'action'])
            ->make(true);
    }

    public function index()
    {
        return view('admin::teams.index');
    }

    public function edit($id) {
        $entity = $this->model::findOrFail($id);

        return view('admin::teams.edit', ['entity' => $entity]);
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $entity = $this->model::findOrFail($data['id']);

        $imageName = (isset($data['image']) && $data['image'] != '') ? $data['image'] : null;

        if (isset($data['sterilization_castration']) && $data['sterilization_castration'] == 'on') {
            $data['sterilization_castration'] = 1;
        } else {
            $data['sterilization_castration'] = 0;
        }
        if (!isset($data['is_home'])) {
            $data['is_home'] = 0;
        }
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {

                $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);

                $imageName = $request->file('image')->getClientOriginalName();
                $request->image->move(public_path(Team::IMAGE_PATH), $imageName);
            }
        }

        $data['image'] = $imageName;

        $entity->update($data);
        $entity->save();

        return redirect()->route('admin.teams.index')
            ->with('msg.success', 'Запись сохранена.')
        ;
    }

    public function create() {
        return view('admin::teams.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        $imageName = null;

        if (isset($data['sterilization_castration']) && $data['sterilization_castration'] == 'on') {
            $data['sterilization_castration'] = 1;
        } else {
            $data['sterilization_castration'] = 0;
        }
        if (!isset($data['is_home'])) {
            $data['is_home'] = 0;
        }
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {

                $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);

                $imageName = $request->file('image')->getClientOriginalName();
                $request->image->move(public_path(Team::IMAGE_PATH), $imageName);
            }
        }

        $data['image'] = $imageName;

        $this->model::create($data);

        return redirect()->route('admin.teams.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id)
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.teams.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.teams.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }

    public function view($id)
    {
        $entity = $this->model::findOrFail($id);

        $entity['image'] = '/' . Team::IMAGE_PATH . '/' . $entity['image'];

        return view('admin::teams.view', compact('entity'));
    }

    public function gallery($id) {
        return view('admin::teams.gallery.index', compact('id'));
    }

    public function anyDataGallery($id)
    {
        $query = TeamGallery::where('id', $id)->get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('image', function($row) {
                return '/' . TeamGallery::IMAGE_PATH . '/' . $row->image;
            })
            ->addColumn('action', function($row) use ($id) {
                return admin_buttons([
                    [route('admin.teams.gallery.delete', ['id' => $id, 'id_img' => $row->id]), 'Удалить', 'icon-bin', [
                        'data-method' => 'delete',
                        'data-confirm' => 'Вы действительно хотите это удалить?',
                    ]],
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createGallery($id) {
        return view('admin::teams.gallery.create', ['id' => $id]);
    }

    public function saveGallery(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $imageName = null;

        if (count($data['image']) > 0) {
            foreach($data['image'] as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path(TeamGallery::IMAGE_PATH), $imageName);
                TeamGallery::create([
                    'team_id' => $id,
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('admin.teams.gallery', ['id' => $id])
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroyGallery($id, $id_img): \Illuminate\Http\RedirectResponse
    {
        $entity = $this->model::where('team_id', $id)->where('id', $id_img)->get();

        if ($entity->delete()) {
            return redirect()->route('admin.teams.gallery', ['id' => $id])
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.teams.gallery', ['id' => $id])
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }
}
