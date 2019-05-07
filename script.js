
function getPagamenti(){

  $.ajax({

    url: "getPagamenti.php",
    method: "GET",
    success: function(data){

      var pagamenti = JSON.parse(data);
      console.log(pagamenti);

      var container = $(".tabella .rows");
      var template = $("#row-template").html();
      var comp = Handlebars.compile(template);

      for (var i = 0; i < pagamenti.length; i++) {

        var hDati = {

          id: pagamenti[i].id,
          price: pagamenti[i].price,
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

function init(){

  getPagamenti();

}

$(document).ready(init);
