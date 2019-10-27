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