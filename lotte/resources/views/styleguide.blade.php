@extends('layouts.master')

@section('css')
@endsection

@section('content')
    <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Style Guide</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- Fonts -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Font Family</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span>For Heading</span>
                    <h2 class="mt20">Roboto Condensed</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <span>For Base</span>
                    <h2 class="mt20">Roboto Condensed</h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Typography</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1>H1 - Heading Title - 30px</h1>
                    <h2>H2 - Heading Title - 24px</h2>
                    <h3>H3 - Heading Title - 20px</h3>
                    <h4>H4 - Heading Title - 16px</h4>
                    <h5>H5 - Heading Title - 14px</h5>
                    <h6>H6 - Heading Title - 12px</h6>
                </div>
            </div>
            <!-- /.Fonts -->
            <hr>
            <!-- color -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <h2 class="mb30">Color Palette</h2>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
                    <div class="circle-default-color"></div>
                    <div class="box-info">
                        <h4 class="box-title">Default</h4>
                        <p>#0cafe5</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
                    <div class="circle-primary-color"></div>
                    <div class="box-info">
                        <h4 class="box-title">Primary</h4>
                        <p>#fb730f</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
                    <div class="circle-heading-color"></div>
                    <div class="box-info">
                        <h4 class="box-title">Heading</h4>
                        <p>#1c1e1e</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 text-center">
                    <div class="circle-paragraph-color"></div>
                    <div class="box-info">
                        <h4 class="box-title">Paragraph</h4>
                        <p>#848687</p>
                    </div>
                </div>
            </div>
            <!-- /.color-plate -->
            <hr>
            <!-- typography -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb30">
                    <h2 class="mb30">Text</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lacus imperdiet, cursus erat
                        vitae, dictum is et euismod sedroin vel rhoncus muisque mattis dictum etiarem ipsum dolor sit
                        amet, consectetur adipiscing elit. Fusce eu lacus impsus erat vitae, dictum nusmod sed nunc.
                        Proin vel rhoncus maurisuisque mattism ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        eu lacus imperdiet, cursus erat vitadictum nulla. Mauris et euismod sed nunc. </p>
                    <p class="lead">Consectetur adipiscing elit. Fusce eu lacus imperdiet, cursus erat vitae, dictum is
                        et euismod sedroin vel rhoncus muisque mattis dictum etiarem ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce eu lacus impsus erat vitae dictum nusmod sed nuncroin vel rhoncus
                        maurisuisque mattism ipsum dolor sit amet consectetur adipiscing elit.</p>
                    <h2>Heading Title Here</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lacus imperdiet, cursus erat
                        vitae, dictum is et euismod sedroin vel rhoncus muisque mattis dictum etiarem ipsum dolor sit
                        amet, consectetur adipiscing elit. Fusce eu lacus impsus erat vitae, dictum nusmod sed nunc.
                        Proin vel rhoncus maurisuisque mattism ipsum dolor sit amet, consectetur adipiscing elit. Fusce
                        eu lacus imperdiet, cursus erat vitadictum nulla. Mauris et euismod sed nunc. </p>
                    <h2>Heading Title Here</h2>
                    <p>Etiarem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lacus impsus erat vitae,
                        dictum nusmod sed nunc. Proin vel rhoncus maurisuisque mattism ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce eu lacus imperdiet, cursus erat vitadictum nulla. Mauris et euismod sed
                        nunce. </p>
                    <h3>Heading Title Here</h3>
                    <p>Etiarem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lacus impsus erat vitae,
                        dictum nusmod sed nunc. Proin vel rhoncus maurisuisque mattism ipsum dolor sit amet, consectetur
                        adipiscing elit. Fusce eu lacus imperdiet, cursus erat vitadictum nulla. Mauris et euismod sed
                        nunce. </p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb10">
                    <h2>Box</h2>
                    <div class="box">
                        <div class="box-head">
                            <h3 class="head-title">Heading Title For Box</h3>
                        </div>
                        <div class="box-body">
                            <p>Etiarem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu lacus impsus erat
                                vitae, dictum nusmod sed nunc. Proin vel rhoncus maurisuisque mattism ipsum dolor sit
                                amet, consectetur adipiscing elit. Fusce eu lacus imperdiet cursus erat vitadictum
                                nullaadipiscing elit. Fusce eu lacus impsus erat vitae, dictum nusmod sed nunc. Proin
                                vel rhoncus . </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- /.typography -->
            <!-- list -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">List</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h3>Unordered</h3>
                    <div>
                        <ul class="arrow">
                            <li>Dolor pulvinar etiam.</li>
                            <li>Sagittis lorem eleifend.</li>
                            <li>Felis feugiat dolore viverra.</li>
                            <li>Dolor pulvinar etiam.. </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h3> Ordered </h3>
                    <div class="ordered">
                        <ol>
                            <li>Dolor pulvinar etiam.</li>
                            <li>Sagittis lorem eleifend.</li>
                            <li>Felis feugiat dolore viverra.</li>
                            <li>Dolor pulvinar etiam.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <h3>Altenate</h3>
                    <div class="altenate">
                        <ul>
                            <li>Dolor pulvinar etiam.</li>
                            <li>Sagittis lorem eleifend.</li>
                            <li>Felis feugiat dolore viverra.</li>
                            <li>Dolor pulvinar etiam.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <!-- /.list -->
            <!-- blockquote -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Blockquote</h2>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <blockquote>
                        <div class="blockquote-content">
                            <p class="blockquote-text">“Vestibulum pharetra felis se non ornare ante ornare seuris
                                pretium ullamcorper diam quis ulum pharetra felis sem, non ornare ante ornare sedauris
                                pretium ullamcorper diam quis egestecenas sit amet nislut tellus pharetra vestibulu”
                            </p>
                        </div>
                    </blockquote>
                </div>
            </div>
            <hr>
            <!-- /.blockquote -->
            <!-- buttons -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Buttons</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <a href="#" class="btn btn-default btn-xs mb20">Extra Small Button</a>
                    <br> <a href="#" class="btn btn-default btn-sm mb20">Small Button </a> <a href="#"
                        class="btn btn-default mb20">Default Button </a>
                    <a href="#" class="btn btn-default btn-lg mb20">Large Button </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12"> <a href="#" class="btn btn-primary btn-xs mb20">Extra
                        Small Button</a>
                    <br> <a href="#" class="btn btn-primary btn-sm mb20">Small Button </a> <a href="#"
                        class="btn btn-primary mb20">Default Button </a> <a href="#"
                        class="btn btn-primary btn-lg mb20">Large Button </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h2>Link</h2>
                    <a href="#" class="btn-link mb20">link</a>
                </div>
            </div>
            <hr>
            <!-- /.buttons -->
            <!-- form -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Form Elements</h2>
                </div>
                <form>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only">Input type</label>
                            <input type="text" class="form-control" placeholder="input Type">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only">Input type</label>
                            <input type="text" class="form-control focus" placeholder="input Type">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group has-success">
                            <label class="control-label sr-only">Input type</label>
                            <input type="text" class="form-control " placeholder="input Type">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group has-error">
                            <label class="control-label sr-only">Input type</label>
                            <input type="text" class="form-control" placeholder="input Type">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only required" for="select">input type selection</label>
                            <select id="select" name="select" class="form-control">
                                <option value="">select</option>
                                <option value="">select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label sr-only" for="textarea">textarea</label>
                            <textarea class="form-control" id="textarea" name="textarea" rows="6"
                                placeholder="textarea"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" value="">
                            <span> Radio button </span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" value="option1" checked>
                            <span>Selected Radio button</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <span>Check Box</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="" checked="">
                            <span>Selected Check box</span>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- /.form -->
            <!-- table -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="mb30">Tables</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="mb20">Default Table</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <caption>
                                Optional table caption.
                            </caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.table -->
            <!-- table-striped -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h3 class="mb20">Striped Rows</h3>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <caption>
                                Optional table caption.
                            </caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. table-striped -->
    @endsection


    @section('js')
    @endsection