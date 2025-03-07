<?php
?>
</main>
<footer>
    <div class="footer-story">
        <h3>Notre petite histoire</h3>
        <p>PartyShop est né un vendredi soir de 2023, quand Alex et Sam, deux amis passionnés de fêtes et d'arc-en-ciel, se sont retrouvés à court de confettis pour une soirée improvisée. "Plus jamais ça !" se sont-ils promis en créant cette boutique où le fun ne s'arrête jamais.</p>
        <p>Aujourd'hui, notre équipe de lutins festifs travaille jour et nuit (mais surtout la nuit) pour vous proposer les meilleurs produits qui mettront des paillettes dans votre vie ! 🌈✨</p>
    </div>
    <div class="footer-credits">
        <p>© <?php echo date('Y'); ?> PartyShop - Tous droits réservés - Fait avec 💖 et beaucoup de paillettes</p>
        <p class="secret-message">P.S. : Un administrateur qui travaille tard mérite au moins deux cafés ☕☕</p>
    </div>
</footer>

<script>
    // Un petit script pour animer les éléments
    document.addEventListener('DOMContentLoaded', function() {
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
