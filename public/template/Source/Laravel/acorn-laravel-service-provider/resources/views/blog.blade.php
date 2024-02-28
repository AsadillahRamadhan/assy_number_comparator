@php
    $html_tag_data = [];
    $title = 'Blog';
    $description= 'Service Provider Blog';
@endphp
@extends('layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
@endsection

@section('js_vendor')
@endsection

@section('js_page')
@endsection

@section('content')
    <div class="col">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container mb-3">
            <div class="row">
                <!-- Title Start -->
                <div class="col mb-2">
                    <h1 class="mb-2 pb-0 display-4" id="title">{{ $title }}</h1>
                    <div class="text-muted font-heading text-small">Let us manage the database engines for your applications so you can focus on building.</div>
                </div>
                <!-- Title End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- List Start -->
            <div class="col-12 col-xxl-8 mb-5">
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-1.webp" class="card-img-top sh-35 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="#">Basic Introduction to Databases</a>
                        </h4>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Jujubes brownie marshmallow apple pie donut ice cream jelly-o jelly-o gummi bears. Tootsie roll chocolate bar dragée bonbon cheesecake
                            icing. Danish wafer donut cookie caramels gummies topping.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">145</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-2.webp" class="card-img-top sh-35 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="#">Javascript API with Examples</a>
                        </h4>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Chocolate cake biscuit donut cotton candy soufflé cake macaroon. Halvah chocolate cotton candy sweet roll jelly-o candy danish dragée.
                            Apple pie cotton candy tiramisu biscuit cake muffin tootsie roll bear claw cake. Cupcake cake fruitcake. Powder chocolate bar soufflé
                            gummi bears topping donut.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="/img/profile/profile-2.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Lisa Jackson</a>
                                        <div class="text-muted text-small">Design Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">459</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">73</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-3.webp" class="card-img-top sh-35 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="#">Backend & Frontend Methods</a>
                        </h4>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Caramels tart danish jelly lemon drops cotton candy muffin. Icing fruitcake bear claw fruitcake tart ice cream chocolate bar sweet roll.
                            Cupcake gummi bears fruitcake. Fruitcake cake liquorice fruitcake caramels marshmallow lollipop. Chocolate gummies cake sweet. Bonbon
                            donut muffin. Biscuit donut powder sugar plum pastry.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">368</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">58</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5">
                    <a href="#">
                        <img src="/img/blog/blog-image-4.webp" class="card-img-top sh-35 theme-filter" alt="card image" />
                    </a>
                    <div class="card-body">
                        <h4 class="mb-3">
                            <a href="#">Server Security Protocols</a>
                        </h4>
                        <p class="text-alternate sh-5 clamp-line mb-0" data-line="2">
                            Oat cake soufflé gummi bears donut sweet. Gummies chocolate liquorice chocolate cake jelly-o cake. Toffee cupcake gummi bears gummies
                            dragée danish chocolate bar. Jelly-o gingerbread lollipop tootsie roll cupcake sugar plum jelly donut. Soufflé cupcake sesame snaps oat
                            cake. Liquorice jelly powder fruitcake oat cake.
                        </p>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="sw-5 d-inline-block position-relative me-3">
                                        <img src="/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb" />
                                    </div>
                                    <div class="d-inline-block">
                                        <a href="#">Olli Hawkins</a>
                                        <div class="text-muted text-small">Development Lead</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-muted">
                                <div class="row g-0 justify-content-end">
                                    <div class="col-auto pe-3">
                                        <i data-acorn-icon="eye" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">215</span>
                                    </div>
                                    <div class="col-auto">
                                        <i data-acorn-icon="message" class="text-primary me-1" data-acorn-size="15"></i>
                                        <span class="align-middle">15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-xl btn-outline-primary sw-30">Load More</button>
                    </div>
                </div>
            </div>
            <!-- List End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xxl-4 mb-n5">
                <div class="row">
                    <!-- Mailing List Start -->
                    <div class="col-12">
                        <div class="card mb-5">
                            <div class="card-body row g-0">
                                <div class="col-12">
                                    <div class="cta-3">Want to hear from us?</div>
                                    <div class="mb-3 cta-3 text-primary">Join our email list!</div>
                                    <div class="text-muted mb-3">Cheesecake chocolate carrot cake pie lollipop lemon drops.</div>
                                    <div class="d-flex flex-column justify-content-start">
                                        <div class="text-muted mb-2">
                                            <input type="email" class="form-control" placeholder="E-mail" />
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-icon btn-icon-start btn-primary">
                                        <i data-acorn-icon="chevron-right"></i>
                                        <span>Join</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mailing List End -->

                    <!-- Guides Start -->
                    <div class="col-12 mb-5">
                        <h2 class="small-title">Guides</h2>
                        <div class="mb-n2">
                            <div class="card mb-2">
                                <a href="#" class="row g-0 sh-9">
                                    <div class="col-auto">
                                        <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">
                                                <i data-acorn-icon="server"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <div class="text-alternate">How to create hosting?</div>
                                                <div class="text-small text-muted">Snaps muffin macaroon.</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card mb-2">
                                <a href="#" class="row g-0 sh-9">
                                    <div class="col-auto">
                                        <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">
                                                <i data-acorn-icon="antenna"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <div class="text-alternate">What to do with it?</div>
                                                <div class="text-small text-muted">Brownie ice cream marshmallow topping.</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card mb-2">
                                <a href="#" class="row g-0 sh-9">
                                    <div class="col-auto">
                                        <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">
                                                <i data-acorn-icon="gear"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <div class="text-alternate">How does it work?</div>
                                                <div class="text-small text-muted">Sugar plum gummi bears jujubes.</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card mb-2">
                                <a href="#" class="row g-0 sh-9">
                                    <div class="col-auto">
                                        <div class="sw-9 sh-9 d-inline-block d-flex justify-content-center align-items-center">
                                            <div class="fw-bold text-primary">
                                                <i data-acorn-icon="wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card-body d-flex flex-column ps-0 pt-0 pb-0 h-100 justify-content-center">
                                            <div class="d-flex flex-column">
                                                <div class="text-alternate">What is to cost?</div>
                                                <div class="text-small text-muted">Jujubes candy jelly-o topping.</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Guides End -->

                    <!-- Tags Start -->
                    <div class="col-12 col-xl-12">
                        <h2 class="small-title">Tags</h2>
                        <div class="card mb-5">
                            <div class="card-body">
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Food (12)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Baking (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Sweet (1)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Molding (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Pastry (5)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Healthy (7)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Rye (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Simple (3)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Cake (2)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Recipe (6)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Bread (8)</span>
                                </button>
                                <button class="btn btn-sm btn-icon btn-icon-end btn-outline-primary mb-1 me-1" type="button">
                                    <span>Wheat (2)</span>
                                </button>
                            </div>
                        </div>
                        <!-- Tags End -->
                    </div>
                </div>
            </div>
            <!-- Right Side End -->
        </div>
    </div>
@endsection
