<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        // $portfolio = \DB::table('projects')->get();
        // $projects = Project::orderBy('created_at','DESC')->get();
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }
    public function show( $id )
    {
        $project =  Project::findOrFail($id);
        return view('projects.show', [
            'project' => $project
        ]);
    }
    public function create( )
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }
    public function store( SaveProjectRequest $request)
    {
        // $title =  request('title');
        // $url =  request('url');
        // $description =  request('description');

        // $fields = request()->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);
        Project::create( $request->validated() );
        // Project::create([
        //     'title' => $title,
        //     'description' => $description,
        // ]); // request()->all()  // request()->only('title','description')

        return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito.');
    }
    public function edit( Project $project)
    {
        return view('projects.edit',[
            'project' => $project
        ]);
    }
    public function update( Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con éxito.');
    }

    public function destroy( Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con éxito.');
    }

}
