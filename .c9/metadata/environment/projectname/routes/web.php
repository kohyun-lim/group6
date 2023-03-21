{"filter":false,"title":"web.php","tooltip":"/projectname/routes/web.php","undoManager":{"mark":32,"position":32,"stack":[[{"start":{"row":16,"column":4},"end":{"row":16,"column":27},"action":"remove","lines":["return view('welcome');"],"id":2},{"start":{"row":16,"column":4},"end":{"row":16,"column":27},"action":"insert","lines":["return 'Hello, World!';"]}],[{"start":{"row":17,"column":3},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":18,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["Route::get('hotdogs/{id}', function($id) {","  return sprintf('hotdogs #%s', $id);","});",""],"id":4}],[{"start":{"row":17,"column":3},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":3},"action":"insert","lines":["// "],"id":6},{"start":{"row":20,"column":0},"end":{"row":20,"column":3},"action":"insert","lines":["// "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":23,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["Route::get('hotdogs/{id}', function($id) {","  return sprintf('hotdogs #%d', $id);","})->where('id', '[0-9]+');",""],"id":8}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":27,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["Route::get('specials/{qty}/{name}', function($qty,$name) {","  return view('specials')->with(['qty' =>$qty, 'name' => $name]);","})->where(['qty' => '[0-9]+', 'name' => '[a-z]+']);",""],"id":10}],[{"start":{"row":31,"column":0},"end":{"row":34,"column":0},"action":"insert","lines":["use App\\Http\\Controllers\\TaskController;","","Route::get('/index', [TaskController::class, 'index']);",""],"id":11}],[{"start":{"row":31,"column":0},"end":{"row":31,"column":40},"action":"remove","lines":["use App\\Http\\Controllers\\TaskController;"],"id":12},{"start":{"row":30,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":32,"column":22},"end":{"row":32,"column":36},"action":"remove","lines":["TaskController"],"id":13},{"start":{"row":32,"column":22},"end":{"row":32,"column":36},"action":"insert","lines":["TaskController"]}],[{"start":{"row":2,"column":37},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":40},"action":"insert","lines":["use App\\Http\\Controllers\\TaskController;"],"id":15}],[{"start":{"row":19,"column":3},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":16},{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":0},"action":"insert","lines":["Route::get('/about', function () {","    return view('about');","});",""],"id":17}],[{"start":{"row":36,"column":51},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":37,"column":0},"end":{"row":38,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":38,"column":0},"end":{"row":41,"column":0},"action":"insert","lines":["use App\\Http\\Controllers\\QuestionController;","","Route::resource('questions',QuestionController::class);",""],"id":19}],[{"start":{"row":37,"column":0},"end":{"row":39,"column":0},"action":"remove","lines":["","use App\\Http\\Controllers\\QuestionController;",""],"id":20}],[{"start":{"row":4,"column":40},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":5,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["","use App\\Http\\Controllers\\QuestionController;",""],"id":22}],[{"start":{"row":39,"column":51},"end":{"row":40,"column":0},"action":"insert","lines":["",""],"id":23},{"start":{"row":40,"column":0},"end":{"row":41,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":42,"column":0},"end":{"row":42,"column":1},"action":"insert","lines":["/"],"id":24},{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"insert","lines":["/"]},{"start":{"row":42,"column":2},"end":{"row":42,"column":3},"action":"insert","lines":["R"]},{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"insert","lines":["O"]},{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"insert","lines":["U"]},{"start":{"row":42,"column":5},"end":{"row":42,"column":6},"action":"insert","lines":["T"]},{"start":{"row":42,"column":6},"end":{"row":42,"column":7},"action":"insert","lines":["E"]},{"start":{"row":42,"column":7},"end":{"row":42,"column":8},"action":"insert","lines":["R"]}],[{"start":{"row":42,"column":8},"end":{"row":42,"column":9},"action":"insert","lines":[" "],"id":25}],[{"start":{"row":42,"column":8},"end":{"row":42,"column":9},"action":"remove","lines":[" "],"id":26},{"start":{"row":42,"column":7},"end":{"row":42,"column":8},"action":"remove","lines":["R"]},{"start":{"row":42,"column":6},"end":{"row":42,"column":7},"action":"remove","lines":["E"]},{"start":{"row":42,"column":5},"end":{"row":42,"column":6},"action":"remove","lines":["T"]},{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"remove","lines":["U"]},{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"remove","lines":["O"]},{"start":{"row":42,"column":2},"end":{"row":42,"column":3},"action":"remove","lines":["R"]},{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"remove","lines":["/"]}],[{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"insert","lines":["Q"],"id":27}],[{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"remove","lines":["Q"],"id":28}],[{"start":{"row":42,"column":1},"end":{"row":42,"column":2},"action":"insert","lines":["/"],"id":29},{"start":{"row":42,"column":2},"end":{"row":42,"column":3},"action":"insert","lines":["Q"]},{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"insert","lines":["U"]}],[{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"remove","lines":["U"],"id":30}],[{"start":{"row":42,"column":3},"end":{"row":42,"column":4},"action":"insert","lines":["U"],"id":31},{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"insert","lines":["E"]},{"start":{"row":42,"column":5},"end":{"row":42,"column":6},"action":"insert","lines":["S"]},{"start":{"row":42,"column":6},"end":{"row":42,"column":7},"action":"insert","lines":["T"]},{"start":{"row":42,"column":7},"end":{"row":42,"column":8},"action":"insert","lines":["I"]},{"start":{"row":42,"column":8},"end":{"row":42,"column":9},"action":"insert","lines":["O"]},{"start":{"row":42,"column":9},"end":{"row":42,"column":10},"action":"insert","lines":["N"]}],[{"start":{"row":42,"column":10},"end":{"row":42,"column":11},"action":"insert","lines":[" "],"id":32},{"start":{"row":42,"column":11},"end":{"row":42,"column":12},"action":"insert","lines":["C"]},{"start":{"row":42,"column":12},"end":{"row":42,"column":13},"action":"insert","lines":["O"]},{"start":{"row":42,"column":13},"end":{"row":42,"column":14},"action":"insert","lines":["M"]},{"start":{"row":42,"column":14},"end":{"row":42,"column":15},"action":"insert","lines":["T"]},{"start":{"row":42,"column":15},"end":{"row":42,"column":16},"action":"insert","lines":["R"]},{"start":{"row":42,"column":16},"end":{"row":42,"column":17},"action":"insert","lines":["O"]},{"start":{"row":42,"column":17},"end":{"row":42,"column":18},"action":"insert","lines":["L"]},{"start":{"row":42,"column":18},"end":{"row":42,"column":19},"action":"insert","lines":["L"]},{"start":{"row":42,"column":19},"end":{"row":42,"column":20},"action":"insert","lines":["E"]}],[{"start":{"row":42,"column":20},"end":{"row":42,"column":21},"action":"insert","lines":["R"],"id":33}],[{"start":{"row":42,"column":21},"end":{"row":42,"column":22},"action":"insert","lines":[" "],"id":34}]]},"ace":{"folds":[],"scrolltop":420,"scrollleft":0,"selection":{"start":{"row":48,"column":0},"end":{"row":48,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1678234303767,"hash":"a6838547c8e4aa205bb6955c85b1239ecdd19ae2"}