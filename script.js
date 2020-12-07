
document.addEventListener("DOMContentLoaded", function () {
    
    var btn = document.getElementById('submit');
    
    var password_regex = /^[0-9a-zA-Z]{8,}$/
    var e_regex = /.{1,}@[^.]{1,}/;
    var count = 0;

    btn.addEventListener('submit', function (e){
        e.preventDefault();

        var firstN = document.getElementById('firstname')
        var lastN = document.getElementById('lastname')
        var password = document.getElementById('password')
        var email = document.getElementById('emailAddress')
        httpR = new XMLHttpRequest();

        //first name validation

        if(firstN.value === "" || firstN.value === null){
            firstN.classList.add("error");
            mssg.innerHTML= "First name field is empty.";
        } else if (firstN.value !== "" || firstN.value !== null){
            if (firstN.value.match(e_regex)){
                firstN.classList.add("no-error");
                count++;
            }else{
                firstN.classList.add("error");
                mssg.innersHTML= "First name is invalid";
            }
        }

        //last name validation

        if(lastN.value === "" || lastN.value === null){
            lastN.classList.add("error");
            mssg.innerHTML= "Last name field is empty.";
        } else if (lastN.value !== "" || lastN.value !== null){
            if (lastN.value.match(e_regex)){
                lastN.classList.add("no-error");
                count++;
            }else{
                lastN.classList.add("error");
                mssg.innerHTML= "Last Name is invalid";
            }
        }

        //email validatiion
        if(email.value === "" || email.value === null){
            email.classList.add("error");
            mssg.innerHTML= "Email field is empty.";
        } else if (email.value !== "" || email.value !== null){
            if (email.value.match(e_regex)){
                email.classList.add("no-error");
                count++;
            }else{
                email.classList.add("error");
                mssg.innerHTML= "Email is invalid.";
            }
        }

        //password validation
        if(password.value === "" || password.value === null){
            password.classList.add("error");
            mssg.innerHTML= "Password field is empty.";
        } else if (password.value !== "" || password.value !== null){
            if (password.value.match(password_regex)){
                password.classList.add("no-error");
                count++;
            }else{
                password.classList.add("error");
                mssg.innerHTML= "Password is invalid.";
            }
        }

        if (count == 2){
            httpR.onreadystatechange = function(){
                if (httpR.readyState === XMLHttpRequest.DONE && httpR.status === 200){
                    var r = httpR.responseText;
                     console.log(r);
                    if(r.trim() != "Error"){
                        url = "./html/dashhtml.php?" + "id=" + r;
                        window.location.assign(url);
                    }
                }
                if (httpR.readyState === XMLHttpRequest.DONE && httpR.status === 404){
                    alert('ERROR - File not found.');
                }
            }
            let data = 'password='+password.value+'&email='+email.value;
            httpR.open('POST', './php/login.php', true);
            httpR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpR.send(data);
        }
    });
});