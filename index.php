<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daliaus ir Livetos e-parduotuvė</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1A237E;
            --secondary-color: #F5F5F5;
            --accent-color: #FF6D00;
            --text-color: #000000;
            --light-text: #FFFFFF;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }
        
        header {
            background-color: var(--primary-color);
            color: var(--light-text);
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            color: var(--light-text);
        }
        
        .logo span {
            color: var(--accent-color);
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }
        
        nav ul li {
            margin-left: 1rem;
        }
        
        nav ul li a {
            color: var(--light-text);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        nav ul li a:hover {
            color: var(--accent-color);
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .hero {
            position: relative;
            overflow: hidden;
            text-align: center;
            color: var(--light-text);
        }
        
        .hero img {
            width: 100%;
            height: auto;
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }
        
        .hero-content {
            position: relative;
            padding: 5rem 2rem;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .cta-button {
            background-color: var(--accent-color);
            color: var(--light-text);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        
        .cta-button:hover {
            background-color: #E65100;
            transform: scale(1.05);
        }
        
        .section-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--primary-color);
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .product-card {
            background-color: white;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        .product-card img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        
        .product-card h3 {
            margin: 0.5rem 0;
        }
        
        .product-card p {
            color: var(--accent-color);
            font-weight: bold;
            margin: 0.5rem 0 1rem;
        }
        
        .add-to-cart {
            background-color: var(--primary-color);
            color: var(--light-text);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .add-to-cart:hover {
            background-color: #283593;
        }
        
        .categories {
            display: flex;
            justify-content: space-around;
            margin: 3rem 0;
        }
        
        .category {
            text-align: center;
            color: var(--primary-color);
            text-decoration: none;
            transition: transform 0.3s ease;
        }
        
        .category:hover {
            transform: scale(1.1);
        }
        
        .category i {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        footer {
            background-color: var(--primary-color);
            color: var(--light-text);
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
        }
        
        .social-icons {
            margin-top: 1rem;
        }
        
        .social-icons a {
            color: var(--light-text);
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--accent-color);
        }
        
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }
            
            nav ul {
                margin-top: 1rem;
            }
            
            nav ul li {
                margin: 0.5rem 0;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .categories {
                flex-wrap: wrap;
            }
            
            .category {
                flex-basis: 50%;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" class="logo">Daliaus ir Livetos <span>e-parduotuvė</span></a>
            <ul>
                <li><a href="#">Pagrindinis</a></li>
                <li><a href="#">Vyriški</a></li>
                <li><a href="#">Moteriški</a></li>
                <li><a href="#">Vaikiški</a></li>
                <li><a href="#">Mūsų kolekcija</a></li>
                <li><a href="#">Kontaktai</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <img src="images/shop.jpeg" alt="Daliaus ir Livetos e-parduotuvės logotipas">
            <div class="hero-content">
                <h1>Sveiki atvykę į Daliaus ir Livetos e-parduotuvę!</h1>
                <p>Išskirtiniai marškinėliai jūsų unikaliam stiliui</p>
                <button class="cta-button">Naršyti kolekciją</button>
            </div>
        </section>
        
        <section class="categories">
            <a href="#" class="category">
                <i class="fas fa-tshirt"></i>
                <p>Vyriški</p>
            </a>
            <a href="#" class="category">
                <i class="fas fa-female"></i>
                <p>Moteriški</p>
            </a>
            <a href="#" class="category">
                <i class="fas fa-child"></i>
                <p>Vaikiški</p>
            </a>
            <a href="#" class="category">
                <i class="fas fa-palette"></i>
                <p>Mūsų kolekcija</p>
            </a>
            <a href="#" class="category">
                <i class="fas fa-magic"></i>
                <p>Personalizuoti</p>
            </a>
        </section>
        
        <section>
            <h2 class="section-title">Populiariausi produktai</h2>
            <div class="product-grid">
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Klasikiniai balti marškinėliai">
                    <h3>Klasikiniai balti marškinėliai</h3>
                    <p>19.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Juodi marškinėliai su užrašu">
                    <h3>Juodi marškinėliai su užrašu</h3>
                    <p>24.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Spalvoti marškinėliai">
                    <h3>Spalvoti marškinėliai</h3>
                    <p>22.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Sportiniai marškinėliai">
                    <h3>Sportiniai marškinėliai</h3>
                    <p>27.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Langelių dizaino marškinėliai">
                    <h3>Langelių dizaino marškinėliai</h3>
                    <p>29.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
                <div class="product-card">
                    <img src="/api/placeholder/250/250" alt="Dryžuoti marškinėliai">
                    <h3>Dryžuoti marškinėliai</h3>
                    <p>26.99 €</p>
                    <button class="add-to-cart">Į krepšelį</button>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Daliaus ir Livetos e-parduotuvė. Visos teisės saugomos.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </footer>
</body>
</html>
