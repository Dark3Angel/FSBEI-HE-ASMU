<!DOCTYPE html>
<html>
<body>
<h1>Работа с данными</h1>

<?php
     class HomeController extends Controller {
         public function index() {
             $data = ['name' => 'John', 'age' => 25];
             return view('home', $data);
         }
     }
     
?>

</body>
</html>
