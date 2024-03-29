@extends('header')

@section('content')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

<section id="01">
    <div class="container my-5">
        <div class="row space"></div>
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <img src="{{asset('assets/home/landing.png')}}" width="60%" class="mx-1 my-1">
            </div>

            <div class="col-lg-5 col-sm-5 col-10 mt-3">
                <a id="our-mission">01 - MISI KAMI</a>
                <h1 class="grid-0">Empowering</h1>
                <h1 class="grid-4">Children</h1>
                <h1 class="grid-0">through</h1>
                <h1 class="grid-4">Education</h1>
                <button class="btn px-5 py-2 my-1" type="submit" id="login" onclick="window.location='{{url('/get-involved')}}'"><b>Donate
                        Now</b></button>
            </div>
        </div>
    </div>
</section>

<section id="02">
    <div class="container">
        <div class="col-lg-12 col-sm-10 col-12 mt-5 text-center">
            <div class="row px-2" id="back-welcome">
                <div class="col-lg-12 col-sm-10 col-12 mt-5 text-center">
                    <a class="mt-10" id="our-mission">02 - PROGRAM KAMI</a><br><br>

                    <p class="programkami grid-1">
                        "Karena pembelajaran <span class="grid-2">tidak hanya di ruang kelas</span>, kami memfasilitasi
                        program edukasi yang <span class="grid-2">menarik </span> dan <span class=" grid-2">menyenangkan</span>
                        untuk anak-anak”
                    </p>

                    <a class="col-12" id="quote"><b>Seluruh program edukasi yang diberikan dikemas dengan konsep
                            Fun-Learning:</b>
                    </a>
                </div>

                <div class="cardgroup row p-lg-5 p-sm-3 my-2" style="text-align:start">
                    <div class="col-lg-3 col-md-6">
                        <div class="cardProgramK">
                            <div class="card-body">
                                <img class="mt-5" src="{{asset('assets/home/image1.png')}}" alt="Avatar" style="width:40%"><br><br>
                                <h5 class="card-title"><b>Pelajaran Umum</b></h5>
                                <p id="quote-1">Matematika, Bahasa Inggris, dsb.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="cardProgramK">
                            <div class="card-body">
                                <img class="mt-5" src="{{asset('assets/home/image2.png')}}" alt="Avatar" style="width:40%"><br><br>
                                <h5 class="card-title"><b>Skill</b></h5>
                                <p id="quote-1">Bisnis, kepemimpinan, kewirausahaan, seni, public speaking, dsb.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="cardProgramK">
                            <div class="card-body">
                                <img class="mt-5" src="{{asset('assets/home/image3.png')}}" alt="Avatar" style="width:40%"><br><br>
                                <h5 class="card-title"><b>Sharing Session</b></h5>
                                <p id="quote-1">Khusus untuk remaja, sharing session seputar passion dan dunia kerja</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="cardProgramK">
                            <div class="card-body">
                                <img class="mt-5" src="{{asset('assets/home/image4.png')}}" alt="Avatar" style="width:40%"><br><br>
                                <h5 class="card-title"><b>Pendidikan <span class="pKarakter">Karakter</span></b></h5>
                                <p id="quote-1">Toleransi, Kerjasama, Saling Menghargai, Kejujuran, dsb.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btnGetInvolved col p-3 text-center">
                    <button class=" btn px-5 py-2 mb-4" type="submit" id="login" onclick="window.location='{{url('get-involved')}}'"><b>Get Involved</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="03">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-10 text-center">
                <img src="{{asset('assets/home/who.png')}}" width="70%" class="mx-1 my-1">
            </div>

            <div class="whoweare col-lg-5 col-10 mt-3 text center">
                <a id="about-us">03 - SIAPAKAH KAMI</a><br>
                <h1 class="grid-2">Who We Are</h1>
                <a id="quote-2">
                    <b>Rebuilding Project merupakan gerakan sosial dibidang edukasi yang bekerja sama dengan panti
                        asuhan yang ada di Indonesia. Gerakan sosial ini bertujuan untuk membekali anak-anak yatim
                        piatu yang berusia 6 hingga 18 tahun dengan pengetahuan, kemampuan, dan nilai-nilai positif
                        sehingga mendorong anak-anak untuk berani bermimpi dan memberikan harapan untuk membangun
                        masa depan yang lebih baik.</b>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="04">
    <div class="container my-5 text-center">
        <div class="row p-3 justify-content-center">
            <div class="col-lg-12 text-center">
                <a class="mt-3" id="our-mission">04 - APA YANG KAMI LAKUKAN</a><br>
                <h1 class="grid-1"> What We Do</h1><br><br>
            </div>
        </div>

        <div class="whatwedocard row my-2">
            <div class="cardgroup row p-lg-5 p-sm-3 my-2" style="text-align:center">
                <div class="col-lg-3 col-md-6">
                    <div class="cardWWD">
                        <div class="card-body">
                            <h2 class="number text-center">01</h2>
                            <img class="whatWeDoPic" src="{{asset('assets/home/ilus1.png')}}" alt="Avatar"><br><br>
                            <p id="quoteWWD">
                                <b>Merancang program edukasi berkonsep Fun-Learning sesuai dengan kategori umur
                                    setiap anak</b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cardWWD">
                        <div class="card-body">
                            <h2 class="number text-center">02</h2>
                            <img class="whatWeDoPic" src="{{asset('assets/home/ilus2.png')}}" alt="Avatar"><br><br>
                            <p id="quoteWWD">
                                <b>Memperluas pengetahuan anak-anak yatim piatu di luar institusi pendidikan
                                    formal</b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cardWWD">
                        <div class="card-body">
                            <h2 class="number text-center">03</h2>
                            <img class="whatWeDoPic" src="{{asset('assets/home/ilus3.png')}}" alt="Avatar" ><br><br>
                            <p id="quoteWWD">
                                <b>Mendorong pengembangan kemampuan serta membangun pendidikan karakter</b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="cardWWD">
                        <div class="card-body">
                            <h2 class="number text-center">04</h2>
                            <img class="whatWeDoPic" src="{{asset('assets/home/ilus4.png')}}" alt="Avatar"><br><br>
                            <p id="quoteWWD"><b>Mendorong partisipasi anak-anak muda untuk berkontribusi dalam meningkatkan
                                    kualitas edukasi di panti asuhan di Indonesia</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let home = document.getElementById('home').id = 'this';
</script>
@endsection