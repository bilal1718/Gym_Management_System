<?php
session_start();
if(isset($_SESSION['sign'])){
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
      <li>Breakfast: Oatmeal with berries and a sprinkle of almonds.</li>
      <li>Snack: Greek yogurt with sliced cucumbers.</li>
      <li>Lunch: Grilled chicken breast with a mixed green salad and balsamic vinegar dressing.</li>
      <li>Snack: Apple slices with almond butter.</li>
      <li>Dinner: Baked salmon with roasted asparagus and quinoa.</li>
      <li>Dessert (optional): Dark chocolate square.</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>TUESDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Veggie omelet made with egg whites, spinach, tomatoes, and mushrooms.</li>
      <li>Snack: Carrot sticks with hummus.</li>
      <li>Lunch: Quinoa salad with black beans, corn, cherry tomatoes, and lime dressing.</li>
      <li>Snack: A handful of mixed nuts.</li>
      <li>Dinner: Grilled lean steak with steamed broccoli and sweet potato.</li>
      <li>Dessert (optional): Fresh fruit salad.</li>

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
      <li>Breakfast: Whole grain toast topped with avocado and sliced hard-boiled eggs.</li>
      <li>Snack: Cottage cheese with sliced peaches.</li>
      <li>Lunch: Turkey wrap with lettuce, tomato, and mustard in a whole wheat tortilla.</li>
      <li>Snack: Celery sticks with peanut butter.</li>
      <li>Dinner: Baked chicken breast with roasted Brussels sprouts and brown rice.</li>
      <li>Dessert (optional): Greek yogurt with a drizzle of honey.</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/diet.jpg">
        <figcaption>THURSDAY</figcaption>
      </figure>

      <ul>
      <li>Breakfast: Protein smoothie made with spinach, banana, almond milk, and a scoop of protein powder.</li>
      <li>Snack: Edamame beans.</li>
      <li>Lunch: Grilled shrimp salad with mixed greens, cherry tomatoes, and lemon vinaigrette.</li>
      <li>Snack: Homemade kale chips.</li>
      <li>Dinner: Stir-fried tofu with mixed vegetables and quinoa.</li>
      <li>Dessert (optional): Frozen yogurt with sliced strawberries.</li>
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
      <li>Breakfast: Overnight chia pudding with almond milk and topped with fresh berries.</li>
      <li>Snack: Hard-boiled eggs.</li>
      <li>Lunch: Grilled vegetable and feta cheese wrap in a whole wheat tortilla.</li>
      <li>Snack: Air-popped popcorn.</li>
      <li>Dinner: Baked cod with steamed asparagus and wild rice.</li>
      <li>Dessert (optional): Baked cinnamon apple slices.</li>

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
      <li>Breakfast: Whole grain pancakes topped with Greek yogurt and sliced bananas.</li>
      <li>Snack: Mixed berries.</li>
      <li>Lunch: Grilled chicken Caesar salad with romaine lettuce, cherry tomatoes, and light dressing.</li>
      <li>Snack: Almond milk smoothie with spinach, mango, and a scoop of protein powder.</li>
      <li>Dinner: Vegetable stir-fry with tofu or shrimp and brown rice.</li>
      <li>Dessert (optional): Small portion of sorbet.</li>
      </ul>
    </div>
  </div>
</div>
<!-- /flip-card-container --->
</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
