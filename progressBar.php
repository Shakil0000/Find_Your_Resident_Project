<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="progressBar.css">
</head>
<body>
<div class="container">
  <div class="box">
    <div class="shadow"></div>
    <div class="content">
      <div class="percent" data-text="Satisfaction" style="--num: 85">
        <div class="dot"></div>
        <svg>
          <circle cx="70" cy="70" r="70"></circle>
          <circle cx="70" cy="70" r="70"></circle>
        </svg>
      </div>
      <div class="number">
        <h2>85<span>%</span></h2>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="shadow"></div>
    <div class="content">
      <div class="percent" data-text="Positive Review" style="--num: 95">
        <div class="dot"></div>
        <svg>
          <circle cx="70" cy="70" r="70"></circle>
          <circle cx="70" cy="70" r="70"></circle>
        </svg>
      </div>
      <div class="number">
        <h2>95<span>%</span></h2>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="shadow"></div>
    <div class="content">
      <div class="percent" data-text="JUp-to-Date" style="--num: 82">
        <div class="dot"></div>
        <svg>
          <circle cx="70" cy="70" r="70"></circle>
          <circle cx="70" cy="70" r="70"></circle>
        </svg>
      </div>
      <div class="number">
        <h2>82<span>%</span></h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>