<!DOCTYPE html>
<html>
<body>

<h1>My second lab</h1>

<?php
//1. Задано одновимірний масив $a. Перевірити чи він впорядкований за зростанням. Результат - true/false
function FirstTask(){
    $a = array(2, 4, 6, 7, 9);
    $aDuplicated = $a;
    sort($a);
    if ($a == $aDuplicated){
        echo "true";
        return true;
    }
    else {

        echo "false";
        return false;
    }
}
//2. Задано число n. Заповнити масив наступним чином:
function SecondTask($n){
    $array = array();
    //1 2 3 4 5 .. n
    for ($i=1; $i<=$n; $i++){
        array_push($array, $i);
    }
    //n n-1 . . . 1
    for ($i=$n; $i<=1; $i--){
        array_push($array, $i);
    }
}

//3. Задано масив $a і граничне значення $m. Перевірити, щоб усі значення в масиві були нижче
// або дорівнювали граничному значенню. Якщо вони є, повернути true. В іншому випадку поверніть false.
// Всі значення в масиві є числами.
function ThirdTask($m){
    $a = array(2, 4, 6, 2, 9, 70);
    $count = 0;
    foreach ($a as $element){
        $count++;
        if($element>$a){
            break;
        }
    }
    if ($count==count($a)){
        echo "\ntrue";
        return true;
    }
    else{
        echo "\nfalse";
        return false;
    }
}
//4. Задано масив що містить послідовність чисел від 1 до N. Одне число було видалено з нього,
// та після цього інші числа змішали. Знайдіть число, яке було видалено.
function FourthTask($N){
    $array = array();
    for ($i=1; $i<=$N; $i++){
        array_push($array, $i);
    }

    $arrayDub = $array;
    unset($array[rand(1, $N)]);
    print_r (array_diff($arrayDub, $array));

}
FourthTask(4);

class Person{
  public $first_name;
  public $last_name;
  public function __construct($first_name, $last_name){
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }
  public function get_full_name(){
      return "$this->first_name $this->last_name";
  }

}



?>

</body>
</html>