@extends('child')
@section('content')
@section('isi')

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Homestay List</h2>
                    <div class="bt-option">
                        <a href="./index">Home</a>
                        <span>Homestay List</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->

<section class="rooms-section spad">
    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Victoria Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Derson Rajagukguk</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b> Homestay dengan
                                        pemandangan
                                        indah yang
                                        memanjakan </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan semangka No. 89, Balige</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs1.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Bagasa Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Maylin Br Sormin</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b>Homestay minimalis
                                        dengan fasilitas
                                        lengkap dan letak strategis
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan mangga No.78 samping Indomaret, Silaen</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs2.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Hutahuruk Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Anggi Hutahuruk</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b>Homestay sederhana
                                        dengan fasilitas
                                        lengkap dengan pemandangan yang asri
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan D.I Panjaitan No.8A samping Smp Bintang Timur, Balige</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs3.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Dragon Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Roside Sinaga</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b>Homestay kualitas
                                        terjamin
                                        dengan fasilitas
                                        lengkap dan letak strategis dengan
                                        pemandangan yang memikat mata
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan Hj. Siregar No.100 , Soposurung</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs4.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Nicole Boru Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Mayasari Sidabalok</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b>Homestay minimalis
                                        dengan fasilitas
                                        lengkap dan letak strategis
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan Silimakuta No.78 samping Indomaret, Laguboti</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs5.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                        <div class="card-header text-muted border-bottom-0">
                            Jawara Homestay
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>Bonar Silalahi</b></h2>
                                    <p class="text-muted text-sm" class="justify"><b>About: </b>Homestay modern
                                        dengan fasilitas
                                        lengkap dan letak strategis
                                        Pemandangan asri
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                    class="fas fa-lg fa-building"></i></span>
                                            Address: Jalan Samosir No.78 samping Indomaret gang surya, Silaen</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                            Phone : + 08 - 12 22 34 52</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{asset('assets/dist/img/hs2.jpg')}}" alt="" class="img-square img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Rooms Section End -->

@endsection