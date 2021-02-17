@extends('header')

@section('content')
    <section id="01">
        <div class="container">
            <div class="row space"></div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-11 text-center">
                    <h1 class="grid-1 mt-5 mb-2">Let’s get to know <span class="grid-2">Rebuilding Project</span> and
                        <span class="grid-2">the people</span> behind !</h1>
                    <a>Rebuilding Project didirikan untuk merespon kebutuhan pendidikan yang lebih menyeluruh untuk
                        anak-anak di panti asuhan di Indonesia.</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-4 text-right">
                    <img src="{{asset('assets/about/bg.jpg')}}" width="100%">
                </div>
            </div>
        </div>
    </section>

    <section id="02">
        <div class="container">
            <div class="row space"></div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 text-center">
                    <h1 class="grid-1 my-2"><span class="grid-2">Our</span> Mission</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5 mx-2">
                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl- col-lg-1 col-1 ml-2 my-3">
                            <h1 class="grid-2 aligned">01</h1>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a>Meningkatkan kualitas pendidikan di panti asuhan di Indonesia.</a>
                        </div>
                    </div>

                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-2 my-3">
                            <h1 class="grid-2 aligned">02</h1>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a>Memperbanyak dan memperlengkapi variasi pengembangan pengetahuan untuk anak-anak di panti
                                asuhan, yang berumur 6 - 18 tahun.</a>
                        </div>
                    </div>

                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-2 my-3">
                            <h1 class="grid-2 aligned">03</h1>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a>Mendorong dan mengembangkan pengetahuan serta keterampilan anak-anak di panti asuhan
                                melalui program edukasi berkonsep Fun-Learning, yang disesuaikan dengan setiap kategori
                                umur anak.</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl- col-lg-5 mx-2">
                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-2 my-3">
                            <h1 class="grid-2 aligned">04</h1>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a>Menjalin sinergi dan aktif bekerjasama dengan panti asuhan yang ada di Indonesia</a>
                        </div>
                    </div>
                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-2 my-3">
                            <h1 class="grid-2 aligned">05</h1>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a>Mendorong anak-anak muda untuk berkontribusi secara aktif dalam kegiatan sosial melalui
                                program edukasi bagi anak-anak panti asuhan yang ada di Indonesia.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <section id="team-background">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 mt-5 text-center">
                    <h1 class="grid-1 my-2">Our Team</h1>
                </div>

                <div style="border: 3px solid #FFA216; width:140px;"></div>

                <div class="col-xl-12 col-lg-12 col-10 mt-4 mb-5 text-center">
                    <a>The wonderful faces behind Rebuilding Project. Hey, There!</a>
                </div>

                <div class="col-xl-12 col-lg-12 text-center prevnexthp">
                    <a class="btn" href="#myCarousel" data-slide="prev" id="scheduleprevnext" title="go back"><i
                            class="fa fa-lg fa-chevron-left"></i></a>
                    <a class="btn" href="#myCarousel" data-slide="next" id="scheduleprevnext" title="more"><i
                            class="fa fa-lg fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <section class="carousel slide" id="myCarousel" data-interval="false" id="postsCarousel">
            <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                @for($i=0; $i<count($users)/6; $i+=6)
                    <div class="grid-container carousel-item">
                        @for($j = $i; $j<6*$i; $j++)
                            <div class="col-xl-3 col-lg-5 col-sm-5 col-12 mx-xl-1 ml-5 my-3" id="OTprofile">
                                <div class="service-card" data-toggle="modal" data-target="#joshlyneCard"
                                     onclick="showUser({{$users[$j]}})">
                                    <img class="card-img-top" src="{{asset('assets/profile/'.$users[$j]->photo)}}"
                                         alt="Card image cap"
                                         style="max-height: 65%; height: auto; width: 100%; object-fit: cover; border-radius: 20px 20px 0 0">

                                    <div
                                        style="display:flex; height: 25%; justify-content: center; align-items: center;">
                                        <h5 class="card-title-profile"><b>{{$users[$j]->name}}</b></h5>
                                    </div>

                                    <div id="card-text">
                                        {{$users[$j]->user_positions->name}}
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor

                @for($j=count($users) - count($users) % 6 - 1; $j<count($users); $j++)
                    <div class="grid-container carousel-item">
                        <div class="col-xl-3 col-lg-5 col-sm-5 col-12 mx-xl-1 ml-5 my-3" id="OTprofile">
                            <div class="service-card" data-toggle="modal" data-target="#joshlyneCard"
                                 onclick="showUser({{$users[$j]}})">
                                <img class="card-img-top" src="{{asset('assets/profile/'.$users[$j]->photo)}}"
                                     alt="Card image cap"
                                     style="max-height: 65%; height: auto; width: 100%; object-fit: cover; border-radius: 20px 20px 0 0">

                                <div
                                    style="display:flex; height: 25%; justify-content: center; align-items: center;">
                                    <h5 class="card-title-profile"><b>{{$users[$j]->name}}</b></h5>
                                </div>

                                <div id="card-text">
                                    {{$users[$j]->user_positions->name}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

                <div style="position: absolute; top: 0; right: 10px; height: 100%;">
                    <div class="button-container prevnext"
                         style="float: right; vertical-align: middle; overflow-y: auto">
                        <a class="btn" href="{{$users->nextPageUrl()}}" data-slide="next" id="scheduleprevnext"
                           title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                    </div>
                </div>

                <div class="modal fade" id="modal-profile" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding-left: 33px">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-radius: 30px 30px 0px 0px">
                            <div class="row" style="padding-top: 120px; padding-left: 6%">
                                <div class="col-lg-3 col-sm-7 col-8 my-lg-5 my-sm-5 mt-5 mb-3 mr-5 text-center">
                                    <img id="modal-profile-picture">
                                </div>
                                <div class="col-lg-8 col-sm-10 col-4 my-lg-5 my-sm-0 my-4 pt-3 ml-5">
                                    <h1 class="mt-4 modal-name"></h1>
                                    <h4 class="mt-2 modal-position"></h4>
                                    <hr style="height:3px;width: 95%;background-color:#FFA216;float:left;margin-top:1%;margin-bottom:4%">
                                    <p class="my-3 modal-description"></p>
                                </div>
                            </div>

                            <div class="footer" style="position: absolute;bottom: 0; width: inherit">
                                <img src="{{asset('assets/header-footer/footerModal.png')}}" style="width: inherit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="04">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 my-4 text-center">
                    <h1 class="grid-2">FAQ</h1>
                    <a><b>Frequently Asked Question</b></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-8"></div>
                <div class="col-xl-3 col-lg-3 col-sm-4 col-7 text-center">
                    <a class="nav-link mx-5 my-2 px-2" id="expand">Expand All</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-4" id="back">
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-sm-11 col-10">
                            <h3 class="grid-2">Apa itu Rebuilding Project?</h3>
                        </div>

                        <div class="col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-1" class="fa fa-lg fa-caret-down carrot-1"></i></h4>
                            <h4><i id="header-FAQ-1-a" class="fa fa-lg fa-times carrot-1"></i></h4>
                        </div>
                    </div>

                    <a id="down-1">Rebuilding Project merupakan gerakan sosial di bidang edukasi yang dijalankan oleh
                        para sukarelawan muda untuk anak-anak yang ternaung di panti asuhan di Indonesia. </a>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-4" id="back-2">
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-sm-11 col-10">
                            <h3 class="grid-3">Dimana lokasi gerakan sosial Rebuilding Project?</h3>
                        </div>

                        <div class="col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-2" class="fa fa-lg fa-caret-down carrot-2"></i></h4>
                            <h4><i id="header-FAQ-2-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <a id="down-2" style="color:white">Sebagai starting point, proyek-proyek kami akan dimulai dengan
                        panti asuhan yang berada di Pontianak, Indonesia. Harapan kami kedepannya, Rebuilding Project
                        dapat bekerjasama dan membawa perubahan yang positif untuk anak-anak di panti asuhan di seluruh
                        kota di Indonesia. </a>
                </div>
                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-4" id="back">
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-sm-11 col-10">
                            <h3 class="grid-2">Mengapa Rebuilding Project dibentuk?</h3>
                        </div>

                        <div class="col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-3" class="fa fa-lg fa-caret-down carrot-1"></i></h4>
                            <h4><i id="header-FAQ-3-a" class="fa fa-lg fa-times carrot-1"></i></h4>
                        </div>
                    </div>

                    <a id="down-3">Rebuilding Project dibangun dengan dasar untuk merespon kebutuhan pendidikan yang
                        lebih menyeluruh untuk anak-anak di panti asuhan di Indonesia. Gerakan sosial ini juga dilandasi
                        dengan rasa ingin berbagi dengan sesama, dan keinginan untuk memajukan bangsa Indonesia terutama
                        melalui Pendidikan bagi kaum muda. </a>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-4" id="back-2">
                    <div class="row">
                        <div class="col-xl-11 col-lg-11 col-sm-11 col-10">
                            <h3 class="grid-3">Siapa target Rebuilding Project?</h3>
                        </div>

                        <div class="col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-4" class="fa fa-lg fa-caret-down carrot-2"></i></h4>
                            <h4><i id="header-FAQ-4-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <a id="down-4" style="color:white">Target Rebuilding Project adalah anak-anak yatim piatu yang
                        memiliki umur berkisar 6 sampai 18 tahun, dan ternaung di dalam panti asuhan di Indonesia. </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        let limit = 6;
        let down1 = document.getElementById("down-1");
        let down2 = document.getElementById("down-2");
        let down3 = document.getElementById("down-3");
        let down4 = document.getElementById("down-4");
        let x1 = document.getElementById("header-FAQ-1-a");
        let x2 = document.getElementById("header-FAQ-2-a");
        let x3 = document.getElementById("header-FAQ-3-a");
        let x4 = document.getElementById("header-FAQ-4-a");
        let c1 = document.getElementById("header-FAQ-1");
        let c2 = document.getElementById("header-FAQ-2");
        let c3 = document.getElementById("header-FAQ-3");
        let c4 = document.getElementById("header-FAQ-4");
        let shownUser = null;

        x1.style.display = "none";
        x2.style.display = "none";
        x3.style.display = "none";
        x4.style.display = "none";
        down1.style.display = "none";
        down2.style.display = "none";
        down3.style.display = "none";
        down4.style.display = "none";
        let faqExpanded = false;
        let expand = document.getElementById("expand");

        c1.onclick = function () {
            down1.style.display = "block";
            x1.style.display = "block";
            c1.style.display = "none";
        }
        c2.onclick = function () {
            down2.style.display = "block";
            x2.style.display = "block";
            c2.style.display = "none";
        }
        c3.onclick = function () {
            down3.style.display = "block";
            x3.style.display = "block";
            c3.style.display = "none";
        }
        c4.onclick = function () {
            x4.style.display = "block";
            c4.style.display = "none";
            down4.style.display = "block";
        }

        expand.onclick = function () {
            if (!faqExpanded) {
                faqExpanded = !faqExpanded;
                down1.style.display = "block";
                x1.style.display = "block";
                c1.style.display = "none";
                down2.style.display = "block";
                x2.style.display = "block";
                c2.style.display = "none";
                down3.style.display = "block";
                x3.style.display = "block";
                c3.style.display = "none";
                x4.style.display = "block";
                c4.style.display = "none";
                x4.style.transition = "2s"
                down4.style.display = "block";
                expand.innerHTML = "Collapse All"
            } else {
                faqExpanded = !faqExpanded;
                down1.style.display = "none";
                x1.style.display = "none";
                c1.style.display = "block";
                down2.style.display = "none";
                x2.style.display = "none";
                c2.style.display = "block";
                down3.style.display = "none";
                x3.style.display = "none";
                c3.style.display = "block";
                x4.style.display = "none";
                c4.style.display = "block";
                x4.style.transition = "2s"
                down4.style.display = "none";
                expand.innerHTML = "Expand All"
            }
        }

        window.onclick = function (event) {
            if (event.target === x1) {
                down1.style.display = "none";
                x1.style.display = "none";
                c1.style.display = "block";
            }
            if (event.target === x2) {
                down2.style.display = "none";
                x2.style.display = "none";
                c2.style.display = "block";
            }
            if (event.target === x3) {
                down3.style.display = "none";
                x3.style.display = "none";
                c3.style.display = "block";
            }
            if (event.target === x4) {
                down4.style.display = "none";
                x4.style.display = "none";
                c4.style.display = "block";
                c4.style.transition = "2s";
            }
        }

        function showUser(user) {
            document.getElementsByClassName("modal-name").innerHTML = user['name'];
            document.getElementsByClassName("modal-position").innerHTML = user['user_positions'].name;
            document.getElementsByClassName("modal-story").innerHTML = '"' + user['story'] + '"';
            document.getElementsByClassName("modal-profile-picture").src = 'assets/profile/' + user['photo'];
            console.log(user);
        }

        let about = document.getElementById('about').id = 'this';

        $('.carousel').carousel({
            interval: false,
        });
    </script>
@endsection
