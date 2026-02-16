@extends('font-end.app')
@section('content')

@section('styles')
    @include('layouts.font-end.style')
@endsection

@section('header')
    @include('layouts.font-end.header_home')
@endsection



<style>
    .partner-card {
        height: 180px!important;
        background-color: white;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 8px solid #EC1D3D;
        margin-bottom: 30px;
        box-shadow: 0px 0px 10px 0px #ccc;
    }
</style>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wow fadeInUp text-center">
                <h2 style="color: #EC1D3D;">Associate Partners</h2>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">

        <div class="col-md-4 col-12">
            <div class="partner-card">
                <a href="https://www.chefonline.com/associate-partners/wpc">
                    <img src="https://www.chefonline.com/assets/images/associate-partners/wpc.png" class="icons">
                </a>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="partner-card">
                <a href="#">
                    <img src="https://www.chefonline.com/assets/images/associate-partners/paytap.png" class="icons">
                </a>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="partner-card">
                <a href="https://www.chefonline.com/associate-partners/cocacola">
                    <img src="https://www.chefonline.com/assets/images/associate-partners/cococola.png" class="icons">
                </a>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="partner-card">
                <a href="https://www.chefonline.com/associate-partners/921">
                    <img src="https://www.chefonline.com/assets/images/associate-partners/921-Basmati-Rice.png" class="icons">
                </a>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="partner-card">
                <a href="https://www.chefonline.com/associate-partners/cornerstone">
                    <img src="https://www.chefonline.com/assets/images/associate-partners/cotnerstoneweb.png" class="icons">
                </a>
            </div>
        </div>

    </div>

</div>


@section('footer')
    @include('layouts.font-end.footer')
@endsection

@section('scripts')
@include('layouts.font-end.javascript')
@endsection

@endsection
