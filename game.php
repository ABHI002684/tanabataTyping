
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2-Line Typing Game</title>
    <style>
        /* Styles remain unchanged */
       body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #container {
            width: 100%;
            max-width: 1000px; /* Adjust the max-width as needed */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        #game-container {
            font-size: 24px;
            margin-bottom: 20px;
            padding: 40px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        #input-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        #user-input {
            margin-top: 10px;
            padding: 15px;
            font-size: 20px;
            text-align: center;
            width: 100%; /* Make the input box take up the full width */
        }

        #start-button,
        #done-button {
            margin-top: 10px;
            padding: 15px;
            font-size: 20px;
            cursor: pointer;
            width: 100%; /* Make the button take up the full width */
        }

        #start-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        #done-button {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
        }

        #result-container {
            margin-top: 20px;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .result-box {
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            color: #fff;
        }

        #wpm-box {
            background-color: #3498db; /* Blue */
        }

        #time-box {
            background-color: #e74c3c; /* Red */
        }

        #accuracy-box {
            background-color: #2ecc71; /* Green */
        }

        #navbar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            background-color: #333;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        #navbar a {
            text-decoration: none;
            color: #fff;
            padding: 10px;
            margin: 30px;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="HomePage.php">Home</a>
        <a href="game.php">Typing Game</a>
        <a href="Lession.php">Typing Lesson</a>
        <a href="Alphabet_typing.php">Alphabet Typing</a>
        <a href="login.php">Logout</a>
        <a href="About.php">About</a>
    </div>
    <div id="container">
        <h1>Typing Game</h1>
        <div id="game-container">Press the Start button to begin</div>
        <div id="input-container">
            <label for="user-input">Type Faster....</label>
            <textarea id="user-input" rows="2" placeholder="Start typing here..."></textarea>
            <button id="start-button" onclick="startGame()">Start</button>
            <button id="done-button" onclick="endGame()">Done</button>
        </div>
        <div id="result-container">
            <div id="wpm-box" class="result-box">WPM: 0</div>
            <div id="time-box" class="result-box">Time: 0 seconds</div>
            <div id="accuracy-box" class="result-box">Accuracy: 0%</div>
        </div>
    </div>

    <script>
        let startTime, endTime;

        function startGame() {
            document.getElementById('game-container').textContent = generateTwoLineParagraph();
            document.getElementById('user-input').value = '';
            document.getElementById('user-input').focus();
            startTime = new Date().getTime();
            updateResultBox('WPM: 0', 'Time: 0 seconds', 'Accuracy: 0%');
        }

        function endGame() {
            endTime = new Date().getTime();
            const userInput = document.getElementById('user-input').value;
            const originalString = document.getElementById('game-container').textContent.trim();

            const { accuracy, correctCharacters, totalCharacters } = calculateAccuracy(originalString, userInput);
            const timeInSeconds = (endTime - startTime) / 1000;
            const wpm = calculateWPM(correctCharacters, timeInSeconds);

            updateResultBox(`WPM: ${wpm}`, `Time: ${timeInSeconds.toFixed(2)} seconds`, `Accuracy: ${accuracy}%`);
        }

        function updateResultBox(wpm, time, accuracy) {
            document.getElementById('wpm-box').innerHTML = wpm;
            document.getElementById('time-box').innerHTML = time;
            document.getElementById('accuracy-box').innerHTML = accuracy;
        }

        function generateTwoLineParagraph() {
            const lines = [
                "Type with accuracy, master your keyboard skills.",
                "Swift fingers, flawless typing, reach your peak.",
                "Every keystroke powers productivity. Elevate your game with interactive lessons for digital fluency.",
                "Navigate ideas effortlessly with swift typing. Hone your skills through engaging exercises.",
                "Improve accuracy, increase speed, conquer the keyboard. Typing mastery, your pathway to success, begins here.",
                "Master your keyboard, type with finesse and flair. Precision and speed, the keys to success, are in your hands.",
                "Unlock your potential with every keystroke. Type confidently, achieve greatness, and let success unfold."
                // Add more lines as needed
            ];
            const randomIndex = Math.floor(Math.random() * lines.length);
            return lines[randomIndex];
        }

        function calculateWPM(charactersTyped, timeInSeconds) {
            // Assuming an average word length of 5 characters
            const wordsTyped = charactersTyped / 5;
            const minutes = timeInSeconds / 60;
            return (wordsTyped / minutes).toFixed(2);
        }

        function calculateAccuracy(originalString, userInput) {
            const correctCharacters = originalString.split('').filter((char, index) => char === userInput[index]).length;
            const totalCharacters = originalString.length;
            const accuracy = ((correctCharacters / totalCharacters) * 100).toFixed(2);

            return { accuracy, correctCharacters, totalCharacters };
        }

        document.getElementById('user-input').addEventListener('input', function () {
            const userInput = this.value;
            const originalString = document.getElementById('game-container').textContent.trim();

            if (userInput === originalString) {
                endGame();
            }
        });
    </script>
</body>
</html>
