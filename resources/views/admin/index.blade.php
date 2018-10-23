@extends('template.header')
@section('content')
<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<div class="row">
								<div class="world-catagory-area">
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										
											<li class="nav-item">
												<a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
											</li>
			
											<li class="nav-item">
												<a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Tabligh Akbar</a>
											</li>
			
											<li class="nav-item">
												<a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Tafsir Al-Quran</a>
											</li>
			
											<li class="nav-item">
												<a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Hadits</a>
											</li>
			
											<li class="nav-item">
												<a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Ahlak</a>
											</li>
			
											<li class="nav-item">
												<a class="nav-link" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">Fiqih</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab" aria-controls="world-tab-7" aria-selected="false">Aqidah</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" id="tab8" data-toggle="tab" href="#world-tab-8" role="tab" aria-controls="world-tab-8" aria-selected="false">Sirah Nabawi</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" id="tab9" data-toggle="tab" href="#world-tab-9" role="tab" aria-controls="world-tab-9" aria-selected="false">Tahsin</a>
											</li>
			
											<!-- <li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
												<div class="dropdown-menu">
													<a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab" aria-controls="world-tab-7" aria-selected="false">Aqidah</a>
													<a class="nav-link" id="tab8" data-toggle="tab" href="#world-tab-8" role="tab" aria-controls="world-tab-8" aria-selected="false">Sirah Nabawi</a>
													<a class="nav-link" id="tab9" data-toggle="tab" href="#world-tab-9" role="tab" aria-controls="world-tab-9" aria-selected="false">Tahsin</a>
												</div>
											</li> -->
										</ul>
			
										<div class="tab-content" id="myTabContent">
			
											<div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
												<div class="row">

													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b2.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">hari ini</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>Tabligh Akbar - Tahun Baru Hijriah 1440</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Ustadz Abdul Somad</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																	<span class="badge badge-success">Tabligh  Akbar</span>
																	<span class="badge badge-default">Fiqih</span>
																	<span class="badge badge-primary">Ahlak</span>
																</div>
																
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b3.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b2.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b3.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>

													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b14.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b15.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b16.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b17.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b14.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																	<span class="badge badge-count">Count</span>
																	<span class="badge badge-default">Default</span>
																	<span class="badge badge-primary">Primary</span>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b15.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b16.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b17.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
												<div class="row">

													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b14.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b15.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b16.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b17.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b14.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b15.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b16.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b17.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-6" role="tabpanel" aria-labelledby="tab6">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-7" role="tabpanel" aria-labelledby="tab7">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-8" role="tabpanel" aria-labelledby="tab8">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="images/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/imgages/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
			
											<div class="tab-pane fade" id="world-tab-9" role="tabpanel" aria-labelledby="tab9">
												<div class="row">
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b1.jpg" alt="">
																<!-- Catagory -->
																<div class="post-cta"><a href="#">travel</a></div>
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
																</a>
																<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
			
													<div class="col-12 col-md-6">
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b10.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b11.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b12.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
			
														<!-- Single Blog Post -->
														<div class="single-blog-post post-style-2 d-flex align-items-center">
															<!-- Post Thumbnail -->
															<div class="post-thumbnail">
																<img src="{{ asset('assets') }}/img/blog-img/b13.jpg" alt="">
															</div>
															<!-- Post Content -->
															<div class="post-content">
																<a href="#" class="headline">
																	<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
																</a>
																<!-- Post Meta -->
																<div class="post-meta">
																	<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
								</div>
						</div>				
					</div>
				</div>
@endsection
