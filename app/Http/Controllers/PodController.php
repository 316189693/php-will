<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PodCast;
use App\jobs\ProcessPodcast;
use PDO;

class PodController extends Controller
{
    public function index(Request $request)
    {
        for ($i = 0; $i < 10; $i++) {
            $t = new PodCast();
            $t->pod = 'test' . $i;
            $t->save();
            ProcessPodcast::dispatch($t)
                ->delay(now()->addMinutes(1));
        }
    }
}
