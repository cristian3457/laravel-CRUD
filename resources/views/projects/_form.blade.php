<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input class="form-control bg-light shadow-sm border-0" id="title" type="text" name="title" value="{{ old('title', $project->title )}}">
</div>
<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control bg-light shadow-sm border-0" id="url" type="text" name="url" value="{{ old('url') }}">
</div>
<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control bg-light shadow-sm border-0" id="description" name="description">{{ old('description', $project->description ) }}</textarea>
</div>

<button class="btn btn-primary btn-large btn-block">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>