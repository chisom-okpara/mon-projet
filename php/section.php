<section class="section-3">
        <h3>formulaire de contact</h3>
        
        
            <form method="GET" action="url-traitement.php">
                <!-- formulaire contact -->
                <!-- nom, email et message du visiteur -->
                <label for="contact-nom">nom</label>
                <input type="text" placeholder="entrez votre nom" name="nom" required id="contact-nom">
                <label for="contact-email">email</label>
                <input type="email" placeholder="entrez votre email" name="email" required id="contact-email">
                <label for="contact-message">message</label>
                <textarea name="contact-message" id="contact-message" placeholder="entrez votre message" cols="40" rows="6" required></textarea>
                <button type="submit">envoyer le message</button>
            </form>
        </section>