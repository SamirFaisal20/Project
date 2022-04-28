function order() 
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("POST", "deliveryman_order_list.php",true);
    xhttp.send();
}