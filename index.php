<?php
setlocale(LC_ALL, ['fr', 'fra', 'fr_FR']);
## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$today = date("d/m/Y");
echo "<br>$today<br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$today = date("d-m-Y");
echo "<br>$today<br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.

$today = strftime("%A %d %B %Y");
echo "<br>$today<br>";



## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo "<br><br>";

$datetime = new DateTime("2016-08-02");
$datetime->getTimestamp();


##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

echo "<br><br>";

$date1 = new DateTime();
$date2 = new DateTime("2016-05-16");
$diff = date_diff($date1,$date2);
echo $diff->format("%a jour");

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.



$calendar = CAL_GREGORIAN;
$month = 2;
$year = 2016;
$num_days = cal_days_in_month($calendar, $month, $year);
echo "Le mois de février 2016 avait $num_days jours.";



##Exercice 7 Afficher la date du jour + 20 jours.

echo "<br><br>";
$today = date("Y-m-d");
$future_date = date("Y-m-d", strtotime("+20 days", strtotime($today)));
echo "La date dans 20 jours sera : $future_date";
##Exercice 8 Afficher la date du jour - 22 jours

echo "<br><br>";
$today = date("Y-m-d");
$past_date = date("Y-m-d", strtotime("-22 days", strtotime($today)));
echo "La date il y a 22 jours était : $past_date";

## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )


