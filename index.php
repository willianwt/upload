<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 jumbotron" style="margin-top: 50px;">
				<form action="save.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Anexar Arquivo</label>
						<input type="file" name="arquivo"  accept="jpg|jpeg|png|gif|bmp|tiff|svg">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
				<?php
					$conn = new mysqli("localhost","u684394229_recu","rootroot","u684394229_recuperasenha");
					
					$sql = "SELECT * FROM arquivos";
					
					$res = $conn->query($sql);
					
					if($res->num_rows > 0){
						while($row = $res->fetch_object()){
							echo "<div class='col-sm'>";
							print "<a href='arquivos/".$row->arquivo."' download>
										<img src='arquivos/".$row->arquivo."' width='100%'>
								   </a>";
							echo "<a class='btn btn-success btn-block mt-2' href='arquivos/".$row->arquivo."' download>
									Download
									   </a>";
							echo "</div>";
						}
					}else{
						print "Nenhum arquivo cadastrado";
					}
	
				?>
		</div>	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>