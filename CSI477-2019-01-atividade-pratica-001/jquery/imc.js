$(document).ready(function(){
    var cont=0;

    imc = function(){

       if(cont==0){
        var h = parseFloat($("#altura").val());
        var y = parseFloat($("#peso").val());
        var pesoIdeal = "";
        var sugestao = "  -  ";

        var result = y/(h*2);
        if(result < 18.5){
            pesoIdeal = "Subnutrição";
        }if(result>18.5 && result<24.9){

            result = "Peso Saudável";
        }
        if(result>25 && result<29.9){
            sugestao = 24.9 *h;
            pesoIdeal="Sobrepes";
        }if(result>30 && result<34.9){
            sugestao = 24.9 *h;
            pesoIdeal="Obesidade grau 1";
        }if(result>35 && result<39.9){
            sugestao = 24.9 *h;
            pesoIdeal="Obesidade grau 2";
        }
        else{
            sugestao = 24.9 *h;
            pesoIdeal="Obesidade grau 3";
        }



        var newBody = $("<tbody>");
        var linha = "";
        linha += "<tr>";
        linha += '<th scope ="row">Peso:</th>';
        linha += '<td>'+$("#peso").val()+'</td>';
        linha += '</tr>';

        linha += "<tr>";
        linha += '<th scope ="row">Altura:</th>';
        linha += '<td>'+ $("#altura").val() +'</td>';
        linha += '</tr>';

        linha += "<tr>";
        linha += '<th scope ="row">IMC</th>';
        linha += '<td>'+result+'</td>';
        linha += '</tr>';

        linha += "<tr>";
        linha += '<th scope ="row">Classificação:</th>';
        linha += '<td>'+pesoIdeal+'</td>';
        linha += '</tr>';

        linha += "<tr>";
        linha += "<th scope = 'row'>Sugestão de peso: </th>";
        linha += "<td>"+sugestao+"</td>";
        linha += "</th>";
        linha += "</tr";

        newBody.append(linha);
        $("#imctable").append(newBody);

        cont++;
       }
    }
        
});