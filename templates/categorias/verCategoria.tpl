{include file="header.tpl"}
    <div class="row m-0">


    
        {foreach from=$productosCateg item=producto}  
            <div class="col-lg-4 p-1 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->nombre}</h5>
                        ​<picture>
                            <img src="{$producto->imagen}" class="img-fluid img-thumbnail">
                        </picture>
                        <h3 class="card-title">{$producto->precio}</h3>
                        <p class="card-text">{$producto->descripcion}</p>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
    
    <div class="col-12 mt-2">
        <a href="categorias" class="col btn btn-primary">Volver atras</a>
    </div>
{include file="footer.tpl"}