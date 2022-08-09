<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @yield('head')
</head>
<body>

<table width="100%" height="600px" border="1">
	<tr>
		<td colspan="2" height="100px" valign="middle">
			<div style="float: left;width: 500px;border:0px solid #f00"><h1><i>Welcome Admin</i></h1></div>
			<div style="float: right;border:0px solid #f00;margin-top:30px;margin-right:10px;"><a href="logout.php">logout</a></div>
		</td>
	</tr>	<tr>
		<td width="20%" valign="top">
            @section('nav')
			<ul style="font-size:20px;">
				<li><a href="/admin/category">Manage Category</a></li>
				<li><a href="/admin/products">Manage Product</a></li>
			</ul>
            @show
		</td>
		<td width="80%" valign="top">
		<h1>@yield('body')</h1>

</td>
</tr>
</table>

</body>
</html>
