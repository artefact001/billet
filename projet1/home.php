<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Makhtoum Voyages</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Makhtoum Voyages</div>
            <ul class="menu">
                <li><a href="#">Accueil</a></li>
                <li><a href="destination.php">Destinations</a></li>
                <li><a href="index.php">Réservations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        
    </header>
<div>
    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenue chez Makhtoum Voyages</h1>
            <p>Explorez le monde avec nous</p>
            <a href="destination.php" class="btn">Découvrez nos offres</a>
        </div>
    </section>
    
    <section class="features">
        <div class="feature">
            <i class="fas fa-globe"></i>
            <h2>Destinations variées</h2>
            <p>Choisissez parmi une large gamme de destinations à travers le monde.</p>
        </div>
        <div class="feature">
            <i class="fas fa-plane"></i>
            <h2>Voyages sur mesure</h2>
            <p>Nous vous proposons des voyages personnalisés selon vos besoins et préférences.</p>
        </div>
        <div class="feature">
            <i class="fas fa-user-friends"></i>
            <h2>Service clientèle</h2>
            <p>Notre équipe dévouée est là pour répondre à toutes vos questions et vous assister tout au long de votre voyage.</p>
        </div>
    </section>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 Makhtoum Voyages - Tous droits réservés</p>
        </div>
    </footer>
    <style>body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    
    header {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
    }
    body{
        background-image: url(images/img7.jpg);
        background-size: cover;
    }
    
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        background-color:#3011BC;
    }
    
    .logo {
        font-size: 24px;
        font-weight: bold;
    }
    
     .menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    
    .menu li {
        margin-left: 20px;
    }
    
    .menu li a {
        color: #fff;
        text-decoration: none;
    }
    nav li:hover .submenu{
	display: inline-block;
	position:absolute;
	top:100%;
	left:0px;
	padding:0px;
	z-index:1000;

}

.submenu{
	display:none;
} 

    
    .hero {
        background-image: url('background.jpg');
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        align-items: center;
    }
    
    .hero-content {
        text-align: center;
    }
    
    .hero-content h1 {
        font-size: 48px;
        margin-bottom: 20px;
    }
    
    .hero-content p {
        font-size: 20px;
        margin-bottom: 30px;
    }
    
    .btn {
        background-color: #FE7A15;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
    }
    
    .features {
        display: flex;
        justify-content: space-around;
        padding: 50px 0;
        background-color: #3011BC;
    }
    
    .feature {
        text-align: center;
    }
    
    .feature i {
        font-size: 48px;
        margin-bottom: 20px;
        color: #FE7A15;
    }
    
    .feature h2 {
        margin-bottom: 10px;
    }
    
    .footer {
        background-color: #3011BC;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        margin-bottom: 100%;
        padding-bottom: 100%;
    }
    </style>
</body>
</html>