function matchPassword() {  
    let pw1 = document.getElementById("pass1").value;  
    let pw2 = document.getElementById("Cpass2").value; 

    let msg = document.getElementById('message1');
    let msg2 = document.getElementById('message2'); 

    // console.log(pw1, pw2);

    if(pw1.length != 0 || pw2.length != 0){
        if(pw1==pw2){
            msg.textContent = "password match";
        }
        else
        {
            msg2.textContent = "password not match";
        }
    }
    else
    {
        alert("Password can't be empty!");
    }
}  
