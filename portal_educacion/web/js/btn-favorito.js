$(document).ready(function(){

  //agregamos el boton a favoritos
  $('.boton_favorito_agregar').click(function(){
    if($(".boton_favorito_agregar").not(':checked')) {  

        var boton_id = $(this).data('id');
        //var user_id = $('.user_id').val();
        var form = $('#form_agregar_favoritos').attr('action');

        $.ajax({
          type: 'GET',
          url: form,
          data: { boton_id: boton_id },
          success: function(btn){
            //var obj = JSON.parse(btn);
            //alert(data);
            console.log(btn);
            /*
            $(obj).each(function(i, item){
              $('#btn_agregado').after(`
                  <div class="row">
                    <div class="col-xs-12">
                      <h2>Mis Favoritos</h2>
                    </div>
                  </div>

                  <div class="clearfix">
                    <div class="margintop20">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="panel panel-default" style="position: relative">

                          <form action="botones/favoritos" method="GET" id="form_agregar_favoritos">
                            <input type="checkbox" class="boton_favorito boton_favorito_quitar" checked data-id="${item.id}" id="boton_favorito_${item.id}">
                            <label for="boton_favorito_${item.id}" title="Quitar de Favoritos"  class="estrella_favoritos">★</label>
                          </form>

                          <a class="shortcut" href="${item.btn_link}" title="${item.btn_nombre}">
                            <div class="panel-body">
                              <span style="background-color: ${item.btn_bg}">
                              <span class="${item.btn_imagen}"></span>
                              </span>
                              <h3>${item.btn_nombre}</h3>
                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>
              `);
            });
            */

          }
        });
    }
  });

  //quitamos el boton de favoritos
  $('.boton_favorito_quitar').click(function(){
    if($(".boton_favorito_quitar").not(':checked')) {

        var boton_id = $(this).data('id');
        //var user_id = $('.user_id').val();
        var form = $('#form_agregar_favoritos').attr('action');

        $.ajax({
          type: 'GET',
          url: form + '?remover=true',
          data: { boton_id: boton_id },
          success: function(data){
            //alert(data);
            //console.log(data);
          }
        });

    }
  })
        
});