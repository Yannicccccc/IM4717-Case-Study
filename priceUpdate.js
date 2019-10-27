function openForm(num){
    if (num==1) document.getElementById("updateForm1").style.display = "block";
    if (num==2) document.getElementById("updateForm2").style.display = "block";
    if (num==3) document.getElementById("updateForm3").style.display = "block";
}

function closeForm(){
    document.getElementById("update0").checked = false;
    document.getElementById("update1").checked = false;
    document.getElementById("update2").checked = false;
    document.getElementById("updateForm1").style.display = "none";
    document.getElementById("updateForm2").style.display = "none";
    document.getElementById("updateForm3").style.display = "none";
}