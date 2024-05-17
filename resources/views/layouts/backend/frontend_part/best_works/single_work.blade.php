@extends('frontend\frontend')

@section('content')



            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                @foreach ($best_works as $best_work)

                                <div class="blog-list-thumb mb-35">
                                    {{-- <img src="{{ asset('frontend_assets') }}/img/images/portfolio_details.jpg" alt="img"> --}}
                                    <img src="{{ asset('uploads/best_works') }}/{{ $best_work->photo }}">
                                </div>
                                @endforeach
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2>Consectetur neque elit quis nunc cras elementum</h2>
                                    <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem
                                        egestliberos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur,
                                        trist ligula pellentesque
                                        ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs
                                        the release of Letraset
                                        sheets containing Lorem Ipsum passags, and more recently with desktop publishing software
                                        like Aldus PageMaker including
                                        versions.</p>
                                    <p>Rxpress dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem
                                        egestlibers dolosr auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur,
                                        trist ligula pellentesque
                                        ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                    <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor
                                    tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque
                                    ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras
                                    sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.</p>

                                    <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem
                                        egestliberos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur,
                                        trist ligula pellentesque
                                        ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs
                                        the release of Letraset
                                        sheets containing Lorem Ipsum passags, and more recently with desktop publishing software
                                        like Aldus PageMaker including
                                        versions.</p>
                                    <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem
                                        egestliberos dolor auctor
                                        tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur,
                                        trist ligula pellentesque
                                        ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="{{ asset('frontend_assets') }}/img/blog/post_avatar_img.png" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Herlihy</h5>
                                                <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                                    condimem
                                                    egestliberos dolor auctor
                                                    tellus.</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

@endsection


