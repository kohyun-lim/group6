{"filter":false,"title":"index_yourstudentid.php","tooltip":"/webApp/lab/lab5/index_yourstudentid.php","undoManager":{"mark":85,"position":85,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html>","    <head>","        ","    </head>","    <body>","        <?php","            if (!empty($_SESSION['food_list'])) {","                echo \"<ul>\" ;","                foreach($_SESSION['food_list'] as $f)","                    echo \"<li> $f </li>\";","                echo \"</ul><hr>\";","            }","        ?>","        <form action=\"\" method=\"post\">","            food : <input type=text name=\"yummy\"><br/>","            ","            <input type=hidden name=action value=\"add\">","            <input type=submit value=\"Add food\">","            ","        </form>","        <a href=display.php>Final Display</a>","    </body>","</html>"],"id":1}],[{"start":{"row":6,"column":0},"end":{"row":13,"column":10},"action":"remove","lines":["        <?php","            if (!empty($_SESSION['food_list'])) {","                echo \"<ul>\" ;","                foreach($_SESSION['food_list'] as $f)","                    echo \"<li> $f </li>\";","                echo \"</ul><hr>\";","            }","        ?>"],"id":2}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":18},"action":"remove","lines":["food :"],"id":3}],[{"start":{"row":6,"column":0},"end":{"row":13,"column":15},"action":"remove","lines":["","        <form action=\"\" method=\"post\">","             <input type=text name=\"yummy\"><br/>","            ","            <input type=hidden name=action value=\"add\">","            <input type=submit value=\"Add food\">","            ","        </form>"],"id":4},{"start":{"row":6,"column":0},"end":{"row":15,"column":35},"action":"insert","lines":["  <label for=\"pid\">Product ID:</label>","  <input type=\"text\" id=\"pid\" name=\"pid\"><br><br>","","  <label for=\"pname\">Product Name:</label>","  <input type=\"text\" id=\"pname\" name=\"pname\"><br><br>","","  <label for=\"pprice\">Product Price:</label>","  <input type=\"text\" id=\"pprice\" name=\"pprice\"><br><br>","","  <input type=\"submit\" value=\"Add\">"]}],[{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":[":"],"id":5}],[{"start":{"row":6,"column":29},"end":{"row":6,"column":30},"action":"remove","lines":[":"],"id":6}],[{"start":{"row":12,"column":35},"end":{"row":12,"column":36},"action":"remove","lines":[":"],"id":7}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":0,"column":0},"end":{"row":15,"column":2},"action":"insert","lines":["<?php","    session_start();","    if (!isset($_SESSION['food_list'])) {","        $_SESSION = [];","    }","    ","    echo \"session id = \" . session_id() . \"<br/><hr>\";","    ","    $action = filter_input(INPUT_POST, 'action');","    $food = filter_input(INPUT_POST,'yummy');","","    if (($action=='add') && !empty($food)) {","        $_SESSION['food_list'][$food] = $food; ","    }","    ","?>"],"id":9}],[{"start":{"row":2,"column":29},"end":{"row":2,"column":30},"action":"remove","lines":["d"],"id":10},{"start":{"row":2,"column":28},"end":{"row":2,"column":29},"action":"remove","lines":["o"]},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"remove","lines":["o"]},{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"remove","lines":["f"]}],[{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"insert","lines":["i"],"id":11},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"insert","lines":["t"]},{"start":{"row":2,"column":28},"end":{"row":2,"column":29},"action":"insert","lines":["e"]},{"start":{"row":2,"column":29},"end":{"row":2,"column":30},"action":"insert","lines":["m"]}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":29},"action":"remove","lines":["id=\"pid\""],"id":12},{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"remove","lines":[" "]}],[{"start":{"row":28,"column":21},"end":{"row":28,"column":31},"action":"remove","lines":["id=\"pname\""],"id":13},{"start":{"row":28,"column":20},"end":{"row":28,"column":21},"action":"remove","lines":[" "]}],[{"start":{"row":31,"column":21},"end":{"row":31,"column":32},"action":"remove","lines":["id=\"pprice\""],"id":16}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"remove","lines":["d"],"id":17},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"remove","lines":["o"]},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":["o"]},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"remove","lines":["f"]}],[{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["p"],"id":18},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["i"]},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":36},"end":{"row":9,"column":41},"action":"remove","lines":["yummy"],"id":19},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"insert","lines":["p"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"insert","lines":["i"]},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["d"]}],[{"start":{"row":9,"column":42},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":42},"action":"insert","lines":["$pid = filter_input(INPUT_POST,'pid');"],"id":21}],[{"start":{"row":10,"column":42},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":42},"action":"insert","lines":["$pid = filter_input(INPUT_POST,'pid');"],"id":23}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"remove","lines":["d"],"id":24},{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"remove","lines":["i"]}],[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":["n"],"id":25},{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":["a"]},{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["m"]},{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":41},"action":"remove","lines":["pid"],"id":26},{"start":{"row":10,"column":38},"end":{"row":10,"column":43},"action":"insert","lines":["pname"]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":8},"action":"remove","lines":["$pid"],"id":27},{"start":{"row":11,"column":4},"end":{"row":11,"column":10},"action":"insert","lines":["pprice"]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["$"],"id":28}],[{"start":{"row":11,"column":39},"end":{"row":11,"column":42},"action":"remove","lines":["pid"],"id":29},{"start":{"row":11,"column":39},"end":{"row":11,"column":45},"action":"insert","lines":["pprice"]}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":55},"action":"insert","lines":["            <input type=hidden name=action value=\"add\">"],"id":30}],[{"start":{"row":34,"column":12},"end":{"row":34,"column":55},"action":"remove","lines":["<input type=hidden name=action value=\"add\">"],"id":31},{"start":{"row":34,"column":12},"end":{"row":34,"column":55},"action":"insert","lines":["<input type=hidden name=action value=\"add\">"]}],[{"start":{"row":34,"column":8},"end":{"row":34,"column":12},"action":"remove","lines":["    "],"id":32},{"start":{"row":34,"column":4},"end":{"row":34,"column":8},"action":"remove","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "],"id":33}],[{"start":{"row":33,"column":44},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":34,"column":0},"end":{"row":34,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"remove","lines":[" "],"id":35},{"start":{"row":34,"column":0},"end":{"row":34,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":36},{"start":{"row":35,"column":0},"end":{"row":35,"column":1},"action":"insert","lines":["/"]},{"start":{"row":35,"column":1},"end":{"row":35,"column":2},"action":"insert","lines":["/"]},{"start":{"row":35,"column":2},"end":{"row":35,"column":3},"action":"insert","lines":["a"]},{"start":{"row":35,"column":3},"end":{"row":35,"column":4},"action":"insert","lines":["d"]}],[{"start":{"row":35,"column":3},"end":{"row":35,"column":4},"action":"remove","lines":["d"],"id":37},{"start":{"row":35,"column":2},"end":{"row":35,"column":3},"action":"remove","lines":["a"]},{"start":{"row":35,"column":1},"end":{"row":35,"column":2},"action":"remove","lines":["/"]},{"start":{"row":35,"column":0},"end":{"row":35,"column":1},"action":"remove","lines":["/"]},{"start":{"row":34,"column":0},"end":{"row":35,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":[" "],"id":38},{"start":{"row":34,"column":1},"end":{"row":34,"column":2},"action":"insert","lines":[" "]},{"start":{"row":34,"column":2},"end":{"row":34,"column":3},"action":"insert","lines":[" "]},{"start":{"row":34,"column":3},"end":{"row":34,"column":4},"action":"insert","lines":[" "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":5},"action":"insert","lines":["/"]},{"start":{"row":34,"column":5},"end":{"row":34,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":34,"column":5},"end":{"row":34,"column":6},"action":"remove","lines":["/"],"id":39},{"start":{"row":34,"column":4},"end":{"row":34,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":34,"column":4},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":7},"action":"insert","lines":["-->"],"id":41},{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":35,"column":11},"end":{"row":35,"column":12},"action":"insert","lines":["a"],"id":42},{"start":{"row":35,"column":12},"end":{"row":35,"column":13},"action":"insert","lines":["d"]}],[{"start":{"row":35,"column":12},"end":{"row":35,"column":13},"action":"remove","lines":["d"],"id":43},{"start":{"row":35,"column":11},"end":{"row":35,"column":12},"action":"remove","lines":["a"]},{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"remove","lines":[">"]},{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"remove","lines":["-"]},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"remove","lines":["-"]},{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"remove","lines":["-"]},{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"remove","lines":["-"]},{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"remove","lines":["!"]},{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"remove","lines":["<"]}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":5},"action":"insert","lines":["a"],"id":44},{"start":{"row":35,"column":5},"end":{"row":35,"column":6},"action":"insert","lines":["d"]},{"start":{"row":35,"column":6},"end":{"row":35,"column":7},"action":"insert","lines":["d"]}],[{"start":{"row":35,"column":7},"end":{"row":35,"column":8},"action":"insert","lines":[" "],"id":45},{"start":{"row":35,"column":8},"end":{"row":35,"column":9},"action":"insert","lines":["b"]},{"start":{"row":35,"column":9},"end":{"row":35,"column":10},"action":"insert","lines":["u"]},{"start":{"row":35,"column":10},"end":{"row":35,"column":11},"action":"insert","lines":["t"]},{"start":{"row":35,"column":11},"end":{"row":35,"column":12},"action":"insert","lines":["t"]},{"start":{"row":35,"column":12},"end":{"row":35,"column":13},"action":"insert","lines":["o"]},{"start":{"row":35,"column":13},"end":{"row":35,"column":14},"action":"insert","lines":["n"]}],[{"start":{"row":35,"column":14},"end":{"row":35,"column":17},"action":"insert","lines":["-->"],"id":46},{"start":{"row":35,"column":4},"end":{"row":35,"column":8},"action":"insert","lines":["<!--"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":28},"action":"remove","lines":["food_list"],"id":47},{"start":{"row":14,"column":19},"end":{"row":14,"column":28},"action":"insert","lines":["item_list"]}],[{"start":{"row":14,"column":31},"end":{"row":14,"column":36},"action":"remove","lines":["$food"],"id":48},{"start":{"row":14,"column":31},"end":{"row":14,"column":35},"action":"insert","lines":["$pid"]}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":44},"action":"remove","lines":["$food"],"id":49},{"start":{"row":14,"column":39},"end":{"row":14,"column":43},"action":"insert","lines":["$pid"]}],[{"start":{"row":14,"column":45},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":45},"action":"insert","lines":["$_SESSION['item_list'][$pid] = $pid; "],"id":51}],[{"start":{"row":15,"column":45},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":45},"action":"insert","lines":["$_SESSION['item_list'][$pid] = $pid; "],"id":53}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":35},"action":"remove","lines":["$pid"],"id":54},{"start":{"row":15,"column":31},"end":{"row":15,"column":37},"action":"insert","lines":["$pname"]}],[{"start":{"row":15,"column":41},"end":{"row":15,"column":45},"action":"remove","lines":["$pid"],"id":55},{"start":{"row":15,"column":41},"end":{"row":15,"column":47},"action":"insert","lines":["$pname"]}],[{"start":{"row":16,"column":31},"end":{"row":16,"column":35},"action":"remove","lines":["$pid"],"id":56},{"start":{"row":16,"column":31},"end":{"row":16,"column":38},"action":"insert","lines":["$pprice"]}],[{"start":{"row":16,"column":42},"end":{"row":16,"column":46},"action":"remove","lines":["$pid"],"id":57},{"start":{"row":16,"column":42},"end":{"row":16,"column":49},"action":"insert","lines":["$pprice"]}],[{"start":{"row":39,"column":35},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":58},{"start":{"row":40,"column":0},"end":{"row":40,"column":2},"action":"insert","lines":["  "]},{"start":{"row":40,"column":2},"end":{"row":41,"column":0},"action":"insert","lines":["",""]},{"start":{"row":41,"column":0},"end":{"row":41,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":41,"column":2},"end":{"row":48,"column":10},"action":"insert","lines":["        <?php","            if (!empty($_SESSION['food_list'])) {","                echo \"<ul>\" ;","                foreach($_SESSION['food_list'] as $f)","                    echo \"<li> $f </li>\";","                echo \"</ul><hr>\";","            }","        ?>"],"id":59}],[{"start":{"row":48,"column":10},"end":{"row":49,"column":0},"action":"insert","lines":["",""],"id":60},{"start":{"row":49,"column":0},"end":{"row":49,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":42,"column":34},"end":{"row":42,"column":43},"action":"remove","lines":["food_list"],"id":61},{"start":{"row":42,"column":34},"end":{"row":42,"column":43},"action":"insert","lines":["item_list"]}],[{"start":{"row":44,"column":35},"end":{"row":44,"column":44},"action":"remove","lines":["food_list"],"id":62},{"start":{"row":44,"column":35},"end":{"row":44,"column":44},"action":"insert","lines":["item_list"]}],[{"start":{"row":44,"column":51},"end":{"row":44,"column":52},"action":"remove","lines":["f"],"id":63}],[{"start":{"row":44,"column":51},"end":{"row":44,"column":52},"action":"insert","lines":["i"],"id":64}],[{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"remove","lines":["f"],"id":65}],[{"start":{"row":45,"column":32},"end":{"row":45,"column":33},"action":"insert","lines":["i"],"id":66}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":13,"column":35},"end":{"row":13,"column":40},"action":"remove","lines":["$food"],"id":68},{"start":{"row":13,"column":35},"end":{"row":13,"column":39},"action":"insert","lines":["$pid"]}],[{"start":{"row":0,"column":0},"end":{"row":42,"column":29},"action":"remove","lines":["<?php","    session_start();","    if (!isset($_SESSION['item_list'])) {","        $_SESSION = [];","    }","    ","    echo \"session id = \" . session_id() . \"<br/><hr>\";","    ","    $action = filter_input(INPUT_POST, 'action');","    $pid = filter_input(INPUT_POST,'pid');","    $pname = filter_input(INPUT_POST,'pname');","    $pprice = filter_input(INPUT_POST,'pprice');","","    if (($action=='add') && !empty($pid)) {","        $_SESSION['item_list'][$pid] = $pid; ","        $_SESSION['item_list'][$pname] = $pname; ","        $_SESSION['item_list'][$pprice] = $pprice; ","    }","    ","?>","","<!DOCTYPE html>","<html>","    <head>","        ","    </head>","    <body>","  <label for=\"pid\">Product ID</label>","  <input type=\"text\" name=\"pid\"><br><br>","","  <label for=\"pname\">Product Name</label>","  <input type=\"text\" name=\"pname\"><br><br>","","  <label for=\"pprice\">Product Price</label>","  <input type=\"text\"  name=\"pprice\"><br><br>","    ","    <!--add button-->","    <input type=hidden name=action value=\"add\">","  <input type=\"submit\" value=\"Add\">","  ","          <?php","            if (!empty($_SESSION['item_list'])) {","                echo \"<ul>\" ;"],"id":69},{"start":{"row":0,"column":0},"end":{"row":44,"column":20},"action":"insert","lines":["<?php","  session_start();","  if (!isset($_SESSION['item_list'])) {","    $_SESSION['item_list'] = [];","  }","","  echo \"session id = \" . session_id() . \"<br/><hr>\";","","  $action = filter_input(INPUT_POST, 'action');","  $pid = filter_input(INPUT_POST,'pid');","  $pname = filter_input(INPUT_POST,'pname');","  $pprice = filter_input(INPUT_POST,'pprice');","","  if (($action=='add') && !empty($pid) && !empty($pname) && !empty($pprice)) {","    $_SESSION['item_list'][] = [","      'pid' => $pid,","      'pname' => $pname,","      'pprice' => $pprice","    ];","  }","?>","","<!DOCTYPE html>","<html>","  <head>","  </head>","  <body>","    <form method=\"post\">","      <label for=\"pid\">Product ID:</label>","      <input type=\"text\" name=\"pid\"><br><br>","","      <label for=\"pname\">Product Name:</label>","      <input type=\"text\" name=\"pname\"><br><br>","","      <label for=\"pprice\">Product Price:</label>","      <input type=\"text\" name=\"pprice\"><br><br>","","      <!-- add button -->","      <input type=\"hidden\" name=\"action\" value=\"add\">","      <input type=\"submit\" value=\"Add\">","    </form>","","    <?php","      if (!empty($_SESSION['item_list'])) {","        echo \"<ul>\";"]}],[{"start":{"row":43,"column":0},"end":{"row":47,"column":33},"action":"remove","lines":["      if (!empty($_SESSION['item_list'])) {","        echo \"<ul>\";","                foreach($_SESSION['item_list'] as $i)","                    echo \"<li> $i </li>\";","                echo \"</ul><hr>\";"],"id":70},{"start":{"row":43,"column":0},"end":{"row":47,"column":29},"action":"insert","lines":["   if (!empty($_SESSION['item_list'])) {","            echo \"<ul>\" ;","            foreach($_SESSION['item_list'] as $item)","                echo \"<li> Product ID: \" . $item['pid'] . \" Product Name: \" . $item['pname'] . \" Product Price: \" . $item['pprice'] . \"</li>\";","            echo \"</ul><hr>\";"]}],[{"start":{"row":49,"column":10},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":71},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]},{"start":{"row":50,"column":8},"end":{"row":51,"column":0},"action":"insert","lines":["",""]},{"start":{"row":51,"column":0},"end":{"row":51,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":51,"column":8},"end":{"row":53,"column":15},"action":"insert","lines":["        <form action=\"submit.php\" method=\"post\">","            <input type=\"submit\" value=\"Submit\">","        </form>"],"id":72}],[{"start":{"row":51,"column":14},"end":{"row":51,"column":15},"action":"remove","lines":[" "],"id":73},{"start":{"row":51,"column":13},"end":{"row":51,"column":14},"action":"remove","lines":[" "]},{"start":{"row":51,"column":12},"end":{"row":51,"column":13},"action":"remove","lines":[" "]},{"start":{"row":51,"column":8},"end":{"row":51,"column":12},"action":"remove","lines":["    "]},{"start":{"row":51,"column":4},"end":{"row":51,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":51,"column":4},"end":{"row":51,"column":8},"action":"insert","lines":["    "],"id":74}],[{"start":{"row":55,"column":28},"end":{"row":55,"column":41},"action":"remove","lines":["Final Display"],"id":75},{"start":{"row":55,"column":28},"end":{"row":55,"column":29},"action":"insert","lines":["S"]},{"start":{"row":55,"column":29},"end":{"row":55,"column":30},"action":"insert","lines":["h"]},{"start":{"row":55,"column":30},"end":{"row":55,"column":31},"action":"insert","lines":["j"]}],[{"start":{"row":55,"column":30},"end":{"row":55,"column":31},"action":"remove","lines":["j"],"id":76}],[{"start":{"row":55,"column":30},"end":{"row":55,"column":31},"action":"insert","lines":["o"],"id":77},{"start":{"row":55,"column":31},"end":{"row":55,"column":32},"action":"insert","lines":["w"]}],[{"start":{"row":55,"column":32},"end":{"row":55,"column":33},"action":"insert","lines":[" "],"id":78},{"start":{"row":55,"column":33},"end":{"row":55,"column":34},"action":"insert","lines":["r"]},{"start":{"row":55,"column":34},"end":{"row":55,"column":35},"action":"insert","lines":["e"]},{"start":{"row":55,"column":35},"end":{"row":55,"column":36},"action":"insert","lines":["p"]},{"start":{"row":55,"column":36},"end":{"row":55,"column":37},"action":"insert","lines":["o"]},{"start":{"row":55,"column":37},"end":{"row":55,"column":38},"action":"insert","lines":["r"]},{"start":{"row":55,"column":38},"end":{"row":55,"column":39},"action":"insert","lines":["t"]}],[{"start":{"row":52,"column":40},"end":{"row":52,"column":46},"action":"remove","lines":["Submit"],"id":80},{"start":{"row":52,"column":40},"end":{"row":52,"column":41},"action":"insert","lines":["S"]},{"start":{"row":52,"column":41},"end":{"row":52,"column":42},"action":"insert","lines":["a"]},{"start":{"row":52,"column":42},"end":{"row":52,"column":43},"action":"insert","lines":["v"]},{"start":{"row":52,"column":43},"end":{"row":52,"column":44},"action":"insert","lines":["e"]}],[{"start":{"row":52,"column":44},"end":{"row":52,"column":45},"action":"insert","lines":[" "],"id":81},{"start":{"row":52,"column":45},"end":{"row":52,"column":46},"action":"insert","lines":["t"]},{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"insert","lines":["o"]}],[{"start":{"row":52,"column":47},"end":{"row":52,"column":48},"action":"insert","lines":[" "],"id":82},{"start":{"row":52,"column":48},"end":{"row":52,"column":49},"action":"insert","lines":["D"]},{"start":{"row":52,"column":49},"end":{"row":52,"column":50},"action":"insert","lines":["a"]},{"start":{"row":52,"column":50},"end":{"row":52,"column":51},"action":"insert","lines":["t"]},{"start":{"row":52,"column":51},"end":{"row":52,"column":52},"action":"insert","lines":["a"]}],[{"start":{"row":52,"column":48},"end":{"row":52,"column":52},"action":"remove","lines":["Data"],"id":83},{"start":{"row":52,"column":48},"end":{"row":52,"column":56},"action":"insert","lines":["Database"]}],[{"start":{"row":55,"column":16},"end":{"row":55,"column":23},"action":"remove","lines":["display"],"id":85},{"start":{"row":55,"column":16},"end":{"row":55,"column":41},"action":"insert","lines":["salesReport_yourStudentid"]}],[{"start":{"row":43,"column":0},"end":{"row":48,"column":13},"action":"remove","lines":["   if (!empty($_SESSION['item_list'])) {","            echo \"<ul>\" ;","            foreach($_SESSION['item_list'] as $item)","                echo \"<li> Product ID: \" . $item['pid'] . \" Product Name: \" . $item['pname'] . \" Product Price: \" . $item['pprice'] . \"</li>\";","            echo \"</ul><hr>\";","            }"],"id":86},{"start":{"row":43,"column":0},"end":{"row":54,"column":1},"action":"insert","lines":["if (!empty($_SESSION['item_list'])) {","    echo \"<table>\" ;","    echo \"<tr><th>Product ID</th><th>Product Name</th><th>Product Price</th></tr>\";","    foreach($_SESSION['item_list'] as $item) {","        echo \"<tr>\";","        echo \"<td>\" . $item['pid'] . \"</td>\";","        echo \"<td>\" . $item['pname'] . \"</td>\";","        echo \"<td>\" . $item['pprice'] . \"</td>\";","        echo \"</tr>\";","    }","    echo \"</table><hr>\";","}"]}],[{"start":{"row":11,"column":46},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":87},{"start":{"row":12,"column":0},"end":{"row":12,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":70},"action":"insert","lines":["$salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT);"],"id":88}],[{"start":{"row":11,"column":44},"end":{"row":11,"column":67},"action":"insert","lines":[", FILTER_VALIDATE_FLOAT"],"id":90}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":70},"action":"remove","lines":["$salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_FLOAT);"],"id":91}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":1,"column":1},"end":{"row":6,"column":52},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1675831958095,"hash":"1d305f81d496d3bc3dc29001845cc522b46d055e"}