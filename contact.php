<?php include('header.php'); ?>

<link rel="stylesheet" href="header.css"> 
<link rel="stylesheet" href="footer.css">

<!-- Contact Us Section -->
<section class="contact-us">
    <div class="container">
        <h2>Contact Us</h2>
        <p>If you have any questions, feedback, or inquiries, please reach out to us using the form below or through the provided contact details.</p>

        <h3>Get in Touch</h3>
        <form action="submit_contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required />
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>

        <h3>Other Ways to Reach Us</h3>
        <p>Feel free to email us directly at <a href="mailto:atuhejoel112@gmail.com">support@sportshub.com</a> or contact us via our social media channels:</p>
        <ul class="contact-links">
            <li><a href="https://facebook.com/sportshub" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/sportshub" target="_blank">Twitter</a></li>
            <li><a href="https://instagram.com/sportshub" target="_blank">Instagram</a></li>
        </ul>
    </div>
</section>

<!-- Include Footer -->
<?php include('footer.php'); ?>

</body>
</html>
