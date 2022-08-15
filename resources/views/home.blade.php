@extends('layouts.app')

@section('content')
<div class="container" style="background: hsl(180deg 25% 25%)">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/media/carousel/1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/media/carousel/2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/media/carousel/3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="services container">
    <hr>
    <div class="what-we-do my-4">
        <div class="h2 text-center text-uppercase font-weight-bold" style="color: hsl(180deg 25% 25%)">ce que nous faisons?</div>
        <div class="title-description text-center">
            Nisi ad aliqua non do laborum consectetur esse quis id incididunt velit.
        </div>
    </div>
    <div class="row d-flex flex-direction-row gy-4">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('storage/media/what-we-do/0.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Excepteur exercitation ut aute reprehenderit veniam consectetur cupidatat. Mollit anim magna sunt enim reprehenderit voluptate cupidatat non ut aliqua sit nostrud ea. Pariatur in voluptate deserunt dolore ut eu est. Elit aute ex ea aute nulla aute exercitation.
                        Ad adipisicing ipsum Lorem aliqua fugiat veniam eu. Non do cillum ea dolor. Et nisi sunt consequat elit tempor laboris et in fugiat.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('storage/media/what-we-do/1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Excepteur exercitation ut aute reprehenderit veniam consectetur cupidatat. Mollit anim magna sunt enim reprehenderit voluptate cupidatat non ut aliqua sit nostrud ea. Pariatur in voluptate deserunt dolore ut eu est. Elit aute ex ea aute nulla aute exercitation.
                        Ad adipisicing ipsum Lorem aliqua fugiat veniam eu. Non do cillum ea dolor. Et nisi sunt consequat elit tempor laboris et in fugiat.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <img src="{{ asset('storage/media/what-we-do/2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Excepteur exercitation ut aute reprehenderit veniam consectetur cupidatat. Mollit anim magna sunt enim reprehenderit voluptate cupidatat non ut aliqua sit nostrud ea. Pariatur in voluptate deserunt dolore ut eu est. Elit aute ex ea aute nulla aute exercitation.
                        Ad adipisicing ipsum Lorem aliqua fugiat veniam eu. Non do cillum ea dolor. Et nisi sunt consequat elit tempor laboris et in fugiat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection