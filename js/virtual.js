
function generardatos(tipo, callback) {
    var llavecifrado="";
    var datos=$.getJSON("rest/get/virtual",function(data) {
        var wordArray = CryptoJS.enc.Utf8.parse(data.VIRTUAL);
        generarclavecifrada = CryptoJS.enc.Base64.stringify(wordArray);
        generarclavecifrada = generarclavecifrada.toString();
        llavecifrado=generarclavecifrada;
        document.cookie="CookieC="+generarclavecifrada + "; path=/";
        callback(llavecifrado);
    });
}

function generarcrypt(usuario, llavecifrado)
{
    var words = CryptoJS.enc.Base64.parse(llavecifrado);
    var textString = CryptoJS.enc.Utf8.stringify(words);
    var userencrypt = CryptoJS.AES.encrypt(usuario , textString);
    userencrypt = userencrypt.toString();
    return userencrypt;
}

function obtenerCookie(nombre) 
{
    var valor="";
    var lista = document.cookie.split(";");
    for (i in lista) {
        var busca = lista[i].search(nombre);
        if (busca > -1) {micookie=lista[i]}
        }
    var igual = micookie.indexOf("=");
    valor = micookie.substring(igual+1);
    return valor;
}