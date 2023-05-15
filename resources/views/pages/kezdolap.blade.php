@extends('layouts.app')

@section('content')
<section class="py-11 bg-light-gradient border-bottom border-white border-5">
    <div class="bg-holder overlay overlay-light" style="background-image:url(assets/img/gallery/header-bg.png);background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row flex-center">
            <div class="col-12 mb-10">
                <div class="d-flex align-items-center flex-column">
                    <h1 class="fw-normal"> Üdvözöljük a divat és stílus világában!</h1>
                    <h1 class="fs-2 fs-lg-4 fs-md-3 fw-bold">Találja meg az ideális ruhát, ami az önhöz és stílusához illik.</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="py-0" id="header" style="margin-top: -23rem !important;">

    <div class="container">
        <div class="row g-0">
            
            <div class="col-md-12">
                <div class="card card-span h-100 text-white"> <img class="img-fluid" src="assets/img/gallery/him.png" width="1110" alt="..." />
                    <div class="card-img-overlay d-flex flex-center"> <a class="btn btn-lg btn-light" href="{{ route('termekek') }}">Önnek </a></div>
                </div>
            </div>
        </div>
    </div>


</section>

@endsection


