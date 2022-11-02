<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<body class="font-sans antialiased bg-warning">
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

        <!--  Precisa de ajuda ?  -->
        <a href="#"
            class="made-with-mk">
            <div class="text">?</div>
            <div class="text">Precisa de ajuda? <strong>Ligue!</strong></div>
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

                                                <option name="fk_setor" value="">

                                                </option>

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
                                                                        <h6 class="mb-0 text-xs"></h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-xs font-weight-normal mb-0"></p>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-dot me-4">
                                                                    <i class="bg-info"></i>
                                                                    <span class="text-dark text-xs"></span>
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

</html>
