<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<link rel="stylesheet" href="css/maya.css" type="text/css">
<title>Maya Beautification Demo</title>
</head>

<body>
  <h1>Maya Beautification Demo</h1>
  <section id="app" hidden>
    <div class="container">
      <video id="monitor" autoplay></video>
    </div>
  </section>
  <div id="splash">
    <p>The ancient Maya had standards of beauty that involved both temporary adornments and jewelry and permanent body modification.</p>
    <p>How would you look? Press Start to begin.</p>
    <p id="errorMessage"></p>
  </div>
  <p><button onclick="init(this)">Start</button></p>

  <div id="gallery"></div>

  <canvas id="photo" style="display:none"></canvas>

  <script src="js/camera.js"></script>
  <script src="vendor/jquery-1.9.1.min.js"></script>

</body>
</html>
