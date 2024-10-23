<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zahid Rizky Fakhri | Projects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
        <h1>Projects</h1>
        <p>This is his first project, and also for the Mid-term Exam, Web-based Computing (Komputasi berbasis Web), from Mr. Hendi Hermawan.</p>
        <p>Mr. Hendi needs him to make this project for the Mid-term Exam before the deadline.</p>
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