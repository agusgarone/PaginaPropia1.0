/*$(document).ready(function() {
   alert("jQuery esta funcionando !!");
 });*/
$("#linkedin").click(function(){
    var url = "https://www.linkedin.com/in/agust%C3%ADn-garone-1483ba1a2/";
    $(location).attr('href',url);
})
$("#instagram").click(function(){
    var url = "https://www.instagram.com/agustin_garone/";
    $(location).attr('href',url);
})
$("#facebook").click(function(){
    var url = "https://www.facebook.com/agustin.garone.1";
    $(location).attr('href',url);
})
$("#twitter").click(function(){
    var url = "https://twitter.com/aguuusgarooo";
    $(location).attr('href',url);
})
$("#whatsapp").click(function(){
    var url = "https://api.whatsapp.com/send?phone=541121551196&text=hola%20buenas!";
    $(location).attr('href',url);
})
function isEmail(email){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$(".Form").submit(function(e){
    var campovacio = "";
    var msjerror = "";
    
    if ($("#email").val() == "") {
        campovacio = campovacio + "email <br>";
    }

    if ($("#Asunto").val() == "") {
        campovacio = campovacio + "Asunto <br>";
    }

    if ($("#Mensaje").val() == "") {
        campovacio = campovacio + "Mensaje <br>";
    }
    if (campovacio!= "") {
        msjerror = "<p>Los campos vacios son los siguientes: </p>" + campovacio + msjerror;
    }
    if(isEmail($("#email").val()) == false){
        msjerror = msjerror + "<p> Tu direccion de mail no es valida </p>";
    }
    if (msjerror != "") {
        $("#jaja").html(msjerror);
        $("#jaja").css("color", "red");
        return false;
    }else{
        $("#jaja").html("Se ha mandado el mensaje con exito!");
        $("#jaja").css("color", "blue");
        return true;
    }
    
});
var burger = document.querySelector('.burger');
var nov = document.querySelector('.navlinks');

/*function deslizamiento() {
    burger.addEventListener("click", () => {
        //alert("hola");
        nov.classList.toggle("activo");
    });
}*/
var text = document.querySelector(".presentacion");
$(burger).click(function(){
    nov.classList.toggle("activo");
});

deslizamiento();
