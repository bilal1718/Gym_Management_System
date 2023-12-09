<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bmi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Your BMI</title>
</head>
<body>
<form action="../Infos/bmi_info.php" method="POST">
<section>
  <h2>CALCULATE YOUR BMI</h2>
  <input type="text" id="height" name="height" placeholder="Your Height (in cm)" />
  <input type="text" id="weight"  name="weight" placeholder="Your Weight(in kg)" />
  <button id="calculate" type="submit">Calculate</button>
  <div class="result">
                <h3>Your BMI is </h3>
                <div id="result">00.00</div>
                <p class="comment"></p>
            </div>
</section>
<button class="button" id="prev" onclick="window.location.href='basic_information.php'">&larr; Previous</button>
<button class="button" type="submit" id="next" onclick="window.location.href='../Dashboard/my-profile.php'">Next &rarr;</div>

</form>
</body>
</html>