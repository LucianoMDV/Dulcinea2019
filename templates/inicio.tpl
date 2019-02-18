{include file="header.tpl"}
            <div class="col-10">
                <div class="row justify-content-center m-1">
                    <div class="col-10 text-center bg-white">
                        <h1 class="text-danger">Calcula tu pedido de lunch</h1>
                    </div>
                </div>
                <p>
                    <button class="btn btn-lg btn-block btn-dark" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Mañana/Tarde</button>
                    <button class="btn btn-lg btn-block btn-light" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Almuerzo/Cena</button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                            
                                <div class="card bg-white mb-3" style="max-width: 100rem;">
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
                {* </div> *}
                {* <div class="row"> *}
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                            
                                <div class="card bg-white mb-3" style="max-width: 100rem;">
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
{include file="footer.tpl"}