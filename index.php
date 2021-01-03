<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- custom css -->
		<link rel="stylesheet" href="css/style.css">
		<title>Hello, world!</title>
	</head>
	<body>
		
		<section class="form mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
						  Launch demo modal
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						  	<form method="post" id="myform">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						       	
								  <div class="mb-3">
								    <label for="email" class="form-label">Email address</label>
								    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
								  
								  </div>
								  <div class="mb-3">
								    <label for="pwd" class="form-label">Password</label>
								    <input type="password" class="form-control" id="pwd" name="pwd">
								  </div>
								 
								
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary" id="submit">Save changes</button>
						      </div>
						    </div>
						    </form>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- jquery script -->
		<script src="js/jquery-3.5.1.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.bundle.min.js"></script>
		<!-- validation js -->
		<script src="js/jquery.validate.min.js"></script>
		<!-- custom js -->
		<script src="js/script.js"></script>
	</body>
</html>