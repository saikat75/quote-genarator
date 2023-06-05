<!DOCTYPE html>
<html>
<head>
    <title>Random Quote Generator</title>
</head>
<body>
    <?php
    // Define an array of quotes
    $quotes = [
        "The only way to do great work is to love what you do. - Steve Jobs",
        "Believe you can and you're halfway there. - Theodore Roosevelt",
        "It does not matter how slowly you go as long as you do not stop. - Confucius",
        "Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
        "Don't watch the clock; do what it does. Keep going. - Sam Levenson"
    ];

    // Generate a random index within the range of the quotes array
    $randomIndex = rand(0, count($quotes) - 1);

    // Retrieve the random quote based on the generated index
    $randomQuote = $quotes[$randomIndex];
    ?>

    <h1>Random Quote Generator</h1>
    <blockquote><?php echo $randomQuote; ?></blockquote>
</body>
</html>
