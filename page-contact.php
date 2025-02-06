<?php get_header() ?>
<main>
  <div id="contact_id">
    <div class="contact-container reasons_why_disappear">
      <div name="contact-form" class="form-container">
        <h2>KONTAKTIRAJTE
          NAS</h2>
        <p>Popunite formu i neko će Vam se javiti u narednih nekoliko sati</p>
        <p class="form-notification"></p>
        <div class="name_mail_container">
          <div>
            <label for="from_name">Ime</label>
            <input id="from_name" name="from_name" type="text" required />
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required />
          </div>
        </div>
        <label for="message">Poruka</label>
        <textarea name="message" id="message" cols="30" rows="6"></textarea>
        <button class="button-form--submit" onclick="sendMail();">Pošalji</button>
      </div>
      <!-- <img src="../assets/img/2.webp" alt="teacher"> -->
    </div>
  </div>
</main>

<?php get_footer() ?>