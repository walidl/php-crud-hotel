
function getPagamenti(status){

  $.ajax({

    url: "getPagamenti.php",
    method: "GET",
    data: { status: status},
    success: function(data){

      var pagamenti = JSON.parse(data);
      console.log(pagamenti);

      var container = $(".tabella .rows");
      container.empty();

      var template = $("#row-template").html();
      var comp = Handlebars.compile(template);

      for (var i = 0; i < pagamenti.length; i++) {

        var hDati = {

          id: pagamenti[i].id,
          price: pagamenti[i].price,
          name: pagamenti[i].name,
          lastname: pagamenti[i].lastname,

        }

        var row = comp(hDati);
        container.append(row);
      }

    },
    error: function(){

      console.log("errore recupero dati");
    }
  })
}

function getSelection(){

  var me = $(this);
  var option = me.val();
  console.log(option);

  getPagamenti(option);



}

function init(){

  getPagamenti("pending");

  var select = $(".options select");

  select.change(getSelection);


}

$(document).ready(init);
