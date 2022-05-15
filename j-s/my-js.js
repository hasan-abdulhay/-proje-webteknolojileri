function Form1 (){
var xad = document.forms ["myForm"] ["ad"].value;
if ( xad ==""){
alert ("Adınızı Giriniz");
return false;
}
var xsoyad = document.forms ["myForm"] ["soyad"].value;
if (xsoyad==null || xsoyad ==""){
alert ("Soy Adınızı Giriniz");
return false;
}
var xemail= document.forms ["myForm"] ["email"].value;
if (xemail==null || xemail ==""){
    alert ("email Giriniz");
    return false;  
}
var xpassword= document.forms ["myForm"] ["password"].value;
if (xpassword.length<6){
    alert ("6'dan buyuk password Giriniz");
    return false;  
}
var xrdio=document.forms['myForm']['rdio'].value;
if(xrdio==""){
    alert("kullanıcı durumunu seçiniz");
    return false;
}
var xselect=document.forms['myForm']['select'].value;
if(xselect =="0"){
    alert("kullanılan programlama dillerinin birini seçiniz");
    return false;  
}
}

