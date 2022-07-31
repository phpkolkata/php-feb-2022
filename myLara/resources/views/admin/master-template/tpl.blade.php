<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
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
