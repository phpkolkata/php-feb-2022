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
<form action="{{ route('admin.cat.store') }}" method="post">
    @csrf()
    Name: <input type="text" name="name" class="form-control"><br>
    isActive: <select name="is_active" class="form-control">
        <option value="y">Yes</option>
        <option value="n">No</option>
    </select><br>
    <button class="btn btn-primary">Add Category</button>
</form>
</div>
@endsection

{{-- @section('nav')
@parent
@endsection --}}
