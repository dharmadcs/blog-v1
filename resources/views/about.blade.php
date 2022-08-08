@extends('layouts.frontend')

@section('content')
<article class="about-section py-5">
    <div class="container">
        <h2 class="title mb-3">About Me</h2>
            <p>
                <b>DARMAJI - Backend Developer</b>
                <br>
                A student at STMIK Jayakarta, has
                interests and abilities
                in making a website application,
                especially on the backend. My initial
                programming language is PHP.
                Desire to master other backend
                programming languages.
            </p>

                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="https://www.instagram.com/dharmadcs" target="_blank"><i class="fab fa-instagram fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/darmaji-dcs-817a531bb/" target="_blank"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.facebook.com/d.clevers792" target="_blank"><i class="fab fa-facebook fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.github.com/dharmadcs" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
                </ul>

    </div>
</article>
<!--//about-section-->

<section class="cta-section theme-bg-light py-5">
    @include('includes.subscribe')
</section>
@endsection