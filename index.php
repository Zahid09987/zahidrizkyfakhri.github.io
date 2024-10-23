<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Zahid Rizky Fakhri | Portfolio</title>
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">zahid_rizkf</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Him</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="certificates.php">Certifications</a></li>
            </ul>
            <button id="theme-toggle" class="btn btn-outline-secondary ml-auto">Switch to Dark Theme</button>
        </div>
    </nav>
    </header>
    <div class="container">
        <h1>Welcome to Zahid's Portfolio</h1>
        <section>
            <img src="images/IMG_3123.jpg" alt="The photo of Zahid" width="200">
        </section>
        <p>Zahid Rizky Fakhri is an 18-year-old student who likes to play some games, like RGs (some of you probably will not know about the Rhythmic Games), watching the television, making some scrambled eggs and frying some sausages, and doing some of his assignments before the deadline. He is making this project for the Mid-term semester (Mid-term exam) called the Portfolio Website.</p>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Zahid Rizky Fakhri. All rights reserved.</p>
        </div>
    </footer>
    <script>
        const toggleButton = document.getElementById('theme-toggle');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark-theme');
            toggleButton.textContent = document.body.classList.contains('dark-theme') ? 'Switch to Light Theme' : 'Switch to Dark Theme';
        });
    </script>
</body>
</html>