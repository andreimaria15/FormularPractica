<?php
	echo "Felicitari, ".$_POST["nume"]." ".$_POST["prenume"].", tocmai ai finalizat cu succes stagiul de practica din aceasta vara!";
	echo "<br/>";
	if($_POST["gen"]=="masculin")
		echo "Studentul ";
	else
		echo "Studenta ";
	echo $_POST["nume"]." ".$_POST["prenume"].", avand numarul de telefon ".$_POST["telefon"]." si adresa de mail ".$_POST["email"]." a finalizat stagiul de practica efectuat in anul 2021.";
	echo "<br/>";
	if($_POST["gen"]=="masculin")
		echo "Acesta este student ";
	else
		echo "Aceasta este studenta ";
	echo "in ".$_POST["an"]." de studiu in cadrul Facultatii de ".$_POST["facultate"].", facand practica in format ";
	if($_POST["practica"]==1)
		echo "online ";
	else
		echo "fizic ";
	echo "la compania ".$_POST["firma"]." cu tema ".$_POST["tema"].".";
?>