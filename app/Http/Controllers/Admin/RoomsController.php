<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::orderBy('id', 'desc');

        if (!empty($request->searchname))
        {
            $rooms = $rooms->where('name', 'LIKE', '%' . $request->searchname . '%');
        }

        $rooms = $rooms->paginate(10);

        return view('admin-news.room.index', compact('rooms'));
    }

    public function create(Request $request)
    {

        $type = array(
            'Putra'         => 'Putra',
            'Putri'         => 'Putri');

        return view('admin-news.room.create', compact('type'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'namerooms'  => 'required'
        ]);

        $params = [
            'name'       => $request->input('namerooms'),
            'type'       => $request->input('type')
        ];

        $rooms = Room::create($params);

        return redirect()->route('admin.rooms');
    }

    public function edit($id)
    {
        $rooms = Room::find($id);

        if ($rooms == null)
        {
            return view('admin.layouts.404');
        }

        $type = array(
            'Putra'         => 'Putra',
            'Putri'         => 'Putri');

        return view('admin.room.edit', compact('rooms', 'type'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'namerooms'  => 'required'
        ]);

        $rooms             = Room::find($id);
        $rooms->name       = $request->input('namerooms');
        $rooms->type       = $request->input('type');
        $rooms->save();

        return redirect()->route('admin.rooms');
    }

    public function destroy($id)
    {
        Room::find($id)->delete();

        return redirect()->route('admin.rooms')->with('success', 'Kelas berhasil dihapus');
    }
}
