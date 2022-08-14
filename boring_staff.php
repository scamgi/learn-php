<h1>Hello</h1>
<?php
  /* echo stampa la variabile inserita */ 
  $br = "<br/>";
  /* you can't do string + string */
  /* but you can write it as string . string */
  echo "oh " . $br;
  print_r([1,2,3]);
  echo $br;
?>

<?= 'Post' . $br; ?>

<?php
   /**
    * Resource variables
    * Special variables that can holds a resource
    */
  $my_name = 'Giacomo';
  echo "${my_name}${br}";
  var_dump($my_name);
  /* guarda l'output. Non è molto bello */
  echo '5' + '5';
  echo '5' . '5';

  /* come si creano le costanti? */
  define('HOST', 'localhost');
  echo HOST;
?>

<?php
  // ARRAYS
  $numbers = [1,2,3,4];
  $tartarughe = array('leonardo', 'michelangelo', 'raffaello', 'donatello');
  var_dump($tartarughe);
  echo $tartarughe[0];

  // associative array
  $colors = [
    1 => 'red',
    4 => 'green',
    3 => 'blue'
  ];
  echo $colors[4];

  $hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
  ];
  echo $hex['green'];

  $person = [
    'name' => 'giacomo',
    'surname' => 'scampini',
    'age' => 21
  ];

  var_dump($person['age']);

  $persons = [
    [
      'name' => 'giacomo',
      'surname' => 'scampini',
      'age' => 21
    ],
    [
      'name' => 'brad',
      'surname' => 'pitt',
      'age' => 50
    ],
  ];

  echo $persons[1]['name'];

  echo json_encode($persons);
?>

<?php
  // CONDITIONALS
  if ($person['age'] >= 18) {
    echo 'sei maggiorenne';
  }
  elseif ($person['age'] >= 16) {
    echo 'puoi prendere la moto';
  }
  else {
    echo 'non sei maggiorenne';
  }

  echo $person['age'] >= 18 ? 'sei maggiorenne' : 'sei minorenne';

  switch ($person['name']) {
    case 'giacomo':
      echo 'sei giacomo! wow!';
      break;
    case 'brad':
      echo 'sei brad pitt?';
      break;
    default:
      echo 'non sei nessuno che conosco';
  }
?>

<?php
  // LOOPS
  for ($i = 0; $i < 10; $i++) {
    echo $i;
  }

  $i = 0;
  while ($i < 5) {
    $i++;
    echo 'ciao';
  }

  $i = 0;
  do {
    $i++;
    echo 'hey';
  } while ($i < 3);

  foreach ($persons as $p) {
    echo $p['surname'];
  }
?>

<?php
// FUNCTIONS
  $glo = 0;
  function sum($a = 1, $b = 5) {
    global $glo;
    echo $glo;
    return $a + $b;
  }

  $sayHey = function() {
    echo 'hey';
  };

  $hey = fn() => 'hey';

  echo sum(1,2);
  echo sum();
  $sayHey();
  echo $hey();
?>

<?php
  // ARRAY FUNCTIONS
  echo count($persons);
  var_dump(in_array('green', $colors));
  $tartarughe[] = 'ciao';
  print_r($tartarughe);

  // altri metodi: array_push, array_unshift, 
  // array_pop, array_shift, unset, array_chunk, array_keys, array_flip
  // range, array_map, array_filter, array_reduce
  $a1 = [1,2];
  $a2 = [3,4];
  $a3 = array_merge($a1, $a2);
  $a4 = [...$a1, ...$a2];

  var_dump($a3);
  var_dump($a4);
?>

<?php
  // STRING FUNCTIONS
  // string functions list:
  // strlen, strpos, strrpos, strrev, strtolower,
  // strtoupper, ucwords, str_replace, substr, str_starts_with,
  // htmlentities, printf
?>