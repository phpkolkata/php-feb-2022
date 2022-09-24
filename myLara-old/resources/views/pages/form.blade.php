
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('pages.form.submit') }}" method="post">
   @csrf()
    Name: <input type="text" name="name" value=""><span>{{ $errors->first('name')}}</span>
    <br>
    Age: <input type="text" name="age"><br>
    <button>Submit</button>
</form>
