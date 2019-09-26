

//var phoneBegin = ["03","02","04","08","09","050","051","052","053","054","055","056","058","059","072","073"];
//
// var options = "";
//for(var i =0;i<phoneBegin.length;i++){
//      options += "<" + "option>" + phoneBegin[i] + "</option>";
//      console.log(options);
//      
//}
//document.getElementById("select").innerHTML = options;



function check() {

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var validNum = phone.match(/^0[2-9]\d{7,8}$/);
    if (name == "" || name.length < 2) {
        alert("Name must be filled out");

    } else if (email == "" || email.indexOf("@") == -1 || email.indexOf(".") == -1) {
        alert("email must be filled out");

    } else if (!validNum) {
        alert("phone number must be valid");
        

    } else {
        var url = "http://localhost/landingPage/thanks.html";

        window.location.href = url;
    }


}


