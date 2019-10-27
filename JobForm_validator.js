function validateName(){
    var name = document.forms["jobForm"]["myName"].value;
    var testName = /[A-Za-z]/;

    if (testName.test(name) == false){
        alert("The name you entered (" + name + 
            ") is not in the correct form. \n" +
            "The correct form is: " +
            "Last-name First-name\n" +
            "First letters are capitalized");
        return false;
    }
}

function validateEmail(){
    var email = document.forms["jobForm"]["myEmail"].value;
    var testEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.[A-Za-z]{2,3})+$/;

    if (testEmail.test(email) == false){
        alert("The email you entered (" + email + 
            ") is not in the correct form. \n");
        return false;
    }
}

function validateDate(){
    var input = document.forms["jobForm"]["myStart"].value;
    var start = new Date(input);
    var today = new Date();

    if (start.getTime() <= today.getTime()){
        alert("The date you entered (" + 
            start.getDate() + "/" + (start.getMonth()+1) + "/" + start.getFullYear() +
            ") should not be from today or past. \n");
        return false;
    }
}

function validateExperience(){
    var experience = document.forms["jobForm"]["myExperience"].value;

    if (experience == ""){
        alert("Experience can not be blank.");
        return false;
    }
}

function admin(){
    document.getElementById("adminForm").style.display = "block";
}

function closeForm(){
    document.getElementById("adminForm").style.display = "none";
}

function validateUser(){
    if (document.getElementById("acc").value=="f38ee" && document.getElementById("psw").value=="f38ee")
        window.location.href = "price.php";
}