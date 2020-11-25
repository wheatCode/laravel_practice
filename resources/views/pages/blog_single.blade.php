@extends('layout.layout')

@section('banner')
<!--page title start-->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Single</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="#">Blog</a>
                    </li>
                    <li class="active">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--page title end-->
@endsection

@section('content')
<!--body content start-->
<section class="body-content ">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--classic image post-->
                    <div class="blog-classic">
                        <div class="blog-post">
                            <div class="full-width">
                                <img src="assets/img/post/p12.jpg" alt="" />
                            </div>
                            <h4 class="text-uppercase"><a href="/blog_single">standard blog post with
                                    photo</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i> <a href="#">lifestyle</a>, <a href="#">travel</a>,
                                    <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i> <a href="#">4 comments</a>
                                </li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing elit</a>. Ab
                                adipisci architecto consequatur debitis eos eum hic illum ipsam itaque laborum
                                magni minima molestias nostrum numquam odit officia pariatur
                                perspiciatis placeat porro quae rem, sequi sit soluta temporibus ullam voluptas
                                voluptates. Aliquid amet architecto culpa cumque eius enim esse eum eveniet ex,
                                fugiat illo ipsum laudantium, minima nemo porro sequi
                                tempora veritatis vero voluptate, voluptatem. Culpa ducimus est eveniet, iste
                                iusto officiis quas repudiandae rerum sit tenetur totam voluptas? Accusamus
                                accusantium alias aliquam aliquid animi commodi dignissimos
                                dolore doloremque dolorum exercitationem fugiat illum, iste laboriosam maiores
                                molestiae nam odio officia officiis omnis optio placeat quaerat quia quibusdam
                                quis quo ratione sapiente sed sequi sit tenetur unde
                                ut veniam voluptas! Dicta, voluptatum!</p>

                            <div class="blog-post">
                                <blockquote class="quote-post">
                                    <p>
                                        Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum
                                        facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers
                                        sadips amets.. Sed ut perspiciatis unde omnis iste natus error
                                    </p>
                                </blockquote>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at debitis
                                deleniti dignissimos ea enim iste laboriosam nihil omnis possimus quia, tempora,
                                totam voluptatibus! Animi consectetur dolor in laboriosam
                                unde.</p>

                            <div class="inline-block">

                                <div class="widget-tags">
                                    <h6 class="text-uppercase">Tags </h6>
                                    <a href="">Portfolio</a>
                                    <a href="">Design</a>
                                    <a href="">Link</a>
                                    <a href="">Gallery</a>
                                    <a href="">Video</a>
                                    <a href="">Clean</a>
                                    <a href="">Retina</a>
                                </div>
                            </div>


                            <div class="clearfix inline-block m-top-50 m-bot-50">
                                <h6 class="text-uppercase">Share this Post </h6>
                                <div class="widget-social-link circle">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>


                            <div class="pagination-row">

                                <div class="pagination-post">
                                    <div class="prev-post">
                                        <a href="#">
                                            <div class="arrow">
                                                <i class="fa fa-angle-double-left"></i>
                                            </div>
                                            <div class="pagination-txt">
                                                <span>Previous Post</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="post-list-link">
                                        <a href="#">
                                            <i class="fa fa-home"></i>
                                        </a>
                                    </div>

                                    <div class="next-post">
                                        <a href="#">
                                            <div class="arrow">
                                                <i class="fa fa-angle-double-right"></i>
                                            </div>
                                            <div class="pagination-txt">
                                                <span>Next Post</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--classic image post-->
                </div>
                <div class="col-md-4">
                    <!--search widget-->
                    <div class="widget">
                        <form class="form-inline form" role="form">
                            <div class="search-row">
                                <button class="search-btn" type="submit" title="Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!--search widget-->

                    <!--author widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">about author</h6>
                        </div>
                        <div class="full-width avatar">
                            <img src="assets/img/post/avatar.jpg" alt="" />
                        </div>
                        <p>Persuaded to return to the shoemaker's shop, young Edward struggled on till three
                            years of his wretched apprenticeship had passed over.</p>

                        <span class="">- Nelson Leonard</span>
                    </div>
                    <!--author widget-->

                    <!--latest post widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">latest post</h6>
                        </div>
                        <ul class="widget-latest-post">
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Old Father Getup</a>
                                    April 25, 2014
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Represent is the best way</a>
                                    March 28, 2014
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb-3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Alone with the music</a>
                                    May 05, 2014
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--latest post widget-->

                    <!--follow us widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">follow us</h6>
                        </div>
                        <div class="widget-social-link circle">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                    <!--follow us widget-->

                    <!--category widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">category</h6>
                        </div>
                        <ul class="widget-category">
                            <li><a href="#">Animals</a>
                            </li>
                            <li><a href="#">Landscape</a>
                            </li>
                            <li><a href="#">Portrait</a>
                            </li>
                            <li><a href="#">Wild Life</a>
                            </li>
                            <li><a href="#">Video</a>
                            </li>
                        </ul>
                    </div>
                    <!--category widget-->

                    <!--comments widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">Latest comments </h6>
                        </div>
                        <ul class="widget-comments">
                            <li>Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a>
                            </li>
                            <li>Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a>
                            </li>
                            <li>Margarita on <a href="javascript:;">Fringilla ut vel ipsum </a>
                            </li>
                            <li>Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a>
                            </li>
                        </ul>
                    </div>
                    <!--comments widget-->

                    <!--tags widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">tag cloud</h6>
                        </div>
                        <div class="widget-tags">
                            <a href="">Portfolio</a>
                            <a href="">Design</a>
                            <a href="">Link</a>
                            <a href="">Gallery</a>
                            <a href="">Video</a>
                            <a href="">Clean</a>
                            <a href="">Retina</a>
                        </div>
                    </div>
                    <!--tags widget-->

                </div>
            </div>
        </div>
    </div>


</section>
<!--body content end-->
@endsection
