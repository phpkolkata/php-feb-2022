@extends('admin.master-template.tpl')

@section('head')
{{-- extra css or js code --}}
@endsection


@section('title')
Category Page
@endsection


@section('body')

@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

<h1>Category </h1>
<div><a href="{{ route('admin.cat.add') }}">add more category</a></div>
<table border="1" class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>isActive</th>
        <th>Option</th>
    </tr>
@foreach ($db as $row )
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->name }}</td>
    <td>{{ $row->is_active }}</td>
    <td><a href="{{ route('admin.cat.del',['id'=>$row->id]) }}">delete</a></td>
</tr>
@endforeach
</table>
<div >
    {{ $db->links() }}
</div>
@endsection

{{-- @section('nav')
@parent
@endsection --}}
