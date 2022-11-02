<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">

    <title>Administrativo São José</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('assets/img/background.jpg')">
        <!--   Creative Tim Branding   -->
        <a href="http://creative-tim.com">
            <div class="logo-container">
                <div class="logo">
                    <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    Grupo São José
                </div>
            </div>
        </a>

        <!--  Made With Material Kit  -->
        <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard"
            class="made-with-mk">
            <div class="brand">MK</div>
            <div class="made-with">Made with <strong>Material Kit</strong></div>
        </a>

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form action="" method="">
                                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                <div class="wizard-header">
                                    <h3 class="wizard-title">
                                        Inventário
                                    </h3>
                                    <div class="col align-self-center">
                                        <label for="selecao_setor" class="form-label">Selecione o
                                            setor:</label>
                                        <select id="selecao_setor" class="form-select" id="fk_setor"
                                            name="fk_setor">
                                            @foreach ($lista as $setor)
                                                <option name="fk_setor" value="{{ $setor->id }}">
                                                    {{ $setor->nome_setor }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="wizard-navigation ">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">Lista</a></li>
                                        <li><a href="#account" data-toggle="tab">Inserir</a></li>
                                    </ul>
                                </div>




                                <div class="tab-content">
                                    @foreach ($inventarios as $inventario)
                                    <div class="tab-pane" id="about">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                ID:</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Setor:</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Criado em:</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                Açâo</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-xs">{{ $inventario->id }}</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-xs font-weight-normal mb-0">{{ $lista[$inventario->fk_setor]->nome_setor }}</p>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-dot me-4">
                                                                    <i class="bg-info"></i>
                                                                    <span class="text-dark text-xs">{{ $inventario->created_at }}</span>
                                                                </span>
                                                            </td>
                                                            <td class="align-middle">
                                                                <button class="btn btn-link text-secondary mb-0">
                                                                    <span class="material-icons">
                                                                        more_vert
                                                                    </span>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="tab-pane" id="account">
                                        <h4 class="info-text"> What are you doing? (checkboxes) </h4>
                                        <div class="row">
                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Design">
                                                        <div class="icon">
                                                            <i class="fa fa-pencil"></i>
                                                        </div>
                                                        <h6>Design</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Code">
                                                        <div class="icon">
                                                            <i class="fa fa-terminal"></i>
                                                        </div>
                                                        <h6>Code</h6>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Develop">
                                                        <div class="icon">
                                                            <i class="fa fa-laptop"></i>
                                                        </div>
                                                        <h6>Develop</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd'
                                            name='next' value='Next' />
                                        <input type='button' class='btn btn-finish btn-fill btn-success btn-wd'
                                            name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-default btn-wd'
                                            name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container text-center">
                Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>.
                Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
            </div>
        </div>
    </div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>

</html>
