
function addcli(){
  var reg =/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var clientname=$("#clientname").val();
    var clientemail=$("#clientemail").val();
      var clientpass=$("#clientpass").val();

//checking form fields on form submission

if(clientname.trim()==""){
$("#statusMsg1").html('<small style="color:red;">please Enter Name!</small>');
$("#clientname").focus();
return false;

}
 else if(clientemail.trim()==""){
$("#statusMsg2").html('<small style="color:red;">please Enter Email!</small>');
$("#clientemail").focus();
return false;

}else if (clientemail.trim() != "" && !reg.test(clientemail)) {
  $("#statusMsg2").html
  ('<small style="color:red;">please Enter Valid Email e.g example@mail.com</small>');
  $("#clientemail").focus();
  return false;
}else if(clientpass.trim()==""){
$("#statusMsg3").html('<small style="color:red;">please Enter password!</small>');
$("#clientpass").focus();
return false;

}else if(clientpass.trim()==""){
$("#statusMsg4").html('<small style="color:red;">please Re-Enter password!</small>');
$("#clientpass").focus();
return false;

}
else {
  $.ajax({
  url:'client/addclient.php',
  method:'POST',
  data:{
    clientname: clientname,
    clientemail: clientemail,
    clientpass: clientpass,
  },
  dataType:"json",
  Success:function(data){
    console.log(data);
  },
  error:function(error){
    console.log("Error");
    console.log(error);
  }
  });

}

}


// Empty All fields
function clearclientRegfielde(){
  $("#cliRegForm").trigger("reset");
  $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
      $("#statusMsg3").html(" ");
        $("#statusMsg4").html(" ");
      }
