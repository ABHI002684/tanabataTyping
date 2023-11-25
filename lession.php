<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
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

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .lesson {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .lesson h2 {
            color: #333;
            margin-bottom: 20px;
            flex: 1;
            pointer-events: none; /* Disable click events for the lesson name */
        }

        .start-button {
            background-color: #4285f4;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .start-button:hover {
            background-color: #1a73e8;
        }
    </style>
    <title>Typing Lessons</title>
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

    <!-- Content -->
    <div class="content">

        <!-- Home Row Lesson -->
        <div id="home-row" class="lesson">
            <h2>Learn the Home Row</h2>
            <button class="start-button" onclick="window.location.href='HomeRow.php'">Start</button>
            <!-- Add content for the Home Row lesson here -->
        </div>

        <!-- Top Row Lesson -->
        <div id="top-row" class="lesson">
            <h2>Master the Top Row</h2>
            <button class="start-button" onclick="window.location.href='TopRow.php'">Start</button>
            <!-- Add content for the Top Row lesson here -->
        </div>
        <!-- Bottom Row Lesson -->
        <div id="bottom-row" class="lesson">
            <h2>Conquer the Bottom Row</h2>
            <button class="start-button" onclick="window.location.href='BottomRow.php'">Start</button>
            <!-- Add content for the Bottom Row lesson here -->
        </div>

    </div>

</body>
</html>
