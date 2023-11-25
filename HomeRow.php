<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Row</title>
  <link rel="stylesheet" href="homerow.css">
  <script src="home_row.js" async></script>
</head>
<body>
  <div class="navbar">
    <a href="HomePage.php">Home</a>
    <a href="game.php">Typing game</a>
    <a href="Lession.php">Typing Lessons</a>
    <a href="Alphabet_typing.php">Alphabet typing</a>
    <a href="login.php">Log out</a>
    <a href="About.php">About</a>
</div>
<div class="container">
    <h1> Home Row </h1>
    <div id="home_row">has sd aj sagas sad flag slash add dad sag haha ah flask has has as gall lads fa d; al all gala hl add ah gj has ls lls halls lg hj</div>
  <br><br>
  <div id="timer">Time: <span id="time">0:00</span></div>

  <div id="results">
    WPM: <span id="wpm">0</span> | Accuracy: <span id="accuracy">0%</span>
  </div>
  <br>
  <br>
  <br>
  <div>
  <input type="text" id="input-text" placeholder="Start typing here..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
  <button onclick="resetTest()"id="button">Reset</button>
</div>
  </div>
</body>
</html>
