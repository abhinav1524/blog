@extends('layouts.layout')
@section('content')
<div class="blog-post-10 pt-20 mb-120">
        <div class="container">
            <div class="inner-page-breadcrumb-wrapper mb-20">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="inquiry-form contact-inquiry">
                        <div class="title">
                            <h1>Contact Us!</h1>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-inner mb-20">
                                        <label>Your Name* :</label>
                                        <input type="text" placeholder="Jackson Mile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-20">
                                        <label>Your Email* :</label>
                                        <input type="email" placeholder="example@gamil.com">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner mb-20">
                                        <label>Subject*</label>
                                        <input type="text" placeholder="What’s kind of topic">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner mb-15">
                                        <label>Message <span> (Optional)</span></label>
                                        <textarea class="contact-massage" placeholder="Write Something..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="contactCheck">
                                        <label class="form-check-label" for="contactCheck">
                                            Please save my name, email address for the next time I
                                            comment.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inner">
                                <button class="primary-btn1 contact-btn" data-text="Post Comment" type="submit">
                                    <span> <svg class="arrow" width="10" height="10" viewbox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke="#191919" stroke-width="1.5" stroke-linecap="round"></path>
                                        </svg>
                                        SUBMIT</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-post-sideber">
                        <div class="sidebar-widget featured-post">
                            <h6>Featured Post</h6>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="assets/image/standard/sidebar-img1.png" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="life-style.html">05 January, 2024</a>
                                    <h5><a href="standard-formate.html">Epicurean Eats: A Feast for Foodies</a></h5>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="assets/image/standard/sidebar-img2.png" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="life-style.html">05 January, 2024</a>
                                    <h5><a href="standard-formate.html">Feast Fables Stories Told in Every Bite</a></h5>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="assets/image/standard/sidebar-img3.png" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="life-style.html">05 January, 2024</a>
                                    <h5><a href="standard-formate.html">Bite Bliss Savoring the Sweet and Savory</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="assets/image/standard/sidebar-img4.png" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="life-style.html">05 January, 2024</a>
                                    <h5><a href="standard-formate.html">Flavor Fiesta Exploring Taste Adventures</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget about-section">
                            <ul class="category">
                                <li>
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a href="terms%26condition.html">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection