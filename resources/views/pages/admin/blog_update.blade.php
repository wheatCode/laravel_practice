@extends('layout.layout')

@section('banner')
<!--page title start-->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Listing</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a>
                    </li>
                    <li class="active"><a href="#">Blog</a>
                    </li>
                    <li class="active">Blog Listing</li>
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
                    <form method="POST" action="/admin/blogs">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">標題</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">內容</label>
                          <textarea class="form-control"  id="content" name="content" rows="3">{{$blog->content}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-info" onclick="updateBlog('{{$blog->id}}')">送出表單</button>
                      </form>
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
                            <img src="/assets/img/post/avatar.jpg" alt="" />
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
                                        <img src="/assets/img/post/post-thumb.jpg" alt="" />
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
                                        <img src="/assets/img/post/post-thumb-2.jpg" alt="" />
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
                                        <img src="/assets/img/post/post-thumb-3.jpg" alt="" />
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
