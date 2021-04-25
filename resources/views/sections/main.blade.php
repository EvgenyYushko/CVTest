@extends('layouts.app')

@section('content')

<div id="preloader">
    <div id="status"></div>
</div>

@include('partials.header')

@include('partials.skills')

@include('partials.work')

@include('partials.tech')

<section id="contact" class="pfblock">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <div class="pfblock-header">
                    <h2 class="pfblock-title">Drop me a line</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
                    </div>
                </div>

            </div>

        </div><!-- .row -->

        <div class="row">

            <div class="col-sm-6 col-sm-offset-3">

                <form id="contact-form" role="form">
                    <div class="ajax-hidden">
                        <div class="form-group wow fadeInUp">
                            <label class="sr-only" for="c_name">Name</label>
                            <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                            <label class="sr-only" for="c_email">Email</label>
                            <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                        </div>

                        <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                            <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Send Message</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>

        </div><!-- .row -->
    </div><!-- .container -->
</section>

@endsection