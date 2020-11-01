<?php
$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

sort($movies);

?>
<ol>
    <?php foreach($movies as $movie):?>
        <li><?=$movie?></li>
    <?php endforeach; ?>
</ol>
    
<?php for ($i=0; $i<10; $i++): ?>
    <li><?=$movies[$i]?></li>
<?php endfor; ?>