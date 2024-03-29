@extends('header')

@section('content')
<link rel="stylesheet" href="{{asset('css/aboutUs.css')}}">

    <section id="01">
        <div class="container">
            <div class="row space"></div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-12 col-11 text-center">
                    <h1 class="aboutUsTitle grid-1 mt-5 mb-2">Let’s get to know <span class="grid-2">Rebuilding Project</span> and
                        <span class="grid-2">the people</span> behind !
                    </h1>

                    <a id="quote-2">Rebuilding Project didirikan untuk merespon kebutuhan pendidikan yang lebih menyeluruh untuk
                        anak-anak di panti asuhan di Indonesia.</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-4 text-right">
                    <img src="{{asset('assets/about.png')}}" width="100%" alt="background-about">
                </div>
            </div>
        </div>
    </section>

    <section id="02">
        <div class="container">
            <div class="row space"></div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 text-center">
                    <h1 class="ourMission grid-1"><span class="grid-2">Our</span> Mission
                    </h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5 mx-2">
                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-1 my-3">
                            <h1 class="grid-2 aligned">01</h1>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a class= "ourMissionOneFive"><b>Meningkatkan kualitas pendidikan di panti asuhan di
                                    Indonesia.</b></a>
                        </div>
                    </div>

                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-1 my-3">
                            <h1 class="grid-2 aligned">02</h1>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a class= "ourMissionOneFive"><b>Memperbanyak dan memperlengkapi variasi pengembangan
                                    pengetahuan untuk anak-anak di panti
                                    asuhan, yang berumur 6 - 18 tahun.</b></a>
                        </div>
                    </div>

                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-1 my-3">
                            <h1 class="grid-2 aligned">03</h1>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a class= "ourMissionOneFive"><b>Mendorong dan mengembangkan pengetahuan serta
                                    keterampilan anak-anak di panti asuhan
                                    melalui program edukasi berkonsep Fun-Learning, yang disesuaikan dengan setiap
                                    kategori
                                    umur anak.</b></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl- col-lg-5 mx-2">
                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-1 my-3">
                            <h1 class="grid-2 aligned">04</h1>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a class= "ourMissionOneFive"><b>Menjalin sinergi dan aktif bekerjasama dengan panti
                                    asuhan yang ada di Indonesia</b></a>
                        </div>
                    </div>

                    <div class="row my-3 mx-1" id="back">
                        <div class="col-xl-1 col-lg-1 col-1 ml-1 my-3">
                            <h1 class="grid-2 aligned">05</h1>
                        </div>

                        <div class="col-xl-10 col-lg-10 col-sm-10 col-9 ml-4 my-3">
                            <a class= "ourMissionOneFive"><b>Mendorong anak-anak muda untuk berkontribusi secara
                                    aktif
                                    dalam kegiatan sosial melalui
                                    program edukasi bagi anak-anak panti asuhan yang ada di Indonesia.</b></a>
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
                    <h1 class="grid-1 my-2 ourTeam">Our Team</h1>
                </div>

                <div style="border: solid #FFA216; width:223px;"></div>

                <div class="col-xl-12 col-lg-12 col-10 mt-4 mb-5 text-center" id="quote">
                    <a style="font-size: 22px;"><b>The wonderful faces behind Rebuilding Project. Hey, There!</b></a>
                </div>
            </div>
        </div>

        <section class="carousel slide" id="myCarousel" data-interval="false">
            <ol class="carousel-indicators" style="top: 105%;">
                <li data-target="#joshlyneCard" data-slide-to="0" class="active"></li>
                <li data-target="#joshlyneCard" data-slide-to="1"></li>
            </ol>

            <div class="col-xl-12 col-lg-12 col-sm-12 text-center">
                <div class="carousel-inner">
                    @for($i=0; $i<count($users) / 6; $i++)
                        <div class="carousel-item {{$i == 0 ?  "active" : ''}}">
                            <div class="grid-container">
                                @for($j = $i*6; $j < ((count($users) - $i * 6 >= 6 ? ($i+1)*6 : count($users))); $j++)
                                    <div class="col-xl-3 col-lg-5 col-sm-5 col-12 mx-xl-1 my-3" id="OTprofile">
                                        <div class="service-card" data-toggle="modal" data-target="#modal-card"
                                             onclick="showUser({{$users[$j]}})">
                                            <img class="card-img-top"
                                                 src="{{asset('assets/profile/'.$users[$j]->photo)}}"
                                                 alt="Card image cap"
                                                 style="max-height: 65%; height: auto; width: 100%; object-fit: cover; border-radius: 20px 20px 0 0">

                                            <div
                                                style="display:flex; height: 25%; justify-content: center; align-items: center;">
                                                <h5 class="card-title-profile"><b>{{$users[$j]->name}}</b>
                                                </h5>
                                            </div>

                                            <div id="card-text">
                                                {{$users[$j]->user_positions->name}}
                                            </div>
                                        </div>
                                    </div>

                                    @if($i > (count($users) / 6 - 1) && $j == count($users) - 1)
                                        @for($k = 0; $k < (count($users) % 6==0 ? 0 : 6 - count($users) % 6); $k++)
                                            <div class="col-xl-3 col-lg-5 col-sm-5 col-12 mx-xl-1 my-3">
                                                <div style="Width: 185px; Height: 325px;"></div>
                                            </div>
                                        @endfor
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>

                <div class="modal fade" id="modal-card" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="padding-left: 33px">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="border-radius: 30px 30px 30px 30px">
                            <div class="row" style="padding-top: 35px; padding-left: 6%">
                                <div class="col-lg-3 col-sm-7 col-8 my-lg-5 my-sm-5 mt-5 mb-3 mr-5 text-center">
                                    <img id="modal-profile-picture" class="float-left" alt="profile-picture" src="">
                                </div>

                                <div class="col-lg-8 col-sm-10 col-4 my-lg-5 my-sm-0 my-4 pt-3 ml-2">
                                    <h1 id="modal-name"></h1>
                                    <h4 class="mt-2" id="modal-position"></h4>
                                    <hr style="height:3px;width: 95%;background-color:#FFA216;float:left;margin-top:1%;margin-bottom:4%">
                                    <p class="my-3" id="modal-description"></p>
                                </div>
                            </div>

                            <div class="footer" style="position: absolute;bottom: 0; width: inherit; ">
                                <img src="{{asset('assets/header-footer/footerModal.png')}}"
                                     style="width: inherit; height: 180px; border-radius: 0px 0px 30px 30px"
                                     alt="footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-1 col-lg-1 col-sm-1 text-center prevnext">
                <a class="btn" href="#myCarousel" data-slide="prev" id="scheduleprevnext" title="go back">
                    <i class="fa fa-lg fa-chevron-left"></i>
                </a>
            </div>

            <div class="col-xl-1 col-lg-1 col-sm-1 text-center next">
                <a class="btn" href="#myCarousel" data-slide="next" id="scheduleprevnext" title="more">
                    <i class="fa fa-lg fa-chevron-right"></i>
                </a>
            </div>
        </section>
    </section>

    <section id="04">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 my-4 text-center">
                    <h1 class="grid-2" style="font-family: PoppinsB;font-size: 50px;">FAQ</h1>
                    <a style="font-family: PoppinsB;"><b>FREQUENTLY ASKED QUESTION</b></a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-sm-8"></div>
                <div class="col-xl-3 col-lg-3 col-sm-4 col-7 text-center">
                    <a class="nav-link mx-5 my-2 px-2" id="expand" style="font-family: madetommy;">Expand All</a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-1" id="back">
                    <div class=" row">
                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1">
                            <h3 class="faqNum ml-3" style="margin-bottom: 0;">01</h3>
                        </div>

                        <div class="faqTitle col-xl-10 col-lg-10 col-sm-10 col-9">
                            <h3 class="grid-2 ml-3" style="margin-bottom: 0;font-family: madetommy;font-size: 30px;">Apa
                                itu Rebuilding Project?</h3>
                        </div>

                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-1" class="fa fa-lg fa-caret-down carrot-1"></i></h4>

                            <h4><i id="header-FAQ-1-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-sm-11 col-8 pl-5 pr-0">
                        <b><a class="ml-5 mb-2" id="down-1">Rebuilding Project merupakan gerakan sosial di bidang
                                edukasi
                                yang dijalankan oleh para sukarelawan muda untuk melayani anak-anak yang ternaung dalam
                                panti asuhan di Indonesia. Rebuilding Project memfasilitasi program edukasi yang
                                berkonsep
                                Fun-Learning untuk memperlengkapi pengetahuan, kemampuan, serta pembentukan karakter
                                untuk
                                anak-anak panti asuhan di Indonesia. Karena pembelajaran tidak hanya di ruang kelas,
                                kami
                                memfasilitasi program edukasi yang menarik dan menyenangkan untuk anak-anak. </a></b>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-1" id="back-2">
                    <div class="row">
                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1">
                            <h3 class="faqNum2 ml-3" style="margin-bottom: 0;">02</h3>
                        </div>

                        <div class="faqTitle col-xl-10 col-lg-10 col-sm-10 col-9">
                            <h3 class="grid-3 ml-3" style="margin-bottom: 0;font-family: madetommy;font-size: 30px;">
                                Dimana lokasi gerakan sosial Rebuilding Project?</h3>
                        </div>

                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-2" class="fa fa-lg fa-caret-down carrot-0"></i></h4>
                            <h4><i id="header-FAQ-2-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-sm-11 col-8 pl-5 pr-0">
                        <b><a class="ml-5 mb-2" id="down-2">Sebagai starting point, proyek-proyek kami akan dimulai
                                dengan
                                panti asuhan yang berada di Pontianak, Indonesia. Harapan kami kedepannya, Rebuilding
                                Project dapat bekerjasama dan membawa perubahan yang positif untuk anak-anak di panti
                                asuhan
                                di seluruh kota di Indonesia.</a></b>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-1" id="back">
                    <div class="row">
                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1">
                            <h3 class="faqNum ml-3" style="margin-bottom: 0;">03</h3>
                        </div>

                        <div class="faqTitle col-xl-10 col-lg-10 col-sm-10 col-9">
                            <h3 class="grid-2 ml-3" style="margin-bottom: 0;font-family: madetommy;font-size: 30px;">
                                Mengapa Rebuilding Project dibentuk?</h3>
                        </div>

                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-3" class="fa fa-lg fa-caret-down carrot-1"></i></h4>

                            <h4><i id="header-FAQ-3-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-sm-11 col-8 pl-5 pr-0">
                        <b><a class="ml-5 mb-2" id="down-3">Rebuilding Project dibangun dengan dasar untuk merespon
                                kebutuhan pendidikan yang lebih menyeluruh untuk anak-anak di panti asuhan di Indonesia.
                                Gerakan sosial ini juga dilandasi dengan rasa ingin berbagi dengan sesama, dan keinginan
                                untuk memajukan bangsa Indonesia terutama melalui Pendidikan bagi kaum muda. </a></b>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-1" id="back-2">
                    <div class="row">
                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1">
                            <h3 class="faqNum2 ml-3" style="margin-bottom: 0;">04</h3>
                        </div>

                        <div class="faqTitle col-xl-10 col-lg-10 col-sm-10 col-9">
                            <h3 class="grid-3 ml-3" style="margin-bottom: 0;font-family: madetommy;font-size: 30px;">
                                Siapa target Rebuilding Project?</h3>
                        </div>

                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-4" class="fa fa-lg fa-caret-down carrot-0"></i></h4>
                            <h4><i id="header-FAQ-4-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-sm-11 col-8 pl-5 pr-0">
                        <b><a class="ml-5 mb-2" id="down-4">Target Rebuilding Project adalah anak-anak yatim piatu yang
                                memiliki umur berkisar 6 sampai 18 tahun, dan ternaung di dalam panti asuhan di
                                Indonesia.</a></b>
                    </div>
                </div>

                <div class="col-xl-10 col-lg-10 col-sm-10 col-10 my-3 p-1" id="back">
                    <div class="row">
                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1">
                            <h3 class="faqNum ml-3" style="margin-bottom: 0;">05</h3>
                        </div>

                        <div class="faqTitle col-xl-10 col-lg-10 col-sm-10 col-9">
                            <h3 class="grid-2 ml-3" style="margin-bottom: 0;font-family: madetommy;font-size: 30px;">
                                Bagaimana cara untuk berkontribusi?</h3>
                        </div>

                        <div class="faqTitle col-xl-1 col-lg-1 col-sm-1 col-1 aligned">
                            <h4><i id="header-FAQ-5" class="fa fa-lg fa-caret-down carrot-1"></i></h4>
                            <h4><i id="header-FAQ-5-a" class="fa fa-lg fa-times carrot-2"></i></h4>
                        </div>
                    </div>

                    <div class="col-xl-11 col-lg-11 col-sm-11 col-8 pl-5 pr-0">
                        <b><a class="ml-5 mb-2" id="down-5">Kami percaya semua orang bisa berkontribusi dalam
                                meningkatkan
                                kualitas edukasi untuk anak yatim piatu di Indonesia. Ada beberapa cara untuk dapat
                                berkontribusi, antara lain:
                                <ul>
                                    <li>Bergabung menjadi volunteer lapangan untuk terjun langsung menjalankan program
                                        edukasi
                                        yang telah dirancang oleh tim Rebuilding Project.
                                    </li>
                                    <li>Berdonasi dengan mengklik tombol ‘Donate Now’ di bagian ‘Get Involved’.</li>
                                    <li>Membeli merchandise Rebuilding Project. Seluruh profit penjualan merchandise ini
                                        akan
                                        digunakan untuk mendukung program Rebuilding Project dalam mengedukasi anak
                                        yatim piatu di
                                        Indonesia.
                                    </li>
                                </ul>
                            </a></b>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="{{asset('js/about-us.js')}}"></script>
@endsection
