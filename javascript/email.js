function Email() {
  var email = document.modulo.email.value;
  var oggetto = document.modulo.oggetto.value;
  var messaggio = document.modulo.messaggio.value;

  if ((email.indexOf("@") == (-1)) || (email == "") || (email == "undefined")) {
    alert("Inserire un indirizzo email valido.");
    document.modulo.email.focus();
  }
  else if ((oggetto == "") || (oggetto == "undefined")) {
    alert("Inserire un oggetto.");
    document.modulo.oggetto.focus();
  }
  else if ((messaggio == "") || (messaggio == "undefined")) {
    alert("Inserire un messaggio.");
    document.modulo.messaggio.focus();
  }
  else {
    location.href = "mailto:" + email + "?Subject=" + oggetto + "&Body=" + messaggio;
     //invio automatico email da testare
    /*if(mail('teamracinglf@gmail.com', oggetto, messaggio))
         {echo 'la mail è stata spedita con successo';}
else  
         {echo 'la mail non è stata inviata';}*/
  }
}
