<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/home.css">
     <link rel = "icon" href = "Image/EM icon.ico" type = "image/x-icon">
    <title>Emkodin</title>
</head>
<body>
    <section class="nav">
    <?php include "Includes/nav.php";?>
    </section>
<section>
<div class="masthead"style= "background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('Image/bg.jpg');  height: auto;">
      <div class="color-overlay d-flex flex-column justify-content-center align-items-center">
        <br><br><br><br><br><br><br><br><br><br><br><br> 
        <h2 style="font-size: 50px;  color: #fff; padding-left: 50px;">Hello,<span></span></h2>
        <h2 style="font-size: 50px;  color: #fff; padding-left: 70px;">Welcome to<span></span></h2>
        <h2 style="font-size: 20px;  color: #fff; padding-left: 50px;">Emkodin<span></span></h2>
        <br><br><br><br><br><br><br><br><br><br><br><br> 
    </div>
</div>
</section>
<section id="card">
<div class="header" style="padding-left: 50px;">
    <h1 hidden>Our</h1>
    <h1> Our Services </h1>
  </div>
  <div class="row1-container" style="padding-left: 50px;">
    <div class="box box-down cyan">
      <h2>Supervisor</h2>
      <p>Monitors activity to identify project roadblocks</p>
      <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
    </div>

    <div class="box red">
      <h2>Team Builder</h2>
      <p>Scans our talent network to create the optimal team for your project</p>
      <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
    </div>

    <div class="box box-down blue">
      <h2>Calculator</h2>
      <p>Uses data from past projects to provide better delivery estimates</p>
      <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
    </div>
  </div>
  <br><br><br>
  <br><br><br>
</section>
    <section class="footer">
        <br><br><br><br>
    <?php include "Includes/footer.php";?>
    </section>
</body>
</html>

<style>
  :root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
}

.card {
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    background-color: var(--veryLightGray);
}

.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);

}

h1:last-of-type {
    color: var(--varyDarkBlue);
}

@media (max-width: 400px) {
    h1 {
        font-size: 1.5rem;
    }
}

.header {
    text-align: center;
    line-height: 0.8;
    margin-bottom: 50px;
    margin-top: 100px;
}

.header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
}


.box p {
    color: var(--grayishBlue);
}

.box {
    border-radius: 5px;
    box-shadow: 0px 30px 40px -20px var(--grayishBlue);
    padding: 30px;
    margin: 20px;  
}

img {
    float: right;
}

@media (max-width: 450px) {
    .box {
        height: 200px;
    }
}

@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: center;
        height: 180px;
    }
}

.cyan {
    border-top: 3px solid var(--cyan);
}
.red {
    border-top: 3px solid var(--red);
}
.blue {
    border-top: 3px solid var(--blue);
}
.orange {
    border-top: 3px solid var(--orange);
}




@media (min-width: 950px) {
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box-down {
        position: relative;
        top: 150px;
    }
    .box {
        width: 20%;
     
    }
    .header p {
        width: 30%;
    }
    
}
</style>