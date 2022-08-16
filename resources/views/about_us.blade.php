@extends('layouts/app')

@section('content')
<div class="container mb-2">
    <div class="h2 text-right fw-bold text-uppercase" style="color: hsl(180deg 25% 25%)">à propos de nous</div>
    <hr>
    <div class="text-center my-5">
        <div class="h2 fw-bold" style="color: hsl(180deg 25% 25%)">A TRADITION OF EXCELLENCE</div>
        <div class="p">dictum elementum velit. Fusce euismod consequat ante psum dolor sit amet, consectetuer adipiscing</div>
    </div>
    <div style="max-width: 100%">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('storage/media/about_us/0.jpg') }}" style="width:95%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body fs-5 ">
                        <h5 class="card-title fw-bold mb-2">Rhoncus Curabitur purus eleifend quis habitant quisque pulvinar dictum blandit lorem cursus neque massa pretium luctus laoreet justo iaculis tempus.</h5>
                        <p class="card-text">Interdum sem Hymenaeos praesent hymenaeos scelerisque montes parturient nam senectus viverra sagittis habitant iaculis. Amet auctor odio viverra condimentum dignissim congue pulvinar ridiculus senectus Dictum eget quam torquent tellus semper tortor fames egestas tempor augue luctus. Bibendum metus pharetra purus hac, dis ut aptent montes quisque libero adipiscing lectus tincidunt, lacinia nonummy viverra. Mus sed in tortor tellus habitant. Velit varius elit volutpat lectus posuere placerat dictumst et torquent rhoncus nulla varius lorem sagittis eleifend vitae malesuada euismod posuere.</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
<!-- @section('scripts')
<script>
</script>
@endsection -->