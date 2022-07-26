console.log("JS loaded successfully");


function validateForm(e){
    var fullname = document.getElementById('fullname');

    var username=document.getElementById("username").value;

    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var address = document.getElementById("address").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;

    var name_pattern =/^[a-z A-Z]{2,30}/;
    var email_pattern =/^\w+@[a-z A-Z]+?\.[a-z A-Z]{2,3}$/;
    var phone_pattern=/^[0-9]{10}$/;
    var password_pattern=/^\w+$/;
    var age_pattern=/^\d{1,3}$/;

    var address_pattern =/^[a-zA-Z ]{7,}$/;
    console.log(userName);
    console.log(email);
    console.log(contact);
    console.log(age);
    console.log(password);
    console.log(confirmPassword);
    


    if(userName.search(name_pattern)<0){
        alert("Name pattern doesn't match");
        return false;
    }
    if(email.search(email_pattern)<0){
        alert("please enter the valid email address");
        return false;
    }


        }
