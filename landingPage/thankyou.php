<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
           
            <div class="thankyou">
                
                <p style="direction: rtl;"><span id="name" style=color:blueviolet;"></span></p>
                <p style="direction: rtl;">פרטייך נשמרו בהצלחה,<br>
                    נציג  יחזור אלייך בימים הקרובים<br>
                    באחד מאמצעי הקשר שמלאת בטופס<br></p>
                <p style="direction: rtl;">במייל:
                    <span id="email" style=color:blueviolet;"></span><br>
                    בטלפון:
                    <span id="phone" style=color:blueviolet;"></span>
                </p>
                
            </div>
            
        </main>
        <footer>

        </footer>
        <script>

            window.onload = function () {
                var url = document.location.href,
                        params = url.split('?')[1].split('&'),
                        data = {}, tmp;
                for (var i = 0, l = params.length; i < l; i++) {
                    tmp = params[i].split('=');
                    data[tmp[0]] = tmp[1];
                }
                document.getElementById('name').innerHTML = data.name;
                
                 document.getElementById('email').innerHTML = data.email;
                  document.getElementById('phone').innerHTML = data.phone;
            }
        </script>
    </body>
</html>
