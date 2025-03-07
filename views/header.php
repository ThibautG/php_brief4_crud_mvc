<!-- header.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>✨ PartyShop Admin - Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../brief4_crud_mvc/index.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="dashboard-layout">
<nav class="sidebar">
    <div class="sidebar-header">
        <span class="logo-sparkle">✨</span>
        <h1>PartyShop</h1>
        <span class="logo-sparkle">✨</span>
    </div>
    <p class="tagline">Dashboard Admin</p>

    <ul class="sidebar-menu">
        <li>
            <a href="../../brief4_crud_mvc/index.php" class="menu-item">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
            </a>
        </li>
        <!--<li>
            <a href="/brief4_crud_mvc/views/products.php" class="menu-item">
                <i class="fas fa-box-open"></i>
                <span>Produits</span>
            </a>
        </li>-->
        <li>
            <a href="../../brief4_crud_mvc/views/addProduct.php" class="menu-item">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter un produit</span>
            </a>
        </li>
        <li>
            <a href="../../brief4_crud_mvc/views/register.php" class="menu-item">
                <i class="fas fa-plus-circle"></i>
                <span>Inscription</span>
            </a>
        </li>
        <!--<li>
            <a href="#" class="menu-item">
                <i class="fas fa-chart-line"></i>
                <span>Statistiques</span>
            </a>
        </li>-->
        <!--<li>
            <a href="#" class="menu-item">
                <i class="fas fa-cog"></i>
                <span>Paramètres</span>
            </a>
        </li>-->
    </ul>

    <div class="sidebar-footer">
        <p>Session admin</p>
        <a href="#" class="logout-link">
            <i class="fas fa-sign-out-alt"></i>
            <span>Déconnexion</span>
        </a>
    </div>
</nav>

<div class="content-wrapper">
    <header class="dashboard-header">
        <div class="header-title">
            <h2>Dashboard PartyShop</h2>
            <p>Gestion des produits</p>
        </div>
        <div class="user-section">
            <span class="user-greeting">Connexion<!--Bonjour, Admin!--></span>
            <span class="user-avatar">
                    <a href="../../brief4_crud_mvc/views/login.php"><i class="fas fa-user-circle"></i></a>
                </span>
        </div>
    </header>

    <main class="dashboard-main">
        <!-- Fin du header.php -->