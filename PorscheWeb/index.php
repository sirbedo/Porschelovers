<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Lovers - Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script>
        
        window.onload = () => {
            alert("Welcome to Porsche Lovers! Enjoy your visit.");
        };

        
        function validateForm() {
            const nameField = document.getElementById('name');
            if (nameField.value.trim() === "") {
                alert("Please enter your name before submitting!");
                return false;
            }
            return true;
        }

        
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            document.getElementById('clock').textContent = timeString;
        }
        setInterval(updateClock, 1000);
        document.addEventListener('DOMContentLoaded', updateClock);
    </script>
</head>
<body>
    <?php
    
    $counter_file = 'counter.txt';
    if (!file_exists($counter_file)) {
        file_put_contents($counter_file, '0');
    }
    $counter = (int)file_get_contents($counter_file);
    $counter++;
    file_put_contents($counter_file, (string)$counter);
    ?>
    
    <header>
        <h1>Welcome to Porsche Lovers</h1>
        <p id="welcome-message"></p>
    </header>
    
    <nav>
        <a href="index.php">Home</a>
        <a href="gallery.html">Cars</a>
        <a href="link.html">Links</a>
    </nav>
    
    <main>
        
        <section class="intro">
            <h2>About Porsche</h2>
            <p>
                Founded in 1931, Porsche has become an icon in the luxury sports car industry, known for its precision engineering, high-performance vehicles, and timeless designs. The company has pushed boundaries in both innovation and quality, achieving global acclaim for models like the 911, Cayenne, and the Taycan.
            </p>
            <p>
                Porsche has continually set new standards in speed, safety, and luxury, with a commitment to sustainable technology. Its influence stretches beyond the automotive world, with ventures into motorsports and technology development that showcase Porsche’s unwavering dedication to excellence.
            </p>
        </section>
        
        
        <section class="founder-info">
            <h2>Ferdinand Porsche: The Visionary Founder</h2>
            <div class="founder-details">
                <img src="images/founder-g.jpg" alt="Ferdinand Porsche" class="founder-image">
                <p>
                    Ferdinand Porsche was a visionary engineer and inventor whose groundbreaking designs transformed the automobile industry. Known for creating the original Volkswagen Beetle and later the first Porsche car, the Porsche 356, he set the foundation for what would become a globally admired luxury brand.
                </p>
                <p>
                    His innovative ideas, combined with a relentless pursuit of excellence, laid the foundation for Porsche’s legacy in motorsport and luxury automotive manufacturing. Porsche’s pioneering spirit, under Ferdinand's influence, remains at the heart of the brand to this day.
                </p>
            </div>
        </section>
        
        
        <section>
            <h3>Website Visitor Count:</h3>
            <p>You are visitor number: <strong><?php echo $counter; ?></strong></p>
        </section>
        
        
        <section>
            <h3>Random Porsche Fact:</h3>
            <p>
                <?php
                $facts = [
                    "The Porsche 911 has been in continuous production since 1964.",
                    "Porsche designed the original Volkswagen Beetle.",
                    "The Porsche Taycan is the brand's first all-electric car.",
                    "Porsche has won the 24 Hours of Le Mans race a record 19 times.",
                    "Ferdinand Porsche also designed military vehicles during World War II."
                ];
                echo $facts[array_rand($facts)];
                ?>
            </p>
        </section>
        
        
        <section>
            <h3>Convert Horsepower to Kilowatts:</h3>
            <form method="GET" action="">
                <label for="horsepower">Enter Horsepower:</label>
                <input type="number" id="horsepower" name="horsepower" step="0.1">
                <button type="submit">Convert</button>
            </form>
            <p>
                <?php
                if (isset($_GET['horsepower'])) {
                    $horsepower = (float)$_GET['horsepower'];
                    $kilowatts = $horsepower * 0.735499;
                    echo htmlspecialchars($horsepower) . " HP is approximately " . round($kilowatts, 2) . " kW.";
                }
                ?>
            </p>
        </section>
        
        
        <section>
            <h3>Subscribe to Porsche News</h3>
            <form onsubmit="return validateForm()">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
                <button type="submit">Subscribe</button>
            </form>
        </section>

            <section>
            <h3>Current Time:</h3>
            <p id="clock"></p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Porsche Lovers - Badr Nasser</p>
    </footer>
</body>
</html>
