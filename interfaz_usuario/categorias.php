<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Figtree&display=swap");

* {
	margin: 5px;
	padding: 10px;
	box-sizing: border-box;
	font-family: "Figtree", sans-serif;
}

body {
	display: grid;
	place-content: center;
	min-height: 100vh;
	background: #c8c4cf;
}
h2{
    color:#fff;
}

.container {
	position: relative;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
	gap: 1em;
	width: 800px;
	height: 500px;
	transition: all 400ms;
}

.container:hover .box {
	filter: grayscale(100%) opacity(24%);
}

.box {
	position: relative;
	background: var(--img) center center;
	background-size: cover;
	transition: all 400ms;
	display: flex;
	justify-content: center;
	align-items: center;
}

.container .box:hover {
	filter: grayscale(0%) opacity(100%);
}

.container:has(.box-1:hover) {
	grid-template-columns: 3fr 1fr 1fr 1fr 1fr;
}

.container:has(.box-2:hover) {
	grid-template-columns: 1fr 3fr 1fr 1fr 1fr;
}

.container:has(.box-3:hover) {
	grid-template-columns: 1fr 1fr 3fr 1fr 1fr;
}

.container:has(.box-4:hover) {
	grid-template-columns: 1fr 1fr 1fr 3fr 1fr;
}

.container:has(.box-5:hover) {
	grid-template-columns: 1fr 1fr 1fr 1fr 3fr;
}

.box:nth-child(odd) {
	transform: translateY(-16px);
}

.box:nth-child(even) {
	transform: translateY(16px);
}

.box::after {
	content: attr(data-text);
	position: absolute;
	bottom: 20px;
	background: #000 ;
	color: #fff;
	padding: 10px 10px 10px 14px;
	letter-spacing: 4px;
	text-transform: uppercase;
	transform: translateY(60px);
	opacity: 0;
	transition: all 400ms;
}

.box:hover::after {
	transform: translateY(0);
	opacity: 1;
	transition-delay: 400ms;
}

    </style>

   <center> <h2>Categorias</h2> </center>
<br><br><br>
<div class="container">
	<div class="box box-1" style="--img: url(https://surtitodo.vtexassets.com/assets/vtex.file-manager-graphql/images/1baab20e-a42e-49b5-9bfb-42bb9a375cc9___27819712095faf8376a61d27eb589e80.jpg);" data-text="Vestidos"></div>
	<div class="box box-2" style="--img: url(https://stopjeans.vtexassets.com/arquivos/ids/210086-500-auto?v=638436398554530000&width=500&height=auto&aspect=true);" data-text="Conjunto"></div>
	<div class="box box-3" style="--img: url(https://images.stylight.net/image/upload/t_web_product_330x440max_nobg/q_auto:eco,f_auto/aclz62neepwmib6zdjjd.webp);" data-text="Ropa elegante"></div>
	<div class="box box-4" style="--img: url(https://i.pinimg.com/736x/79/27/fc/7927fc1fcfe745bd1ef535c063584170.jpg);" data-text="Vestidos de noche"></div>
	<div class="box box-5" style="--img: url(https://i.pinimg.com/736x/89/7d/19/897d199589f88c469c820d8fb7b47aa8.jpg);" data-text="Patalones"></div>
</div>
</body>
</html>