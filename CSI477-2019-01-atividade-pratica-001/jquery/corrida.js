$(document).ready(function () {


    var smile = new Array();
    var cont =0;


    ordernar = function(a, b){

        return (a.tempo - b.tempo);
    };

    FillTable = function(){

        if(cont==0){
            smile.sort(ordernar);
            console.log(smile);
            var tempo1 = smile[0].tempo;
            var pos = 1;
            smile.forEach(function(smin){
    
                var newRow = $("<tr>");
                var cols = "";
                var r = "   -   ";
                if(smin.tempo == tempo1){
                    cols += "<td>"+ " 1 " + "</td>";
                    r = "Vencedor(a)!!!"
                }else{cols += "<td>"+  pos  + "</td>";}
    
                cols += "<td>"+smin.largada + "</td>";
                cols += "<td>"+ smin.nome +"</td>";
                cols += "<td>"+ smin.tempo +"</td>";
    
                cols += "<td>"+ r +"</td>";
                r="   -   ";
    
                newRow.append(cols);
                $("#resulCorredores").append(newRow);
                pos++;
    
            });
            $("#resultado").show(400);
            cont++;
        }
    };

    AddTableRow = function () {

        if($("#largada").val()!=0 && $("#nome").val()!=null 
        &&$("#tempo").val()!=0){

            var corredor = {largada:$("#largada").val(),nome:$("#nome").val(),
            tempo:$("#tempo").val()};

            smile.push(corredor);

            var newRow = $("<tr>");
            var cols = "";
            var pos = $("#largada").val();
            cols += "<td>"+ $("#largada").val()+ "</td>";
            cols += "<td>"+ $("#nome").val()   + "</td>";
            cols += "<td>"+ $("#tempo").val()  +"</td>";
            cols += "<td>";
            cols += '<button class="btn btn-danger" onclick="remove(this,'+$("#largada").val()+')" type="button">Remover</button>';
            cols += "</td>";
            
            newRow.append(cols);
            $("#corredores").append(newRow);
    
                $("#largada").val(0);
                $("#nome").val(null); 
                $("#tempo").val(0);

        }else{
            alert("Formulário vazio, preencha os valores...");
        }

    };
    // passar o valor da posição como parametros
    remove = function (item,pos){
        var tr = $(item).closest('tr');
        tr.fadeOut(400, function (){
             tr.remove();
            
             for(var i=0;i<smile.length;i++){
                 if(smile[i].largada == pos){
                     smile.splice(parseInt(i),1);
                    }
             }
            });
    }
});