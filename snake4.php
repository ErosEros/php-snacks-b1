<!-- Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio expedita tenetur impedit consequatur officia vel dolor ad quo saepe. Quod ratione possimus tenetur. Molestiae dolore reprehenderit non, saepe reiciendis voluptatum.';

// echo $paragraph;

$newParagraph = explode( '.' , $paragraph );

var_dump($newParagraph);


?>