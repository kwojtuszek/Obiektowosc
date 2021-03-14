<!DOCTYPE HTML>
<html>
	<head>
		<title>{$page_title|default:"Tytuł domyślny"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{$conf -> app_url}/assets/css/main.css" />
	</head>
	<body>

        <header id = "header">
            <h1> <strong> {$page_title|default:"Tytuł domyślny"} </strong> </h1>
        </header>

        <section id = "main" class = "wrapper">
            <div class = "container">
                {block name=content} Domyślna treść zawartości {/block}
            </div>
        </section>

        <footer id = "footer">
            <div class="container">
                <h6>  Wykonał Klaudiusz Wjtuszek </h6> 
                <ul class="copyright">
					<li> &copy; Untitled</li>
					<li> Źródło Szablonu: <a href="http://templated.co">Templated</a></li>
					<li> Wykorzystany Szablon: <a href = "https://templated.co/spatial">Szablon</a></li> 
                </ul>
            </div>
        </footer>

    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
    
    </body>
</html>