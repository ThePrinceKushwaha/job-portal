console.log("JS loaded successfully");


 // var username = document.getElementById("username").value;
// console.log(username);
function validate(e){

    var fullname = document.getElementById("fullname").value;
    var username = document.getElementById("username").value;
// alert(username);
    var email = document.getElementById("email").value;
    // alert(email);
    var password = document.getElementById("password").value;
    // alert(password);
    var cpassword = document.getElementById("cpassword").value;
    // alert(cpassword);
    var mobile = document.getElementById("mobile").value;
    // alert(mobile);


    var usernameCheck = /^[A-Za-z]{5,15}$/;
    var emailCheck =/^[A-Za-z]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{3}$/;

    if(usernameCheck.test(fullname)){
        document.getElementById("usererror").innerHTML="";
    }else{
        document.getElementById("usererror").innerHTML="* username must invalid. Must be between 5 to 15";
        // alert("invalid username");
        return false;
    }
    if(usernameCheck.test(username)){
        document.getElementById("usererror").innerHTML="";
    }else{
        document.getElementById("usererror").innerHTML="* username must invalid. Must be between 5 to 15";
        // alert("invalid username");
        return false;
    }


    if(emailCheck.test(email)){
        document.getElementById("emailerror").innerHTML="";
    }else{
        document.getElementById("emailerror").innerHTML="* username must invalid. Must be between 5 to 15";
        // alert("invalid username");
        return false;
    }



    console.log(username);
    console.log(email);
    console.log(password);
    console.log(cpassword);
    console.log(mobile);


    
}


//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function scrollToTop() {
    var totop= document.getElementById('totop');

    
}