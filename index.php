<?php
$start=1;
$end=100;
$label1='Linio';
$label2='IT';
$label3='Linianos';
for($i=$start;$i<=$end;$i++){
	switch($i){
		case (($i%3==0) && ($i%5==0)):
			echo $label3.'<br/>';
			break;
		case ($i%3==0):
			echo $label1.'<br/>';
			break;
		case ($i%5==0):
			echo $label2.'<br/>';
			break;
		default:
			echo $i.'<br/>';
	}
}
?>