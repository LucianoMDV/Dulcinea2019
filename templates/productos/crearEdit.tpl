{include file="../header.tpl"}
    <div class="col">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                ​<picture>
                    <img src="{$producto->imagen}" class="img-fluid img-thumbnail">
                </picture>
                <div class="card text-white bg-dark mb-3 mt-1">
                    <div class="card-header">Ingrese los nuevos datos del producto</div>
                    <form class="bg-danger p-3 w-100" method="POST" action="editarProducto/{$id_producto}" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Nombre:</label>
                            <div class="col-10">
                                <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_nombre" value="{$producto->nombre}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Precio:</label>
                            <div class="col-10">
                                <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_precio" value="{$producto->precio}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2 col-form-label">Descripcion:</label>
                            <div class="col-10">
                                <input class="input ListaCatalogo form-control" type="text" name="lista_tabla_descripcion" value="{$producto->descripcion}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-md-2 col-form-label" for="adjunto">Adjuntar imagen</label>
                            <div class="col-9 col-md-10">
                                <input type="file" name="adjunto" class="form-control-file" id="adjunto" accept="image/jpeg">
                                {if !empty($error) }
                                    <div class="alert alert-danger mt-2" role="alert">{$error}</div>
                                {/if}
                            </div>
                        </div>
                        <div>
                            <select class="form-control" name="buscar">
                                {foreach from=$categorias item=categoria}
                                    <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-success" id="enviarCatalogo" type="submit">Actualizar producto</button>   
                        </div>
                    </form>
                </div>
                <a href="producto" class="col btn btn-primary">Volver atras</a>
            </div>
        </div>
    </div>
{include file="../footer.tpl"}