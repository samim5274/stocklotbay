function matchPassword() {  
    let pw1 = document.getElementById("pass1").value;  
    let pw2 = document.getElementById("Cpass2").value;  
    if(pw1 == pw2)
    {
        alert('Password currect');
    }
    else
    {
        document.getElementById("message1").innerHTML="*Password didn't match.*";
    }
  }  