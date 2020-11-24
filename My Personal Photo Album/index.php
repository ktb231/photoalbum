<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}

p {
	text-align: center;
}

.outer-grid {
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}

.inner-grid {
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}

.inner-grid img {
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}

@media screen and (max-width: 800px) {
	.inner-grid {
		flex: 50%;
		max-width: 50%;
		}
	}

@media screen and (max-width: 600px) {
	.inner-grid {
		flex: 100%;
		max-widt: 100%;
		}
	}

</style>
<body>
<div class = "outer-grid">
<div class = "inner-grid">
<p> My Elementary Days </p>
<img src="E1.jpg"/></a>
<a> <img src="E2.jpg"/></a>
<a> <img src="E3.jpg"/></a>
<a> <img src="E4.jpg"/></a>
<a> <img src="E5.jpg"/></a>
</div>

<div class = "inner-grid">
<p> My Junior High Days </p>
<img src="JHS1.jpg"/></a>
<img src="JHS7.jpg"/></a>
<img src="JHS6.jpg"/></a>
<img src="JHS4.jpg"/></a>
<img src="JHS5.jpg"/></a>
</div>

<div class = "inner-grid">
<p> My Senior High Days </p>
<img src="SHS1.jpg"/></a>
<img src="SHS2.jpg"/></a>
<img src="SHS3.jpg"/></a>
<img src="SHS4.jpg"/></a>
<img src="SHS5.jpg"/></a>
</div>

<div class = "inner-grid">
<p> My College Days </p>
<img src="c1.jpg"/></a>
<img src="c2.jpg"/></a>
<img src="c3.jpg"/></a>
<img src="c4.jpg"/></a>
<img src="c5.jpg"/></a>
</div>

</div>

</body>
</html>