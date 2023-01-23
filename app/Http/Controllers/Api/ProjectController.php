<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('technologies', 'type')->paginate($perPage = 2, $columns = ['*'], $pageName = 'page');
        return response()->json([
            'succes' => true,
            'results' => $projects,
        ]);
    }
    public function show($slug)
    {
        $project = Project::with('technologies', 'type')->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'succes' => true,
                'results' => $project
            ]);
        } else {
            return response()->json([
                'succes' => false,
                'error' => 'Niente da da fare non ho trovato niente'
            ]);
        }
    }
}
