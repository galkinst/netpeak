<!-- 
	http://codething.ru -  уголок веб-разработчика 

	AJAX и JavaScript. Загрузка контента без перезагрузки страницы.
	Пример.
-->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">
<script>
	function showContent(link) {

		var cont = document.getElementById('contentBody');
		var loading = document.getElementById('loading');

		cont.innerHTML = loading.innerHTML;

		var http = createRequestObject();					// создаем ajax-объект
		if( http ) {
			http.open('get', link);							// инициируем загрузку страницы
			http.onreadystatechange = function () {			// назначаем асинхронный обработчик события
				if(http.readyState == 4) {
					cont.innerHTML = http.responseText;		// присваиваем содержимое
				}
			}
			http.send(null);    
		} else {
			document.location = link;	// если ajax-объект не удается создать, просто перенаправляем на адрес
		}
	}

	// создание ajax объекта
	function createRequestObject() {
		try { return new XMLHttpRequest() }
		catch(e) {
			try { return new ActiveXObject('Msxml2.XMLHTTP') }
			catch(e) {
				try { return new ActiveXObject('Microsoft.XMLHTTP') }
				catch(e) { return null; }
			}
		}
	}
</script>
</head>

<body>

	<p>Какую страницу желаете открыть?</p>
	
	<a href="#" onclick="showContent('page1.php')"> dfdsfdsf</a>
    <a href="#" onclick="showContent('page2.php')"> dfdsfdsf</a>


	
	<div id="contentBody">
	</div>

	<div id="loading" style="display: none">
	Идет загрузка...
	</div>
	
</body>
</html>