<?php
include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grupo7Automatas</title>
    <link href="css.css?family=Lato:400,400i|Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>Grupo7Automatas</title>
                                    <defs>
                                        <lineargradient x1="100%" y1="0%" x2="0%" y2="100%" id="logo-gradient-b">
                                            <stop stop-color="#39D8C8" offset="0%"></stop>
                                            <stop stop-color="#BCE4F4" offset="47.211%"></stop>
                                            <stop stop-color="#838DEA" offset="100%"></stop>
                                        </lineargradient>
                                        <path d="M32 16H16v16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v14z" id="logo-gradient-a"></path>
                                        <lineargradient x1="23.065%" y1="25.446%" y2="100%" id="logo-gradient-c">
                                            <stop stop-color="#1274ED" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#1274ED" offset="100%"></stop>
                                        </lineargradient>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd">
                                        <mask id="logo-gradient-d" fill="#fff">
                                            <use xlink:href="#logo-gradient-a"></use>
                                        </mask>
                                        <use fill="url(#logo-gradient-b)" xlink:href="#logo-gradient-a"></use>
                                        <path fill="url(#logo-gradient-c)" mask="url(#logo-gradient-d)" d="M-16-16h32v32h-32z"></path>
                                    </g>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center">
                <div class="container-sm">
                    <div class="hero-inner">
                        <h1 class="hero-title h2-mobile mt-0 is-revealing">Bienvenidos</h1>
                        <p class="hero-paragraph is-revealing">Grupo 7</p>
						<div class="features-inner section-inner has-bottom-divider">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Automata 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Autómata 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#tabs-3" role="tab"><i class="fas fa-info-circle"></i> Info grupo</a>
                                </li>
                            </ul><!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="features-wrap">
                                        <div class="feature is-revealing">
                                            <div class="feature-inner">
                                                <div class="feature-icon">
                                                    <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="M48.066 61.627c6.628 0 10.087-16.79 10.087-23.418 0-6.627-5.025-9.209-11.652-9.209C39.874 29 24 42.507 24 49.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".24" fill="#A0A6EE"></path>
                                                            <path d="M26 54l28-28" stroke="#838DEA" stroke-width="2" stroke-linecap="square"></path>
                                                            <path d="M26 46l20-20M26 38l12-12M26 30l4-4M34 54l20-20M42 54l12-12" stroke="#767DE1" stroke-width="2" stroke-linecap="square"></path>
                                                            <path d="M50 54l4-4" stroke="#838DEA" stroke-width="2" stroke-linecap="square"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h3 class="feature-title">L= {0,1}</h3>
                                                <p class="text-sm">AFD con el lenguaje binario, que acepte las palabra que no contienen la subcadena 11 pero si 00.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="form-carga1" name="form-carga1" class="form-carga">
                                        <div class="row">
                                            <div class="col-5 col-sm-12">
                                                <div class="hero-form newsletter-form field field-grouped is-revealing pb-16">
                                                    <div class="control control-expanded">
                                                        <input class="input" type="text" name="words1" id="words1" placeholder="Ingresa tus palabaras&hellip;">
                                                    </div>
                                                    <div class="control">
                                                        <a class="button button-primary button-block button-shadow" onclick="searchByterm($('#words1').val(),1)">Validar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 col-sm-10">
                                                <div class="hero-form newsletter-form field field-grouped is-revealing pb-16">
                                                    <div class="control control-expanded">
                                                        <input type="file" name="carga1" id="fileCSV1" accept=".csv,.txt">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="btn btn-success" onclick='prepareUpload(1)'><i class="fas fa-upload"></i> Validar</div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-3">
                                            <figure class="figure" style="color: #339AF0;">
                                                <i class="fas fa-tint"></i>
                                                <figcaption class="figure-caption">Lenguaje aceptado</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-3">
                                            <figure class="figure" style="color: #48A868;">
                                                <i class="fas fa-tint"></i>
                                                <figcaption class="figure-caption">Cadena aceptada</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-3">
                                            <figure class="figure" style="color: #F48225;">
                                                <i class="fas fa-tint"></i>
                                                <figcaption class="figure-caption">Cadena no aceptada</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-3">
                                            <figure class="figure" style="color: #E53935;">
                                                <i class="fas fa-tint"></i>
                                                <figcaption class="figure-caption">Alfabeto inválido</figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-12 text-left" id="carga-content-result-ajax1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <table class="table table-sm">
                                                <thead>
                                                <tr class="table-info">
                                                    <th>Paso</th>
                                                    <th>0</th>
                                                    <th>1</th>
                                                    <th>Aceptación</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    foreach ($arrPasos1 as $intPaso=>$arrDestinos){
                                                        ?>
                                                        <tr class="<?= (isset($arrDestinos['FINAL']) && $arrDestinos['FINAL'] ==1)?'table-success':''?>">
                                                            <td><?= $intPaso ?></td>
                                                            <td><?= $arrDestinos['0'] ?></td>
                                                            <td><?= $arrDestinos['1'] ?></td>
                                                            <td><?= (isset($arrDestinos['FINAL']) && $arrDestinos['FINAL'] ==1)?'SI':'' ?></td>

                                                        </tr>
                                                        <?php
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <img src="dist/images/automatas1.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="features-wrap">
                                        <div class="feature is-revealing">
                                            <div class="feature-inner">
                                                <div class="feature-icon">
                                                    <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path d="M48.066 61.627c6.628 0 10.087-16.79 10.087-23.418 0-6.627-5.025-9.209-11.652-9.209C39.874 29 24 42.507 24 49.135c0 6.627 17.439 12.492 24.066 12.492z" fill-opacity=".24" fill="#75ABF3"></path>
                                                            <path d="M34 52V35M40 52V42M46 52V35M52 52V42M28 52V28" stroke="#4D8EF7" stroke-width="2" stroke-linecap="square"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <h3 class="feature-title">L= {a,b,c}</h3>
                                                <p class="text-sm">Utilizando el lenguaje con el alfabeto {a, b, c} donde las palabras contienen las subcadenas
                                                    abc, bca y cab</p>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="form-carga2" name="form-carga" class="form-carga">
                                        <div class="row">
                                            <div class="col-5 col-sm-12">
                                                <div class="hero-form newsletter-form field field-grouped is-revealing pb-16">
                                                    <div class="control control-expanded">
                                                        <input class="input" type="text" name="words2" id="words2" placeholder="Ingresa tus palabaras&hellip;">
                                                    </div>
                                                    <div class="control">
                                                        <a class="button button-primary button-block button-shadow" onclick="searchByterm($('#words2').val(),2)">Validar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5 col-sm-10">
                                                <div class="hero-form newsletter-form field field-grouped is-revealing pb-16">
                                                    <div class="control control-expanded">
                                                        <input type="file" name="carga2" id="fileCSV2" accept=".csv,.txt">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="btn btn-success" onclick='prepareUpload(2)'><i class="fas fa-upload"></i> Validar</div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-12 text-left" id="carga-content-result-ajax2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <table class="table table-sm">
                                                <thead>
                                                <tr class="table-info">
                                                    <th>Paso</th>
                                                    <th>a</th>
                                                    <th>b</th>
                                                    <th>c</th>
                                                    <th>Aceptación</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                foreach ($arrPasos2 as $intPaso=>$arrDestinos){
                                                    ?>
                                                    <tr class="<?= (isset($arrDestinos['FINAL']) && $arrDestinos['FINAL'] ==1)?'table-success':''?>">
                                                        <td><?= $intPaso ?></td>
                                                        <td><?= $arrDestinos['a'] ?></td>
                                                        <td><?= $arrDestinos['b'] ?></td>
                                                        <td><?= $arrDestinos['c'] ?></td>
                                                        <td><?= (isset($arrDestinos['FINAL']) && $arrDestinos['FINAL'] ==1)?'SI':'' ?></td>

                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-6">
                                            <img src="dist/images/automata2.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="features-wrap">
                                        <div class="feature is-revealing">
                                            <div class="feature-inner">
                                                <div class="feature-icon">
                                                    <img src="https://umg.edu.gt/assets/umg.png" style="max-width: 150px !important;" alt="umg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">

                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>Josué Edgardo Escobar Soto</td>
                                                    <td>3190-17-285</td>
                                                </tr>
                                                <tr>
                                                    <td>Mario Enrique Herrera Monterroso</td>
                                                    <td>3190-11-16815</td>
                                                </tr>
                                                <tr>
                                                    <td>Wiston Sergio Antonio Loy Sánchez</td>
                                                    <td>1590-17-9831</td>
                                                </tr>
                                                <tr>
                                                    <td>Edwin Abraham López Muñoz</td>
                                                    <td>3190-19-25151</td>
                                                </tr>
                                                <tr>
                                                    <td>Elison Armando Martínez Guzmán</td>
                                                    <td>3190-17-8530</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Grupo7Automatas</title>
                                <defs>
                                    <path d="M32 16H16v16H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v14z" id="logo-gradient-footer-a"></path>
                                    <lineargradient x1="50%" y1="50%" y2="100%" id="logo-gradient-footer-b">
                                        <stop stop-color="#FFF" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <mask id="logo-gradient-footer-c" fill="#fff">
                                        <use xlink:href="#logo-gradient-footer-a"></use>
                                    </mask>
                                    <use fill-opacity=".32" fill="#FFF" xlink:href="#logo-gradient-footer-a"></use>
                                    <path fill="url(#logo-gradient-footer-b)" mask="url(#logo-gradient-footer-c)" d="M-16-16h32v32h-32z"></path>
                                </g>
                            </svg>

                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFFFFF"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFFFFF"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; <?= date('Y') ?> grupo7Automatas, all rights reserved Universidad Mariano Gálvez de Guatemala</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
    <script src="dist/js/scripts.js"></script>
</body>
</html>
