<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
  <link href="pyro.css" rel="stylesheet" />
  <title>Temblador Pyrography & Woodworking</title>
</head>

<body>

  <nav>
    <a href="#shop" target="_self" class="nav-link">shop</a>|
    <a href="#quote" target="_self" class="nav-link">quote</a>|
    <a href="#gallery" target="_self" class="nav-link">gallery</a>|
    <a href="#info" target="_self" class="nav-link">about</a>
  </nav>

  <header>
    <img src="https://antone.dev/pyro/img/pyro-logo.svg">
      <svg viewbox="0 0 92.15 12.5">
        <text x="0" y="12">TEMBLADOR</text>
      </svg>
      <svg viewbox="0 0 227 17.7">
        <text x="3.5" y="13">woodworking & pyrography</text>
      </svg>
  </header>

  <main>
    <section id="info">
      <p>
        <span class="fancy">Ralph Temblador</span> is a Disabled American
        Veteran who, while serving in the United States Army was deployed in
        support of Operation Desert Shield, Desert Falcon, and Southern Watch.
      </p>
      <img src="img/author2.webp" width="720" height="405" alt="Ralph Temblador with soldiers in the Army." />
      <p>
        He has gone on to obtain an Associate in Multimedia and Broadcast
        Production and a Bachelors in Visual Effects and Motion Graphics.
        Ralph's love for art also led him to teaching the developmentally
        disabled.
      </p>
      <img src="img/author1.webp" width="1024" height="768" alt="Ralph Temblador in a wheelchair in a museum." />
      <p>
        Though Ralph had symptoms for a decade he was diagnosed with
        Hereditary Spastic Paraplegia in 2017. Since then, he has found
        pyrography and woodworking to be a great source of therapy. Today,
        Tembopyro.com is your gateway to one of a kind, handcrafted art.
      </p>
    </section>

    <section id="shop">
      <?php require "shop.php" ?>
    </section>

    <section id="quote">
      <h2>Custom Pyrography Quote Request</h2>
      <form method="POST" action="quote-form.php" enctype="multipart/form-data" id="quote-form">
        <label for="name">Name</label>
        <input type="text" class="form-field" name="name" required />
        <label for="email">Email</label>
        <input type="email" class="form-field" name="email" required />
        <label for="product">Product</label>
        <select name="product" class="form-field" required>
          <option value="yell at Antone, this is an error." selected disabled hidden>Select product</option>
          <option value="large">Large wood art</option>
          <option value="medium">Medium wood art</option>
          <option value="small">Small wood art</option>
          <option value="coasters">Wood art coasters</option>
          <option value="other">Other (Please describe below)</option>
        </select>
        Upload a file
        <input type="file" class="file form-field" value="file" name="file" />
        Additional details<textarea cols="20" rows="5" class="form-field" name="details"></textarea>
        <div id="button-box" class="form-field">
          <input type="reset" value="Reset Form" />
          <input type="submit" value="Send Request" disabled />
        </div>
      </form>
    </section>
  </main>
</body>
</html>