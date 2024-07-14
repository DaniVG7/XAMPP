<?php 

$notaNumerica = $_POST['notaNumerica'];
    
switch(true){
    case ($notaNumerica<=20 and $notaNumerica>=19):
        echo 'la nota es "A"';
        break;
    case ($notaNumerica<=18 and $notaNumerica>=16):
        echo 'la nota es "B"';
        break;
    case ($notaNumerica<=15 and $notaNumerica>=12):
        echo 'la nota es "C"';
        break;
    case ($notaNumerica<=11 and $notaNumerica>=9):
        echo 'la nota es "D"';
        break;
    case ($notaNumerica<=8 and $notaNumerica>=0):
        echo 'la nota es "E"';
        break;
    default:
        echo 'La nota introducida es incorrecta';
}

?>
<?php 
