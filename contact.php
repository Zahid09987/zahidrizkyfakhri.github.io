<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zahid Rizky Fakhri | Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">zahid_rizkf</a >
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
        <h1>Contact</h1>
        <?php
        $stmt = $pdo->prepare("SELECT email, phone_number, address FROM contacts");
        $stmt->execute();
        $about = $stmt->fetchAll();
        foreach ($about as $contact) {
            echo "<p>Email: " . $contact['email'] . "</p>";
            echo "<p>Phone Number: " . $contact['phone_number'] . "</p>";
            echo "<p>Address: " . $contact['address'] . "</p>";
        }
        ?>
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