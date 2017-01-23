    var counter = 1;

    var limit = 10;

    function addInput(divName){

         if (counter == limit)  {

              alert("Voce alcançou o limite de " + counter + " pedidos");

         }

         else {

              var newdiv = document.createElement('div');

              newdiv.innerHTML = "Pedido " + (counter + 1) + " <br><input type='text' name='myInputs[]'>";

              document.getElementById(divName).appendChild(newdiv);

              counter++;

         }

    }