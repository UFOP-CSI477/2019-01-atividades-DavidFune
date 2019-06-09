$(document).ready(function(){
    var cont=0;
    escala = function(){

        if($("#amp").val()!=0 && $("#tempo").val()!=0){
            if(cont==0){
             var amp = parseFloat($("#amp").val());
             var tempo = parseFloat($("#tempo").val());
             var result = Math.log10(amp) + (3*Math.log10(8*tempo)) - 2.92
             var efeitos = "";
             if(result < 3.5){
                efeitos = "Geralmente não sentido, mas gravado.";
            }if(result>3.5 && result<5.4){
    
                efeitos = "As vezes sentido, mas raramente causa dano.";
            }
            if(result>5.5 && result<6.0){
                
                efeitos="Nó máximo pequenos danos a prédios bem contruídos.";
            }if(result>6.1 && result<6.9){
                
                efeitos="Pode ser destrutivo em areas até 10km do epicentro";
            }if(result>7.0 && result<7.9){
                
                efeitos="Grande terremoto.Pode causar serios danos em grandes áreas. ";
            }
            else{
                
                pesoIdeal="Enorme terremoto. Pode causar grandes danos em áreas que estejam a centenas de KM.";
            }
            }
        }else{
            alert("Campus vazios, prenchas os campos...");
        }
        $("#result").text(efeitos);
        console.log(efeitos);
        cont++;
    }
});