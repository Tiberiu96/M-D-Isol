@extends('layouts/app')

@section('content')
<div class="container">
    <!--Section: Contact v.2-->
    <section class="section">

        <!--Section heading-->
        <h2 class="section h1 pt-4">Nous contacter</h2>
        <!--Section description-->
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate
            esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam. Quia, minima?</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 col-xl-9">
                <form id="contact-form" name="contact-form" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Votre nom</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Votre email</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="textarea" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Matière</label>
                            </div>
                        </div>
                    </div>
                    
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                <label for="message">Votre message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="center-on-small-only">
                    <a class="btn btn-primary" onclick="validateForm();">Envoyer</a>
                </div>
                <div class="h4 text-danger status mt-3"></div>
            </div>
            
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-xl-3">
                <ul class="contact-icons">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fa fa-envelope fa-2x"></i>
                        <p>mihaita@md.fr</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        @endsection
        @section('scripts')
        <script>
            function validateForm() {
                var name = document.getElementById('name').value;
                if (name == "") {
                    document.querySelector('.status').innerHTML = "Le nom ne peut pas être vide!";
                    return false;
                }
                var email = document.getElementById('email').value;
                if (email == "") {
                    document.querySelector('.status').innerHTML = "L'e-mail ne peut pas être vide";
                    return false;
                } else {
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if (!re.test(email)) {
                        document.querySelector('.status').innerHTML = "Format d'e-mail invalide";
                        return false;
                    }
                }
                var subject = document.getElementById('subject').value;
                if (subject == "") {
                    document.querySelector('.status').innerHTML = "Le sujet ne peut pas être vide";
                    return false;
                }
                var message = document.getElementById('message').value;
                if (message == "") {
                    document.querySelector('.status').innerHTML = "Le message ne peut pas être vide";
                    return false;
                }
                document.querySelector('.status').innerHTML = "Envoi en cours...";
            }
        </script>
        @endsection