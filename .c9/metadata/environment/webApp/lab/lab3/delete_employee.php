{"filter":false,"title":"delete_employee.php","tooltip":"/webApp/lab/lab3/delete_employee.php","undoManager":{"mark":28,"position":28,"stack":[[{"start":{"row":0,"column":0},"end":{"row":18,"column":21},"action":"insert","lines":["<?php","require_once('database.php');","","// Get IDs","$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);","$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);","","// Delete the product from the database","if ($product_id != FALSE && $category_id != FALSE) {","    $query = 'DELETE FROM products","              WHERE productID = :product_id';","    $statement = $db->prepare($query);","    $statement->bindValue(':product_id', $product_id);","    $success = $statement->execute();","    $statement->closeCursor();    ","}","","// Display the Product List page","include('index.php');"],"id":1}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":76},"action":"remove","lines":["$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);"],"id":2}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":11},"action":"remove","lines":["product_id"],"id":3},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["e"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["m"]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":["p"]},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["i"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["d"]}],[{"start":{"row":4,"column":35},"end":{"row":4,"column":45},"action":"remove","lines":["product_id"],"id":4},{"start":{"row":4,"column":35},"end":{"row":4,"column":36},"action":"insert","lines":["e"]},{"start":{"row":4,"column":36},"end":{"row":4,"column":37},"action":"insert","lines":["m"]},{"start":{"row":4,"column":37},"end":{"row":4,"column":38},"action":"insert","lines":["p"]},{"start":{"row":4,"column":38},"end":{"row":4,"column":39},"action":"insert","lines":["i"]},{"start":{"row":4,"column":39},"end":{"row":4,"column":40},"action":"insert","lines":["d"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":15},"action":"remove","lines":["$product_id"],"id":5},{"start":{"row":8,"column":4},"end":{"row":8,"column":10},"action":"insert","lines":["$empid"]}],[{"start":{"row":8,"column":23},"end":{"row":8,"column":35},"action":"remove","lines":["$category_id"],"id":6},{"start":{"row":8,"column":23},"end":{"row":8,"column":29},"action":"insert","lines":["$empid"]}],[{"start":{"row":9,"column":26},"end":{"row":9,"column":34},"action":"remove","lines":["products"],"id":7},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"insert","lines":["e"]},{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"insert","lines":["m"]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"insert","lines":["p"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"insert","lines":["l"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":["o"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["y"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":["e"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"insert","lines":["e"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"insert","lines":["s"]}],[{"start":{"row":10,"column":20},"end":{"row":10,"column":29},"action":"remove","lines":["productID"],"id":8},{"start":{"row":10,"column":20},"end":{"row":10,"column":26},"action":"insert","lines":["$empid"]}],[{"start":{"row":10,"column":30},"end":{"row":10,"column":40},"action":"remove","lines":["product_id"],"id":9},{"start":{"row":10,"column":30},"end":{"row":10,"column":36},"action":"insert","lines":["$empid"]}],[{"start":{"row":12,"column":28},"end":{"row":12,"column":38},"action":"remove","lines":["product_id"],"id":10},{"start":{"row":12,"column":28},"end":{"row":12,"column":34},"action":"insert","lines":["$empid"]}],[{"start":{"row":12,"column":37},"end":{"row":12,"column":48},"action":"remove","lines":["$product_id"],"id":11},{"start":{"row":12,"column":37},"end":{"row":12,"column":43},"action":"insert","lines":["$empid"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":59},"action":"insert","lines":["$category_name = filter_input(INPUT_POST, 'category_name');"],"id":12}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":14},"action":"remove","lines":["$category_name"],"id":13},{"start":{"row":5,"column":0},"end":{"row":5,"column":6},"action":"insert","lines":["$empid"]}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":48},"action":"remove","lines":["category_name"],"id":14},{"start":{"row":5,"column":35},"end":{"row":5,"column":41},"action":"insert","lines":["$empid"]}],[{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["$"],"id":15}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":64},"action":"remove","lines":["$empid = filter_input(INPUT_POST, 'empid', FILTER_VALIDATE_INT);"],"id":16},{"start":{"row":3,"column":10},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":6},"action":"remove","lines":["empid"],"id":17},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["f"]},{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"insert","lines":["n"]},{"start":{"row":4,"column":3},"end":{"row":4,"column":4},"action":"insert","lines":["a"]},{"start":{"row":4,"column":4},"end":{"row":4,"column":5},"action":"insert","lines":["m"]},{"start":{"row":4,"column":5},"end":{"row":4,"column":6},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":35},"end":{"row":4,"column":40},"action":"remove","lines":["empid"],"id":18},{"start":{"row":4,"column":35},"end":{"row":4,"column":40},"action":"insert","lines":["fname"]}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":10},"action":"remove","lines":["$empid"],"id":19},{"start":{"row":7,"column":4},"end":{"row":7,"column":10},"action":"insert","lines":["$fname"]}],[{"start":{"row":7,"column":23},"end":{"row":7,"column":29},"action":"remove","lines":["$empid"],"id":20},{"start":{"row":7,"column":23},"end":{"row":7,"column":29},"action":"insert","lines":["$fname"]}],[{"start":{"row":9,"column":20},"end":{"row":9,"column":26},"action":"remove","lines":["$empid"],"id":21},{"start":{"row":9,"column":20},"end":{"row":9,"column":25},"action":"insert","lines":["fname"]}],[{"start":{"row":9,"column":29},"end":{"row":9,"column":35},"action":"remove","lines":["$empid"],"id":22},{"start":{"row":9,"column":29},"end":{"row":9,"column":34},"action":"insert","lines":["fname"]}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":34},"action":"remove","lines":["$empid"],"id":23},{"start":{"row":11,"column":28},"end":{"row":11,"column":33},"action":"insert","lines":["fname"]}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":42},"action":"remove","lines":["$empid"],"id":24},{"start":{"row":11,"column":36},"end":{"row":11,"column":41},"action":"insert","lines":["fname"]}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["$"],"id":25}],[{"start":{"row":17,"column":21},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":26},{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"insert","lines":["",""]},{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":20,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["<?php","require_once('database.php');","","// Get IDs","$category_name = filter_input(INPUT_POST, 'category_name');","","// Delete the category from the database","if ($category_name != FALSE ) {","    $query = 'DELETE FROM categories","              WHERE categoryName = :category_name';","    $statement = $db->prepare($query);","    $statement->bindValue(':category_name', $category_name);","    $success = $statement->execute();","    $statement->closeCursor();    ","}","","// Display the category List page","include('category_list.php');",""],"id":27}],[{"start":{"row":7,"column":20},"end":{"row":7,"column":38},"action":"remove","lines":["&& $fname != FALSE"],"id":28}],[{"start":{"row":18,"column":0},"end":{"row":37,"column":29},"action":"remove","lines":["","","<?php","require_once('database.php');","","// Get IDs","$category_name = filter_input(INPUT_POST, 'category_name');","","// Delete the category from the database","if ($category_name != FALSE ) {","    $query = 'DELETE FROM categories","              WHERE categoryName = :category_name';","    $statement = $db->prepare($query);","    $statement->bindValue(':category_name', $category_name);","    $success = $statement->execute();","    $statement->closeCursor();    ","}","","// Display the category List page","include('category_list.php');"],"id":29}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":0},"end":{"row":19,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1674619775180,"hash":"7e1479832231006f5580258eecfb66f48e63de9a"}