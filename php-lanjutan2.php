<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
				for ($i=10; $i <= 25; $i++) { 
					echo "$i adalah ";
					if ($i%2 != 0) {
						echo "bilangan ganjil";
					} else {
						echo "bilangan genap";
					}
					echo "<br>";
				}
			?>
</body>
</html>