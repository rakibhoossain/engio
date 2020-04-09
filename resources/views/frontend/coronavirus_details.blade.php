@extends('layouts.frontend')
@section('content')

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-150 pb-155" style="background-image:url(assets/img/bg/bg-13.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Corona details</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="{{route('home')}}">home</a></li>
                                    <li><span>{{$corona->title}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- blog-area-start -->
            <div class="blog-grid-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 mb-30">
                            <div class="blog-details-wrapper blog-standard">
                                <div class="blog-img">
                                  <img src="assets/img/blog/001.jpg" alt="">
                                </div>
                                <div class="blog-content blog-02-content">
                                    <div class="blog-meta">
<!--                                         <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html">12 Oct 2019</a></span>
                                        <span><i class="far fa-comment"></i> <a href="blog-details.html">Comments (05)</a></span> -->
                                    </div>
                                    <div class="blog-title">
                                        <h3>{{$corona->title}}</h3>
                                    </div>
                                    {!! $corona->description !!}
                                </div>
<!--                                 <blockquote>
                                    <p>Feplain to you how all this mistaken id denouncing pleasure and praising pain was born and will give you complete</p>
                                    <footer>Michel Silva</footer>
                                </blockquote> -->
<!--                                 <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-30">
                                        <div class="blog-details-img">
                                            <img src="assets/img/blog/d-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-30">
                                        <div class="blog-details-text">
                                            <h3>About Blog Articles</h3>
                                            <p>On the other hand we denounce with teous indignation and dislike men who are sguiled amoralized by the charms of pthe momeso blinded by desire, that they cannot foresee the pain and troble that are bound nsuand equal blame belongs to those who fail their duty through weness of will which is the same as saying through.</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row mt-20">
									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="blog-post-tag">
											<span>Tags : </span>
											<a href="#">Business</a>
											<a href="#">Consulting,</a>
											<a href="#">Agency</a>
										</div>
									</div>
									<div class="col-xl-4 col-lg-5 col-md-6">
										<div class="blog-share-icon text-left text-md-right">
											<span>Share: </span>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-behance"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
										</div>
									</div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="navigation-border mt-50"></div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left mb-30">
                                            <span><a href="#">Next Post</a></span>
                                            <h4><a href="#">Tips on Minimalist</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 ">
                                        <div class="bakix-filter text-left text-md-center mb-30">
                                            <a href="#"><i class="fad fa-th"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left text-md-right  mb-30">
                                            <span><a href="#">Next Post</a></span>
                                            <h4><a href="#">Tips on Minimalist</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="author mt-20 mb-40 fix">
                                    <div class="author-img f-left">
                                        <img src="assets/img/blog/author.png" alt="">
                                    </div>
                                    <div class="author-text fix">
                                        <h3>Nikoas Zakiloa</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bla
                                        nditiis praesentiuvoluptatum deleniti atque corrupti quos dolores </p>
                                        <div class="author-icon">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-behance-square"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comments">
                                    <div class="blog-coment-title mb-30">
                                        <h2>03 Comments</h2>
                                    </div>
                                    <div class="latest-comments">
                                        <ul>
                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comments1.png" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Karon Balina</h5>
                                                            <span>19th May 2018</span>
                                                            <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                            exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="children">
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comments2.png" alt="">
                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Julias Roy</h5>
                                                            <span>19th May 2018</span>
                                                            <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                            exercitation
                                                            ullamco laboris nisi ut aliquip.</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="comments-box">
                                                    <div class="comments-avatar">
                                                        <img src="assets/img/blog/comments3.png" alt="">

                                                    </div>
                                                    <div class="comments-text">
                                                        <div class="avatar-name">
                                                            <h5>Arista Williamson</h5>
                                                            <span>19th May 2018</span>
                                                            <a class="reply" href="#"><i class="fas fa-reply"></i>Reply</a>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                            tempor incididunt
                                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                            exercitation
                                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="post-comments-form">
                                    <div class="post-comments-title">
                                        <h2>Post Comments</h2>
                                    </div>
                                    <form id="contacts-form" class="conatct-post-form" action="#">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="contact-icon contacts-message">
                                                    <textarea name="comments" id="comments" cols="30" rows="10"
                                                        placeholder="Your Comments...."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-icon contacts-name">
                                                    <input type="text" placeholder="Your Name.... ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-icon contacts-email">
                                                    <input type="email" placeholder="Your Email....">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-icon contacts-website">
                                                    <input type="text" placeholder="Your Website....">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <button class="btn" type="submit"> send comments <i class="far fa-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 mb-30">
                            <div class="blog-sidebar">
                                <div class="widget mb-60">
                                    <div class="widget-title-box mb-35">
                                        <h3 class="widget-title-2">Search</h3>
                                    </div>
                                    <form class="search-form">
                                        <input type="text" placeholder="Search Keywords">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget mb-60">
                                    <div class="widget-title-box mb-30">
                                        <h3 class="widget-title-2">Popular Feeds</h3>
                                    </div>
                                    <ul class="recent-posts">
                                        <li>
                                            <div class="widget-posts-image">
                                                <a href="#"><img src="assets/img/blog/sm-01.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-body">
                                                <h6 class="widget-posts-title"><a href="#">How Frontend Developers Can Help To Bridge</a></h6>
                                                <div class="widget-posts-meta">October 18, 2018 </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-image">
                                                <a href="#"><img src="assets/img/blog/sm-02.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-body">
                                                <h6 class="widget-posts-title"><a href="#">Everything You Need To Know About Transa</a></h6>
                                                <div class="widget-posts-meta">january 24, 2018 </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="widget-posts-image">
                                                <a href="#"><img src="assets/img/blog/sm-03.jpg" alt=""></a>
                                            </div>
                                            <div class="widget-posts-body">
                                                <h6 class="widget-posts-title"><a href="#">How Frontend Developers Can Help To Bridge</a></h6>
                                                <div class="widget-posts-meta">October 28, 2018 </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget mb-60">
                                    <div class="widget-title-box mb-30">
                                        <h3 class="widget-title-2">Categories</h3>
                                    </div>
                                    <ul class="cat">
                                        <li>
                                            <a href="#">Lifestyle <span class="f-right">78</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Travel <span class="f-right">42</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Fashion <span class="f-right">32</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Music <span class="f-right">85</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Branding <span class="f-right">05</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget mb-60">
                                    <div class="widget-title-box mb-30">
                                        <h3 class="widget-title-2">Social Profile</h3>
                                    </div>
                                    <div class="social-profile">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="widget mb-60">
                                    <div class="widget-title-box mb-35">
                                        <h3 class="widget-title-2">Popular Tags</h3>
                                    </div>
                                    <div class="tag">
                                        <a href="#">Charity</a>
                                        <a href="#">Fundation</a>
                                        <a href="#">Education</a>
                                        <a href="#">Events</a>
                                        <a href="#">Poor</a>
                                        <a href="#">Donate</a>
                                    </div>
                                </div>
                                <div class="widget-2">
                                    <div class="banner-img">
                                        <a href="#"><img src="assets/img/case/banner.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->
@endsection