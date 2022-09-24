<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>

    <img src="{{ asset('profile/cKDWP5kzkCgaApS2qDo2ri0wvcIG3JiYG9E1f2iZ.jpg') }}">
    {{-- <img src="{{ asset(.'/images/'.$article->image) }}" alt="" title=""> --}}
    <form action="{{  route('uploads')  }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="img" id="img">
        <input type="submit" name="SUBMIT">
    </form>
</body>
</html>
