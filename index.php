<!DOCTYPE html>
<html lang="en" dir="rtl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/style.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<title>תורים</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark" id="main-nav">
			<div>
				<a class="navbar-brand" id="logo" href="torim.html">תורים</a>
				<p class="navbar-brand" id="slogen">הזמנת תור בקליק.</p>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="signup.html">הרשמה</a>
					</li>
					<li class="nav-item">
						<a class="nav-link border" href="signin.html">התחברות</a>
					</li>
				</ul>
			</div>
		</nav>
		<!--
			<div class="jumbotron jumbotron-fluid">
			        <div class="container" >
			          <h1 class="display-4">אתר תורים</h1>
			          <p class="lead">עכשיו אפשר להזמין תורים בקלות ובמהירות לכמעט כל עסק בישראל!</p>
			        </div>
			</div>
			-->
		<div id="search-wrap">
			<form>
				<input class="form-control" id="form-input" type="search" placeholder="חיפוש" aria-label="Search">
				<button class="btn btn-outline-info  my-2 my-sm-0 hvr-buzz-out" id="form-button" type="submit">חיפוש</button>
			</form>
		</div>
		<div class="organizations">
			<div class="container">
			<h1 class="tag-name">ארגונים</h1>
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">שם החברה</h5>
								<div id="rate">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
								</div>
								
								
									<a href="#" class="btn btn-primary">זמן תור</a>
									<i class="fas fa-heart like"></i>

								
							
							</div>
						</div>
					</div>

					<div class="col-md-3">
							<div class="card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									<div id="rate">
										<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
									</div>
									
									
										<a href="#" class="btn btn-primary">זמן תור</a>
										<i class="fas fa-heart like"></i>
	
									
								
								</div>
							</div>
						</div>

						<div class="col-md-3">
								<div class="card">
									<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">שם החברה</h5>
										<div id="rate">
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
										</div>
										
										
											<a href="#" class="btn btn-primary">זמן תור</a>
											<i class="fas fa-heart like"></i>
		
										
									
									</div>
								</div>
							</div>

							<div class="col-md-3">
									<div class="card">
										<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">שם החברה</h5>
											<div id="rate">
												<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
											</div>
											
											
												<a href="#" class="btn btn-primary">זמן תור</a>
												<i class="fas fa-heart like"></i>
			
											
										
										</div>
									</div>
								</div>

								<div class="col-md-3">
										<div class="card">
											<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
											<div class="card-body">
												<h5 class="card-title">שם החברה</h5>
												<div id="rate">
													<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
												</div>
												
												
													<a href="#" class="btn btn-primary">זמן תור</a>
													<i class="fas fa-heart like"></i>
				
												
											
											</div>
										</div>
								</div>

									<div class="col-md-3">
										<div class="card">
											<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
												<div class="card-body">
													<h5 class="card-title">שם החברה</h5>
													<div id="rate">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
													</div>
													
													
														<a href="#" class="btn btn-primary">זמן תור</a>
														<i class="fas fa-heart like"></i>
					
													
												
												</div>
										</div>
									</div>

										<div class="col-md-3">
											<div class="card">
													<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
													<div class="card-body">
														<h5 class="card-title">שם החברה</h5>
														<div id="rate">
															<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
														</div>
														
														
															<a href="#" class="btn btn-primary">זמן תור</a>
															<i class="fas fa-heart like"></i>
						
														
													
													</div>
											</div>
										</div>

											<div class="col-md-3">
													<div class="card">
														<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
														<div class="card-body">
															<h5 class="card-title">שם החברה</h5>
															<div id="rate">
																<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> 4.5/5 (40k+)
															</div>
															
															
																<a href="#" class="btn btn-primary">זמן תור</a>
																<i class="fas fa-heart like"></i>
							
															
														
														</div>
													</div>
											</div>
				</div>
			<a href="organizations.html" class="see-more">ראה עוד...</a>
			</div>
		</div>
		
		<hr>
		<!--<footer class="pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
			  <div class="col-12 col-md">
			    <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
			    <small class="d-block mb-3 text-muted">© 2018-2019</small>
			  </div>
			  <div class="col-6 col-md">
			    <h5>Features</h5>
			    <ul class="list-unstyled text-small">
			      <li><a class="text-muted" href="#">Cool stuff</a></li>
			      <li><a class="text-muted" href="#">Random feature</a></li>
			      <li><a class="text-muted" href="#">Team feature</a></li>
			      <li><a class="text-muted" href="#">Stuff for developers</a></li>
			      <li><a class="text-muted" href="#">Another one</a></li>
			      <li><a class="text-muted" href="#">Last time</a></li>
			    </ul>
			  </div>
			  <div class="col-6 col-md">
			    <h5>Resources</h5>
			    <ul class="list-unstyled text-small">
			      <li><a class="text-muted" href="#">Resource</a></li>
			      <li><a class="text-muted" href="#">Resource name</a></li>
			      <li><a class="text-muted" href="#">Another resource</a></li>
			      <li><a class="text-muted" href="#">Final resource</a></li>
			    </ul>
			  </div>
			  <div class="col-6 col-md">
			    <h5>About</h5>
			    <ul class="list-unstyled text-small">
			      <li><a class="text-muted" href="#">Team</a></li>
			      <li><a class="text-muted" href="#">Locations</a></li>
			      <li><a class="text-muted" href="#">Privacy</a></li>
			      <li><a class="text-muted" href="#">Terms</a></li>
			    </ul>
			  </div>
			</div>
			</footer>-->
		<!--
			<div class="reviews">
			  <h1>ביקורות</h1>
			  
			  <div id="reviews-list">
			    <div class="star-icons">
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>              
			    </div>
			
			    <div class="star-icons" id="sec-row">
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>
			      <i class="far fa-star"> ביקורות על האתר מכל מיני אתרים ומקורות</i>
			    </div>
			                  
			  </div>
			
			</div>
			-->
		<script src="assets/js/mainpage.js"></script>
	</body>
</html>