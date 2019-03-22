function validateContactForm() {
  var requiredFields = ['gender', 'lastName', 'firstName', 'email', 'phone', 'msg'];
  var values = [];
  for (var field in requiredFields) {
    var value = document.getElementById(field).value;
    console.log(value);
    if (value=="") {
      alert('le champ ' + field + " est obligatoire !");
      return;
    }
    values[field] = value;
  }

  /*$.ajax({
    type: "POST",
    url: 'contactus.sendmail',
    data: values,
    success: function( msg ) {
        console.log(msg);
    }
  });*/

}
