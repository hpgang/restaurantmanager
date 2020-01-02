<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Restaurant - Food menu tab #03</title>
<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/speisekarte/speisekarte-normalize.min.css"/>
<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/speisekarte/speisekarte.min.css"/>
<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/speisekarte/speisekarte.css" />
</head>
<body>
<!-- partial:index.partial.html -->
<section id="our_menu" class="pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page_title text-center mb-4">
						<h1>Unser Menü</h1>
						<div class="single_line"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast" role="tab">Vorspeisen</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Hauptspeisen</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Getränke</a>
					</li>
				</ul>
        	</div>
			<div class="row">
				<div class="tab-content col-lg-12" id="myTabContent">
					<div class="tab-pane fade show active" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
									<div class="menu_content">
										<h4>Puten Burger  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
									<div class="menu_content">
										<h4>Schw. Kaffee <span>€19,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
									<div class="menu_content">
										<h4>Fried Rice  <span>€44,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€22,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/TAq7lDR.jpg" alt="burger">
									<div class="menu_content">
										<h4>Puten Burger  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
									<div class="menu_content">
										<h4>Black coffee <span>€19,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
									<div class="menu_content">
										<h4>Fried Rice  <span>€44,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/Aowufa1.jpg" alt="pizza">
									<div class="menu_content">
										<h4>12" Pizza  <span>€34,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/DJlmZDJ.jpg" alt="salad">
									<div class="menu_content">
										<h4>Salad <span>€19,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/knnQm7e.jpg" alt="green tea">
									<div class="menu_content">
										<h4>green tea <span>€14,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
									<div class="menu_content">
										<h4>Puten Burger  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
									<div class="menu_content">
										<h4>Black coffee <span>€21,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
									<div class="menu_content">
										<h4>Fried Rice  <span>€44,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
						<div class="row">
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
									<div class="menu_content">
										<h4>Puten Burger  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
									<div class="menu_content">
										<h4>Black coffee <span>€19,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
									<div class="menu_content">
										<h4>Fried Rice  <span>€44,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single_menu">
									<img src="https://i.imgur.com/kbpceNv.jpg" alt="burger">
									<div class="menu_content">
										<h4>Puten Burger  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/lYKUORL.jpg" alt="black coffee">
									<div class="menu_content">
										<h4>Black coffee <span>€19,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/AXAHrf6.jpg" alt="fried rice">
									<div class="menu_content">
										<h4>Fried Rice  <span>€44,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
								<div class="single_menu">
									<img src="https://i.imgur.com/YkDi8Nb.jpg" alt="meat">
									<div class="menu_content">
										<h4>meat  <span>€23,99</span></h4>
										<p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>
</html>
