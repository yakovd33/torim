<!DOCTYPE html>
<html lang="en" dir="rtl">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/index.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<title>תורים</title>
		<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
	</head>
	<body>
		<?php include 'includes/nav.php'; ?>

		<div id="search-wrap">
			<form>
				<input class="form-control" id="form-input" type="search" placeholder="חיפוש" aria-label="Search">
				<button class="btn btn-outline-info  my-2 my-sm-0 hvr-buzz-out" id="form-button" type="submit">חיפוש</button>
			</form>

			<div class="scroll-downs">
				<div class="mousey">
					<div class="scroller"></div>
				</div>
			</div>
		</div>

		<div class="organizations">
			<div class="container">
			<h1 class="tag-name">ארגונים</h1>
				<div class="row" id="organizations-wrap">
					<div class="col-md-3">
						<div class="card booking-card">
							<div class="rate">
								<div class="stars" data-stars="1">
									<svg height="25" width="23" class="star rating" data-rating="1">
										<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
									</svg>
									<svg height="25" width="23" class="star rating" data-rating="2">
										<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
									</svg>
									<svg height="25" width="23" class="star rating" data-rating="3">
										<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
									</svg>
									<svg height="25" width="23" class="star rating" data-rating="4">
										<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
									</svg>
									<svg height="25" width="23" class="star rating" data-rating="5">
										<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
									</svg>
								</div>
							</div>

							<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">שם החברה</h5>
								
								<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
								<div class="clearfix"></div>
								<i class="fas fa-heart like"></i>
							</div>
						</div>
					</div>

					<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class=" booking-card">
									<h5 class="card-title">שם החברה</h5>

									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card booking-card">
								<img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">שם החברה</h5>
									
									<a href="#" class="cute-btn-2 book-card-btn">הזמן תור</a>
									<div class="clearfix"></div>
									<i class="fas fa-heart like"></i>
								</div>
							</div>
						</div>
				</div>
			<!-- <a href="organizations.php" class="see-more cute-btn">ראה עוד</a> -->
			</div>
		</div>

		<div class="section" id="counters-section">
			<div id="counters-wrap">
				<div class="container">
					<div class="row">
						<div class="counter col-md-3">
							<i class="fa fa-code fa-2x"></i>
							<h2 class="timer count-title count-number">300</h2>
							<p class="count-text ">SomeText GoesHere</p>
						</div>

						<div class="counter col-md-3">
							<i class="fas fa-coffee fa-2x"></i>
							<h2 class="timer count-title count-number">10000</h2>
							<p class="count-text ">SomeText GoesHere</p>
						</div>

						<div class="counter col-md-3">
							<i class="fa fa-code fa-2x"></i>
							<h2 class="timer count-title count-number">19023</h2>
							<p class="count-text ">SomeText GoesHere</p>
						</div>

						<div class="counter col-md-3 end">
							<i class="fa fa-bug fa-2x"></i>
							<h2 class="timer count-title count-number">519402</h2>
							<p class="count-text ">SomeText GoesHere</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section world-numbers-box inited">
			<div class="content-holder">
				<div class="box-cnt">
					<div class="info-cnt">בעלי עסקים? רוצים להרחיב את העסק שלכם?</div>
					<div class="cta-cnt"><a class="ui-cta ui-cta-1 cute-btn-2 book-card-btn" href="/en-in/registration/">הצטרפו עכשיו!</a></div>
				</div>
			</div>
		</div>

		<?php include 'includes/footer.php'; ?>

		<script src="assets/js/mainpage.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>