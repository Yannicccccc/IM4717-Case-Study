function getPrice(num){
    var id_s = ["single0", "single1", "single2"];
    var id_d = ["NAN", "double1", "double2"];
    if (document.getElementById(id_s[num]).checked) return document.getElementById(id_s[num]).value;
    if (document.getElementById(id_d[num]).checked) return document.getElementById(id_d[num]).value;
}

function btnUpdate(num){
    var id_o = ["NAN","order1", "order2"];
    var id_t = ["NAN", "total1", "total2"];
    var temp = 0;
    temp = document.forms["menuForm"][id_o[num]].value * getPrice(num);
    document.getElementById(id_t[num]).value = temp;    
    updateTotal(); 
}

function updateTotal(){
    var tot = 0;
    tot = parseFloat(document.getElementById("total0").value) + 
        parseFloat(document.getElementById("total1").value) + 
        parseFloat(document.getElementById("total2").value);    
    document.getElementById("total").value = tot;
}

function updateSingle(num){
    var temp;   
    if (num==0){
        document.getElementById("total0").value = document.forms["menuForm"]["order0"].value * document.getElementById("single0").value;
    }
    else if (num==1){
        document.getElementById("total1").value = document.forms["menuForm"]["order1"].value * getPrice(num);
    }
    else {
        document.getElementById("total2").value = document.forms["menuForm"]["order2"].value * getPrice(num);
    }
    updateTotal();
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