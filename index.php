<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dine</title>
  </head>
  <body>
      <header>
        <div class="header-background">
          <div class="container">
            <div class="header-text">
              <img  class="logo" src="img/logo.png" alt="logo for dine, font lowercase, bold, white">
              <h1>Exquisite dining since 1989</h1>
              <p class="p-header" >Experience our seasonal menu in beautiful country surroundings. Eat the freshest produce from the comfort of our farmhouse.</p>
              <button class="btn-light" type="button" name="button"><a href="#"> button </a></button>
            </div>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="cards font-black">
          <!-- card one -->
          <div class="card-one">

            <div class="row-card">
              <picture>
                <source srcset="img/cards/enjoyable-tall.jpg" media="(min-width: 800px)">
                <source srcset="img/cards/enjoyable-wide.jpg" media="(min-width: 500px)">
                <source srcset="img/cards/enjoyable-small.jpg" media="(max-width: 500px)">
                <img class="img-cards"
                  src="img/cards/enjoyable-small.jpg"
                  alt="sheep on the hill"
                  srcset="img/cards/enjoyable-wide.jpg, img/cards/enjoyable-tall.jpg">
              </picture>
            </div>

            <div class="row-card main-text-container">
              <img class="line-break" src="img/line-break-icon.svg">
              <h1 class="h1-bold h1-sml">Enjoyable place for all the family</h1>
              <p>Our relaxed surroundings make dining with us a great experience for everyone. We can even arrange a tour of the farm before your meal.</p>
            </div>

          </div>

          <!-- card two -->
          <div class="card-two">

            <div class="row-card order1-card2">
              <picture>
                <source srcset="img/cards/locally-tall.jpg" media="(min-width: 800px)">
                <source srcset="img/cards/locally-wide.jpg" media="(min-width: 500px)">
                <source srcset="img/cards/locally-small.jpg" media="(max-width: 500px)">
                <img class="img-cards"
                src="img/cards/locally-small.jpg"
                alt="plating up food"
                srcset="img/cards/locally-wide.jpg, img/cards/locally-tall.jpg">
              </picture>
            </div>

            <div class="row-card order2-card2 main-text-container">
              <img class="line-break" src="img/line-break-icon.svg">
              <h1 class="h1-bold h1-sml">The most locally sourced food</h1>
              <p>All our ingredients come directly from our farm or local fishery. So you can be sure that you’re eating the freshest, most sustainable food.</p>
            </div>

          </div>
        </div>
      </div>

      <!-- highlights from the resteraunt  -->
      <!-- highlights === hl -->
      <div class="container highlights">

        <div class="highlights-header main-text-container">
          <img class="line-break" src="img/line-break-icon.svg">
          <h1 class="h1-bold h1-sml">A few highlights from our menu</h1>
          <p>We cater for all dietary requirements, but here’s a glimpse at some of our diner’s favourites. Our menu is revamped every season.</p>
        </div>

        <div class="highlights-images">

          <!-- salmon image and text  -->
          <div class="food-hl hl-image">

            <div class="img-hl">
              <picture>
                <source srcset="img/highlights/salmon-desktop-tablet.jpg" media="(min-width: 500px)">
                <source srcset="img/highlights/salmon-mobile.jpg" media="(max-width: 500px)">
                <img class="img-cards hl-img"
                src="img/highlights/salmon-mobile.jpg"
                alt="salmon plated up"
                srcset="img/highlights/salmon-desktop-tablet.jpg">
              </picture>
            </div>

            <div class="txt-hl">
              <h3>Seared Salmon Fillet</h3>
              <p>Our locally sourced salmon served with a refreshing buckwheat summer salad.</p>
            </div>
          </div>

          <!-- fillet beef image and text -->
          <div class="food-hl hl-image">

            <div class="img-hl">
              <picture>
                <source srcset="img/highlights/beef-desktop-tablet.jpg" media="(min-width: 500px)">
                <source srcset="img/highlights/beef-mobile.jpg" media="(max-width: 500px)">
                <img class="img-cards hl-img"
                src="img/highlights/beef-mobile.jpg"
                alt="beef mignon plated up"
                srcset="img/highlights/beef-desktop-tablet.jpg">
              </picture>
            </div>

            <div class="txt-hl">
              <h3>Rosemary Filet Mignon</h3>
              <p>Our prime beef served to your taste with a delicious choice of seasonal sides.</p>
            </div>
          </div>

          <!-- chocolate mouse image and text -->
          <div class="food-hl hl-image">

            <div class="img-hl">
              <picture>
                <source srcset="img/highlights/chocolate-desktop-tablet.jpg" media="(min-width: 500px)">
                <source srcset="img/highlights/chocolate-mobile.jpg" media="(max-width: 500px)">
                <img class="img-cards hl-img"
                src="img/highlights/chocolate-mobile.jpg"
                alt="choclate mouse plated up"
                srcset="img/highlights/chocolate-desktop-tablet.jpg">
              </picture>
            </div>

            <div class="txt-hl">
              <h3 class="hl-txt-margin">Summer Fruit Chocolate Mousse</h3>
              <p class="hl-txt-margin hl-p-margin">Creamy mousse combined with summer fruits and dark chocolate shavings.</p>
            </div>
          </div>

        </div>
      </div>

  </body>
</html>
