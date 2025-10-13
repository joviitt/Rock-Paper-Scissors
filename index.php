<?php
// Rock Paper Scissors Game in PHP

$choices = ['rock', 'paper', 'scissors'];
$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_choice = $_POST['choice'];
    $computer_choice = $choices[array_rand($choices)];

    if ($user_choice == $computer_choice) {
        $message = "🤝 It's a tie! You both chose $user_choice.";
    } elseif (
        ($user_choice == 'rock' && $computer_choice == 'scissors') ||
        ($user_choice == 'paper' && $computer_choice == 'rock') ||
        ($user_choice == 'scissors' && $computer_choice == 'paper')
    ) {
        $message = "🎉 You win! You chose $user_choice and the computer chose $computer_choice.";
    } else {
        $message = "💀 You lose! You chose $user_choice and the computer chose $computer_choice.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rock Paper Scissors Game</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            background: #f4f4f9;
            padding-top: 50px;
        }
        .button {
            font-size: 20px;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }
        .rock { background-color: #c0392b; color: white; }
        .paper { background-color: #27ae60; color: white; }
        .scissors { background-color: #2980b9; color: white; }
    </style>
</head>
<body>
    <h1>🪨 Rock ✋ Paper ✂️ Scissors</h1>

    <form method="POST">
        <button class="button rock" name="choice" value="rock">Rock</button>
        <button class="button paper" name="choice" value="paper">Paper</button>
        <button class="button scissors" name="choice" value="scissors">Scissors</button>
    </form>

    <h2><?php echo $message; ?></h2>
</body>
</html>