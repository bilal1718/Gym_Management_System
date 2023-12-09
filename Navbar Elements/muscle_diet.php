<?php
session_start();
if(isset($_SESSION['sign'])){ ?>


<?php 
include_once('../Dashboard/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/training.css">

	<title>Your Diet Plan</title>
</head>
<body>
<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 220">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>MONDAY</figcaption>
        
      </figure>

      <ul>
      <li>Breakfast: Scrambled eggs with spinach, bell peppers, and whole grain toast.</li>
      <li>Snack: Greek yogurt with mixed berries.</li>
      <li>Lunch: Grilled chicken breast with quinoa and steamed vegetables.</li>
      <li>Pre-workout Snack: Apple slices with almond butter.</li>
      <li>Post-workout Shake: Whey protein shake with banana and almond milk.</li>
      <li>Dinner: Baked salmon with sweet potato and roasted asparagus.</li>
      <li>Evening Snack: Cottage cheese with pineapple chunks.</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>TUESDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Protein pancakes with blueberries and a side of Greek yogurt.</li>
      <li>Snack: Hard-boiled eggs.</li>
      <li>Lunch: Lean ground turkey with brown rice and mixed vegetables.</li>
      <li>Pre-workout Snack: Whole grain crackers with tuna.</li>
      <li>Post-workout Shake: Chocolate protein shake with almond milk.</li>
      <li>Dinner: Grilled steak with roasted sweet potatoes and sautéed spinach.</li>
      <li>Evening Snack: Protein bar.</li>
      </ul>
    </div>
    </div>

  </div>
</div>
<!-- /flip-card-container -->

<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 170">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>WEDNESDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Oatmeal with sliced bananas, chopped nuts, and a scoop of protein powder.</li>
      <li>Snack: Cottage cheese with sliced peaches.</li>
      <li>Lunch: Grilled chicken breast with quinoa and roasted Brussels sprouts.</li>
      <li>Pre-workout Snack: Rice cakes with almond butter.</li>
      <li>Post-workout Shake: Vanilla protein shake with mixed berries and almond milk.</li>
      <li>Dinner: Baked cod with quinoa and steamed broccoli.</li>
      <li>Evening Snack: Greek yogurt with a drizzle of honey.</li>

      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>THURSDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Vegetable omelet with egg whites, spinach, tomatoes, and mushrooms.</li>
      <li>Snack: Protein bar.</li>
      <li>Lunch: Grilled shrimp with quinoa and roasted asparagus.</li>
      <li>Pre-workout Snack: Banana with almond butter.</li>
      <li>Post-workout Shake: Chocolate protein shake with almond milk.</li>
      <li>Dinner: Baked chicken breast with brown rice and steamed vegetables.</li>
      <li>Evening Snack: Greek yogurt with mixed berries.</li>

      </ul>
    </div>


  </div>
</div>
<!-- /flip-card-container -->

<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 350">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>FRIDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Whole grain toast topped with avocado and smoked salmon.</li>
      <li>Snack: Protein smoothie with almond milk, banana, and spinach.</li>
      <li>Lunch: Grilled turkey burger with whole wheat bun and a side salad.</li>
      <li>Post-workout Shake: Vanilla protein shake with mixed berries and almond milk.</li>
      <li>Dinner: Baked salmon with quinoa and steamed asparagus.</li>
      <li>Evening Snack: Greek yogurt with a drizzle of honey.</li>

      </ul>
    </div>

    <div class="card-back">
      <!-- only if the image is necessary -->
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>SATURDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Protein pancakes topped with sliced bananas and a side of Greek yogurt.</li>
      <li>Snack: Hard-boiled eggs.</li>
      <li>Lunch: Grilled chicken breast with quinoa and roasted vegetables.</li>
      <li>Pre-workout Snack: Rice cakes with almond butter.</li>
      <li>Post-workout Shake: Chocolate protein shake with almond milk.</li>
      <li>Dinner: Beef stir-fry with brown rice and mixed vegetables.</li>
      <li>Evening Snack: Protein bar.</li>
      </ul>
    </div>
  </div>
</div>
<!-- /flip-card-container -->


</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
