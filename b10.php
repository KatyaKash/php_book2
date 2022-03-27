<?php

header('Content-type: text/html; charset=utf-8');

if (isset($_POST['day'])&&isset($_POST['month'])&&isset($_POST['year'])){
	$date = strtotime($_POST['day'].'.'.$_POST['month'].'.'.$_POST['year']);
	$days = [
    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница', 'Суббота'
];

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<select name="day" id="">
			<option value="01">1</option>
			<option value="02">2</option>
			<option value="03">3</option>
			<option value="04">4</option>
			<option value="05">5</option>
			<option value="06">6</option>
			<option value="07">7</option>
			<option value="08">8</option>
			<option value="09">9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
		</select>
		<select name='month'>
			<option value="01">январь</option>
			<option value="02">февраль</option>
			<option value="03">март</option>
			<option value="04">апрель</option>
			<option value="05">май</option>
			<option value="06">июнь</option>
			<option value="07">июль</option>
			<option value="08">август</option>
			<option value="09">сентябрь</option>
			<option value="10">октябрь</option>
			<option value="11">ноябрь</option>
			<option value="12">декабрь</option>
		</select>
		<select name="year" id="">
			<option>1990</option>
			<option>1991</option>
			<option>1992</option>
			<option>1993</option>
			<option>1994</option>
			<option>1995</option>
			<option>1996</option>
			<option>1997</option>
			<option>1998</option>
			<option>1999</option>
			<option>2000</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
			<option>2004</option>
			<option>2005</option>
			<option>2006</option>
			<option>2007</option>
			<option>2008</option>
			<option>2009</option>
			<option>2010</option>
			<option>2011</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
			<option>2015</option>
			<option>2016</option>
			<option>2017</option>
			<option>2018</option>
			<option>2019</option>
			<option>2020</option>
			<option>2021</option>
			<option>2022</option>
			<option>2023</option>
			<option>2024</option>
			<option>2025</option>
		</select>
		<input type="submit" value="Узнать день недели">
	</form>
	<div><?php if (isset($_POST['day'])&&isset($_POST['month'])&&isset($_POST['year']))
			{
				echo $days[date("w", $date)];
			}
			?>
</div>
</body>
</html>
