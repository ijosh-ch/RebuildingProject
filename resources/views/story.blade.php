@extends('header')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-5" id="more-top"></div>

            <div class="col-lg-12 col-sm-12 col-12 my-5 ml-5" style="top: 320px;">
                <a style="color: white;font-family: Poppins;font-size:13pt; ">Our Story</a><br>
                <img src="{{asset('assets/more/line.png')}}">
                <h1 style="color: white; font-size:50pt; font-family: PoppinsSB;">
                    <b>{{$story->title}}</b>
                </h1>

                <div class="col-lg-12 col-sm-12 col-12 my-2"
                     style="color: white;font-family: Poppins;font-size:13pt;padding: 0px;">
                    <label><a style="color: white;">{{$story->writer}}&nbsp;</a></label>
                    <label> &nbsp; <a style="color: white;">Event &nbsp; </a></label>
                    <label> &nbsp; <a style="color: white;">{{date('d M Y', strtotime($story->created_at))}}</a></label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-12 col-12 my-5">
                <p style="text-align: justify; font-family: Poppins; Line-height: 29px;margin-top: 280px;
                    white-space: pre-wrap;"
                   class="ml-4 mr-4 ">{{$story->content}}</p>
            </div>

            <div class="col-lg-10 col-sm-10 col-10 my-5 text-center">
                <h2><b>Attachments</b></h2>
                <div class="row justify-content-center">
                    <div class="col-lg-1 col-sm-1 text-center prevnext" style="position: relative;">
                        <a class="btn" href="#myCarousel" data-slide="prev" id="scheduleprevnext" title="go back"><i
                                class="fa fa-lg fa-chevron-left"></i></a>
                    </div>

                    <section class="carousel slide col-lg-10 col-sm-10 text-center" id="myCarousel"
                             data-interval="false" style="right: -18px;">
                        <div class="carousel-inner text-center">
                            <div class="row row-equal carousel-item my-2 active">
                                <div class="row justify-content-center">
                                    <img src="{{asset('assets/more/atas.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/bawah.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/atas.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/bawah.png')}}" width="20%" class="mx-1">
                                </div>
                            </div>

                            <div class="row row-equal carousel-item my-2">
                                <div class="row justify-content-center">
                                    <img src="{{asset('assets/more/atas.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/bawah.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/atas.png')}}" width="20%" class="mx-1">
                                    <img src="{{asset('assets/more/bawah.png')}}" width="20%" class="mx-1">
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="col-lg-1 col-sm-1 text-center prevnext" style="position: relative;">
                        <a class="btn" href="#myCarousel" data-slide="next" id="scheduleprevnext" title="more"><i
                                class="fa fa-lg fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/story.js')}}"></script>
@endsection
