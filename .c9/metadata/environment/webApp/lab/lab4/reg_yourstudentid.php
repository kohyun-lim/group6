{"filter":false,"title":"reg_yourstudentid.php","tooltip":"/webApp/lab/lab4/reg_yourstudentid.php","undoManager":{"mark":34,"position":34,"stack":[[{"start":{"row":0,"column":0},"end":{"row":16,"column":7},"action":"insert","lines":["<html>","  <head>","    <title>Registration</title>","  </head>","  <body>","    <h2>Registration Form</h2>","    <form action=\"register.php\" method=\"post\">","      <label for=\"username\">Username:</label><br>","      <input type=\"text\" id=\"username\" name=\"username\"><br><br>","      <label for=\"password\">Password:</label><br>","      <input type=\"password\" id=\"password\" name=\"password\"><br><br>","      <label for=\"fullname\">Full Name:</label><br>","      <input type=\"text\" id=\"fullname\" name=\"fullname\"><br><br>","      <input type=\"submit\" value=\"Register\">","    </form> ","  </body>","</html>"],"id":1}],[{"start":{"row":6,"column":18},"end":{"row":6,"column":26},"action":"remove","lines":["register"],"id":2},{"start":{"row":6,"column":18},"end":{"row":6,"column":19},"action":"insert","lines":["a"]},{"start":{"row":6,"column":19},"end":{"row":6,"column":20},"action":"insert","lines":["d"]},{"start":{"row":6,"column":20},"end":{"row":6,"column":21},"action":"insert","lines":["d"]}],[{"start":{"row":6,"column":21},"end":{"row":6,"column":22},"action":"insert","lines":["_"],"id":3},{"start":{"row":6,"column":22},"end":{"row":6,"column":23},"action":"insert","lines":["u"]},{"start":{"row":6,"column":23},"end":{"row":6,"column":24},"action":"insert","lines":["s"]},{"start":{"row":6,"column":24},"end":{"row":6,"column":25},"action":"insert","lines":["e"]},{"start":{"row":6,"column":25},"end":{"row":6,"column":26},"action":"insert","lines":["r"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":29},"action":"insert","lines":["<?php","require_once('database.php');"],"id":5}],[{"start":{"row":1,"column":29},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":[">"]}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["?"],"id":7}],[{"start":{"row":11,"column":63},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":12,"column":0},"end":{"row":12,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":14,"column":67},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":15,"column":0},"end":{"row":15,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":17,"column":63},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":18,"column":0},"end":{"row":18,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":19,"column":34},"end":{"row":19,"column":42},"action":"remove","lines":["Register"],"id":11},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["A"]},{"start":{"row":19,"column":35},"end":{"row":19,"column":36},"action":"insert","lines":["d"]},{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":["d"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":27},"action":"remove","lines":["password"],"id":12},{"start":{"row":14,"column":19},"end":{"row":14,"column":23},"action":"insert","lines":["text"]}],[{"start":{"row":22,"column":7},"end":{"row":32,"column":49},"action":"insert","lines":["           <label>Family name:</label>","            <input type=\"text\" name=\"fname\"><br>","","            <label>Last name:</label>","            <input type=\"text\" name=\"lname\"><br>","","            <label>Salary:</label>","            <input type=\"text\" name=\"salary\"><br>","","            <label>&nbsp;</label>","            <input type=\"submit\" value=\"Add\"><br>"],"id":13}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":27},"action":"remove","lines":[" for=\"username\""],"id":14}],[{"start":{"row":13,"column":12},"end":{"row":13,"column":27},"action":"remove","lines":[" for=\"password\""],"id":15}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":27},"action":"remove","lines":[" for=\"fullname\""],"id":16}],[{"start":{"row":22,"column":17},"end":{"row":32,"column":49},"action":"remove","lines":[" <label>Family name:</label>","            <input type=\"text\" name=\"fname\"><br>","","            <label>Last name:</label>","            <input type=\"text\" name=\"lname\"><br>","","            <label>Salary:</label>","            <input type=\"text\" name=\"salary\"><br>","","            <label>&nbsp;</label>","            <input type=\"submit\" value=\"Add\"><br>"],"id":17}],[{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":[" "],"id":18}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":67},"action":"insert","lines":["d=\"add_employee_form\""],"id":19}],[{"start":{"row":9,"column":46},"end":{"row":9,"column":47},"action":"insert","lines":["i"],"id":20}],[{"start":{"row":9,"column":61},"end":{"row":9,"column":62},"action":"remove","lines":["e"],"id":21},{"start":{"row":9,"column":60},"end":{"row":9,"column":61},"action":"remove","lines":["e"]},{"start":{"row":9,"column":59},"end":{"row":9,"column":60},"action":"remove","lines":["y"]},{"start":{"row":9,"column":58},"end":{"row":9,"column":59},"action":"remove","lines":["o"]},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"remove","lines":["l"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"remove","lines":["p"]},{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"remove","lines":["m"]},{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"remove","lines":["e"]}],[{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"insert","lines":["s"],"id":22},{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"insert","lines":["u"]}],[{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"remove","lines":["u"],"id":23},{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":54},"end":{"row":9,"column":55},"action":"insert","lines":["u"],"id":24},{"start":{"row":9,"column":55},"end":{"row":9,"column":56},"action":"insert","lines":["s"]},{"start":{"row":9,"column":56},"end":{"row":9,"column":57},"action":"insert","lines":["e"]},{"start":{"row":9,"column":57},"end":{"row":9,"column":58},"action":"insert","lines":["r"]}],[{"start":{"row":1,"column":29},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":2,"column":0},"end":{"row":11,"column":2},"action":"insert","lines":["<?php","require('database.php');","$query = 'SELECT *","          FROM Customers","          ORDER BY cid';","$statement = $db->prepare($query);","$statement->execute();","$categories = $statement->fetchAll();","$statement->closeCursor();","?>"],"id":26}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":29},"action":"remove","lines":["<?php","require_once('database.php');"],"id":27}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":28}],[{"start":{"row":26,"column":6},"end":{"row":26,"column":27},"action":"insert","lines":["<label>&nbsp;</label>"],"id":29}],[{"start":{"row":2,"column":0},"end":{"row":8,"column":26},"action":"remove","lines":["$query = 'SELECT *","          FROM Customers","          ORDER BY cid';","$statement = $db->prepare($query);","$statement->execute();","$categories = $statement->fetchAll();","$statement->closeCursor();"],"id":62}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":2},"action":"remove","lines":["","?>"],"id":63}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":37},"action":"remove","lines":["Add"],"id":69},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["R"]},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["e"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["h"]},{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"remove","lines":["i"],"id":70},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"remove","lines":["h"]}],[{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["g"],"id":71},{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["i"]},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["s"]},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["t"]},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["e"]},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["r"]}],[{"start":{"row":10,"column":46},"end":{"row":10,"column":64},"action":"remove","lines":["id=\"add_user_form\""],"id":72},{"start":{"row":10,"column":45},"end":{"row":10,"column":46},"action":"remove","lines":[" "]}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":10,"column":1},"end":{"row":21,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1675225085306,"hash":"d42cd9b67b9ddcf02009535825ffd8d536149157"}