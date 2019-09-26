<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href="css/mainCss.css" rel="stylesheet" type="text/css"/>
        <link href="css/w600max.css" rel="stylesheet" type="text/css"/>
        <link href="css/600_992.css" rel="stylesheet" type="text/css"/>
        <link href="css/w992min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <img src="images/headLogo.png" width="600" height="450" class="namelogo">
        </header>

        <main>
            <div class="details">
                <img src="images/liroymodel2.jpeg" class="liroymodel">
                <div class="top-right">
                    <p> אמא יקרה,
                        <br>
                        הילד/ה אוהבים להצטלם?
                        <br>
                        יש להם זיכרון טוב ואהבה לדבר?
                        <br></p>
                    <span class="midphototext" style="color:brown;"><br>
                        M.C.F-KIDZ,
                        <br>
                        מחפשים אחר הכוכב הבא!
                    </span>
                    <p>מחפשים אחר ילדים וילדות, 
                        <br>
                        להצטרף למשפחתנו הנרחבת,
                        <br>
                        לפרסומות, סרטים, סדרות, צילומים ועוד.

                    </p>
                </div>

                <div class="top-left">
                    <img src="images/liammodel.jpeg" id="sideimage1" class="liammodel" id="liam">
                    <br>

                </div>
                <div class="bottom-left">
                    <br>
                    <img src="images/liammodel3.jpeg" id="sideimage3" class="liammodel" id="liam">
                </div>
            </div> 



        </main>
        <footer>
            <div class="smallscreen">
                <span style="color:brown;font-size: 1.5em;text-align:center;">
                    להגשת מועמדות לאודישנים:
                    <br>
                </span>
                <form action="" name="myForm">
                    <label for="name">שם:</label>
                    <input type="text" id="name" placeholder="שם" name="name">
                    <label for="">אימייל:</label>
                    <input type="email" id="email" placeholder="אימייל" name="email">
                    <br>
                    <label for="">טלפוון:</label>
                    <input type="text" id="phone" placeholder="טלפון" name="phone"><br>

                    <br>
                    <button type="reset" onclick="thankyou()" id="submit">send</button>
                </form>
            </div>
            <br><br>
            <div class="mfckidz">
                M.F.C-KIDZ, איתכם בכל שלב
            </div>
        </footer>
        <script>
            function thankyou() {
                var name = document.forms["myForm"]["name"].value;
                var email = document.forms["myForm"]["email"].value;
                var phone = document.forms["myForm"]["phone"].value;
                if (name == "" || name.length < 2) {
                    alert("Name must be filled out");

                } else if (email == "" ||email.indexOf("@") == -1 || email.indexOf(".")== -1) {
                    alert("email must be filled out");

                } else if (phone == "" || phone.length < 5) {
                    alert("phone must be filled out");

                } else {
                    var url = "http://localhost/landingPage/thankyou.php?name=" +    name + "&email=" + email +"&phone=" + phone;
                  
                     window.location.href = url;
                }
               

            }

        </script>
    </body>
</html>
