function comprueba_dominio(nombre_dominio)
{
var arr = new Array(
'@nu3.com.mx');
var comprobacion = nombre_dominio;
var val = true;
var punto = comprobacion.lastIndexOf("@nu3.com.mx");
var nombre_dominio = comprobacion.substring(0,punto);
var extension = comprobacion.substring(punto,comprobacion.length);
    if(punto>2 && punto<57)
{
    for(var i=0; i<arr.length; i++)
    {
      if(extension == arr[i])
      {
        val = true;
        break;
      }
      else
      {
        val = false;
      }
    }
    if(val == false)
    {
         alert("¡El correo "+extension+" que ingresaste, no es correcto!");
         return false;
    }
    else
    {
        for(var j=0; j<nombre_dominio.length; j++)
        {
          var dh = nombre_dominio.charAt(j);
          var hh = dh.charCodeAt(0);
          if((hh > 47 && hh<59) || (hh > 64 && hh<91) || (hh > 96 && hh<123) || hh==45 || hh==46)
          {
             if((j==0 || j==nombre_dominio.length-1) && hh == 45)  
             {
                 alert("¡Tu correo no puede contener el simbolo guión (-)!");
                  return false;
             }
          }
        }
    }
}
else
{
 alert("¡Has ingresado un correo no valido para el sistema!");
 return false;
}  
return true;
}