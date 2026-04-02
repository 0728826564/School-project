const form = document.getElementById("formm");
form.addEventListener("submit",function(e){
    e.preventDefault();
    
    const name= document.getElementById("username").value.trim();
    const email= document.getElementById("email").value.trim();
    const age= document.getElementById("age").value.trim();
    const password= document.getElementById("password").value.trim();
    const terms= document.getElementById("terms").checked;
    const error= document.getElementById("error");

    error.textContent='';
    const emailPattern=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if(name===''){
        error.textContent='Name can not be empty';
        return;
    };
    if(email=== ''){
        error.textContent='Email can not be empty';
        return;
    }else if(!emailPattern.test(email)){
        error.textContent='Enter a valid email please';
        return;
    };
    if(age=== ''){
        error.textContent='Age can not be empty';
        return;
    }else if(isNaN(age)){
        error.textContent='Age must be a number';
        return;
    };
    if(password=== ''){
        error.textContent='Password can not be empty';
        return;
    }else if(password.length<6){
        error.textContent='password must be greater than 6 characters';
        return;
    };
    if(!terms){
        error.textContent='You must accept terms';
        return;
    };
    HTMLFormElement.prototype.submit.call(this);
});