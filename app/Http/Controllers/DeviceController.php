<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Device;
use App\Http\Requests\AddDeviceRequest;

class DeviceController extends Controller
{
    public function getIndex()
    {
        $devices = User::find(\Auth::user()->id)->devices;
        return view('device.index', compact('devices'));
    }
    public function getAdd()
    {
        return view('device.add');
    }
    public function postDevice(AddDeviceRequest $request)
    {
        $device = new Device;
        $device->name = $request->name;
        $device->user_id = \Auth::user()->id;
        $device->save();
        return redirect('/');
    }
}
