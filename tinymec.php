<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formating Text with Tiny</title>
	
		  <script src="https://cdn.tiny.cloud/1/39cf0r28kgadfeq9jvhzaj3rd8h42523zq63wzi320ko2pl7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		  <script>tinymce.init({
			  selector:'textarea',
			  
			  });</script>
	</head>
	<body>
		<h1>TinyMCE Rich Text Exercise</h1>
		
		
		<form method="post">
			
			<div>
				<textarea name="content"></textarea>
			</div>
			<div>
				<button>Send</button>
			</div>
		</form>
		
		<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
			<div><?= $_POST['content']?></div>
			
		<?php endif; ?>
		
		
	</body>
</html>

<!-- 39cf0r28kgadfeq9jvhzaj3rd8h42523zq63wzi320ko2pl7 -->