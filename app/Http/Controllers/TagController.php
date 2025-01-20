<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag){
        $jobs = $tag->jobs()->get();

        return view('results', [
            'jobs' => $jobs,]);
    }
}
