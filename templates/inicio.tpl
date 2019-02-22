{include file="header.tpl"}
            <div class="col-10">
                <button class="btn btn-lg btn-block btn-light" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2" >Calcula tu pedido de lunch</button>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <div class="card bg-white mb-3">
                                    <div class="card-header">
                                        <h5>Mañana/Tarde</h5>
                                    </div>
                                    <table class="table table-dark table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Total Doc Lunc</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row" title="incluye niños arriba de 9 años">Adultos</td>
                                                <td>
                                                    <input type="text" class="form-control cantAdultos" placeholder="escriba la cantidad" title="incluye niños arriba de 9 años">
                                                </td>
                                                <td class="subTotalAdultos">
                                                    ?
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row" title="incluye niños hasta los 8 años">Niños</td>
                                                <td scope="row" >
                                                    <input type="text" class="form-control cantNiños" placeholder="escriba la cantidad" title="incluye niños hasta los 8 años">
                                                </td>
                                                <td scope="row" class="subTotalNiños">
                                                    ?
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row" colspan="2">TOTAL</td>
                                                <td scope="row" class = "total">?</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" colspan="3">
                                                    <button type="button" class="btn btn-success btn-lg btn-block btnCalcular">Calcular</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                <div class="card bg-white mb-3">
                                    <div class="card-header">
                                        <h5>Almuerzo/Cena</h5>
                                    </div>
                                    <table class="table table-light table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Total Doc Lunc</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row" title="incluye niños arriba de 9 años">Adultos</td>
                                                <td>
                                                    <input type="text" class="form-control cantAdultosAl" placeholder="escriba la cantidad" title="incluye niños arriba de 9 años">
                                                </td>
                                                <td class="subTotalAdultosAl">
                                                    ?
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row" title="incluye niños hasta los 8 años">Niños</td>
                                                <td scope="row" >
                                                    <input type="text" class="form-control cantNiñosAl" placeholder="escriba la cantidad" title="incluye niños hasta los 8 años">
                                                </td>
                                                <td scope="row" class="subTotalNiñosAl">
                                                    ?
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row" colspan="2">TOTAL</td>
                                                <td scope="row" class = "totalAl">?</td>
                                            </tr>
                                            <tr>
                                                <td scope="row" colspan="3">
                                                    <button type="button" class="btn btn-success btn-lg btn-block btnCalcularAl">Calcular</button>
                                                </td>
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
<div class="row justify-content-center m-0 mt-2">
    <div class="col col-md-10 col-lg-8 col-xl-6">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Tortas_Negras.png" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tortas Negras</h5>
                        <p> $75 LA DOCENA!! PASA POR SAN MARTIN 495!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Lemon_Pie.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lemon Pie</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Rosquitas.jpg" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Rosquitas</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}