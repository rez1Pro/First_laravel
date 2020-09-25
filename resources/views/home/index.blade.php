<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Array's data</h1>
	<?= $x; ?> <!-- Ata to sadharon php er niyom -->

    <br/>
	<h2>Just array</h2>

	{{ $an_array[0] }}   <!-- blade use korar karone advantage -->

	<br/>

	<h2>associated array</h2>
	{{ $associated_array['name'] }}
	{{ $associated_array['GPA'] }}

</body>
</html>