@extends('admin.master-template.tpl')

@section('head')
{{-- extra css or js code --}}
@endsection


@section('title')
Add Category
@endsection


@section('body')


<div class="mx-auto w-50 shadow card p-5">
    <h2>Add Category</h2>
<form action="{{ route('admin.cat.update') }}" method="post">
    @csrf()
    <input type="hidden" name="id" value={{ $data->id }}>
    Name: <input type="text" name="name" class="form-control" value="{{ $data->name }}"><br>
    isActive: <select name="is_active" class="form-control">
        <option value="y" @if($data->is_active == 'y') selected="selected" @else '' @endif>Yes</option>
        <option value="n" @if($data->is_active == 'n') selected="selected" @else '' @endif>No</option>
    </select><br>
    <button class="btn btn-primary">Add Category</button>
</form>
</div>
@endsection

{{-- @section('nav')
@parent
@endsection --}}
