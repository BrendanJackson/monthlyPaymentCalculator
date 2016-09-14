<?php
/**
 *
 *
 **/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="" />
    <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <?php require('MonthlyPaymentCalculator.php');?>
</head>
<body>

<script>
  /* IS THIS NECESSARY WITH "TYPE='NUMBER'" INSIDE THE INPUT STATEMENTS?

    $(document).ready(function() {
        $(".textBoxToFilter").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                    // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });
    */
</script>


<?php

$calulate = new MonthlyPaymentCalculator;

$calulate-> principal = 10000;
$calulate-> interest = 0.10;
$calulate-> totalMonths = 24;
$calulate-> getInterestPerMonth();//breaks after this

$calulate->downPayment = 1000;
$calulate-> getMonthlyPaymentMinusDownPayment();


?>

<h1 style="color:red;">needs monthly payment</h1>
<form action="POST">
    <p>Monthly Payment</p> <!-- monthlyPayment -->
    <input class="textBoxToFilter" type="number">
    <p>Down Payment</p> <!-- downPayment -->
    <input class="textBoxToFilter" type="number">
    <p>Term Length</p> <!-- totalMonths -->
    <input class="textBoxToFilter" type="number">
</form>

<h1><?=$calulate->getMonthlyPaymentMinusDownPayment();?></h1>

</body>
</html>