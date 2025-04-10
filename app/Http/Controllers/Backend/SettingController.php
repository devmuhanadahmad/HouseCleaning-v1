<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function create()
    {
        return view('dashboard.setting.index', [
            //'currencies' => Currencies::getNames(),
            //'locales' => Languages::getNames(),
        ]);
    }

    public function store(Request $request)
    {
       
        foreach ($request->input('config') as $key => $value) {

            Setting::setValue($key, $value);
        }

        Cache::forget('app-settings');

        return redirect()->route('dashboard.settings')
            ->with('success', 'Settings saved!');
    }

    public function clearCache()
    {
        Artisan::command('cache:clear');
    }
}
