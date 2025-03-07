<!-- footer.php -->
</main>

<footer class="dashboard-footer">
    <div class="footer-story">
        <p>PartyShop est né un vendredi soir de 2023, quand Alex et Sam, deux amis passionnés de fêtes, se sont promis de créer une boutique où le fun ne s'arrête jamais 🌈✨</p>
    </div>
    <div class="footer-credits">
        <p>© <?php echo date('Y'); ?> PartyShop - Dashboard Admin</p>
        <p class="secret-message">P.S. : Un administrateur qui travaille tard mérite au moins deux cafés ☕☕</p>
    </div>
</footer>
</div>

<script>
    // Marquer la page active dans le menu
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer le chemin de la page actuelle
        const currentPath = window.location.pathname;

        // Trouver tous les liens du menu
        const menuItems = document.querySelectorAll('.menu-item');

        // Pour chaque lien, vérifier s'il correspond au chemin actuel
        menuItems.forEach(item => {
            const href = item.getAttribute('href');
            if (currentPath.includes(href) && href !== '#') {
                item.classList.add('active');
            }
        });

        // Animation logo
        const logoSparkles = document.querySelectorAll('.logo-sparkle');
        setInterval(() => {
            logoSparkles.forEach(sparkle => {
                sparkle.style.transform = `scale(${1 + Math.random() * 0.5})`;
                setTimeout(() => {
                    sparkle.style.transform = 'scale(1)';
                }, 300);
            });
        }, 3000);
    });
</script>
</body>
</html>
<!-- Fin du footer.php -->