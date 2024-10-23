<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zahid Rizky Fakhri | Certifications</title>
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
        <h1>Certifications</h1>
        <h5>This is the section where you can see his certifications.</h5>
        <section>
            <h6>Certification 1</h6>
            <img src="images/Coursera SI624BXWIEBT-page-00001.jpg" alt="Coursera Certification #1" width="500">
            <p>Introduction to Databases - Meta</p>
        </section>
        <section>
            <h6>Certification 2</h6>
            <img src="images/Coursera V0R3TGOC3C9J-page-00001.jpg" alt="Coursera Certification #2" width="500">
            <p>Laravel Protections - Infosec</p>
        </section>
        <section>
            <h6>Certification 3</h6>
            <img src="images/Coursera 9GDL1GFTAVWQ-page-00001.jpg" alt="Coursera Certification #3" width="500">
            <p>Algorithms for Searching, Sorting, and Indexing - University of Colorado Boulder</p>
        </section>
        <section>
            <h6>Certification 4</h6>
            <img src="images/Coursera HMMGMQ4EFQ4W-page-00001.jpg" alt="Coursera Certification #4" width="500">
            <p>Introduction to Psychology - Yale University</p>
        </section>
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