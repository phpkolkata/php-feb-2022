<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php
    // if($data['is_new']){
    //     echo "<h1>New Post</h1>";
    // }
    // else{
    //     echo "<h1>Old Post</h1>";
    // }

?>

@if($data['is_new'])
 <h1>New Post</h1>
 @else
 <h1>Old Post</h1>
@endif

{{-- @for()
@endfor

@foreach()

@endforeach --}}

    <?php //echo $data['title']?>
  my post title - {{ $data['title'] }}<br>




</body>
</html>
