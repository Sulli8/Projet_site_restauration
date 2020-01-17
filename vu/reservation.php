<section class="reservation-area section-gap relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 reservation-left">
        <h1 class="text-white">Réservez vos sièges pour confirmer si vous venez avec votre famille</h1>
      </div>
      <div class="col-lg-5 reservation-right">
        <form class="form-wrap text-center" action="">
          <input type="text" class="form-control" name="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
          <input type="text" class="form-control" name="FirsName" placeholder="Prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your First Name'"/>
          <input type="email" class="form-control" name="email" placeholder="Adresse e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
          <input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >
          <input type="text" class="form-control date-picker" name="date" placeholder="Réservez une date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date & time'" >
          <div class="form-select" id="service-select">
            <select>
              <option data-display="">Selectionner un évènement</option>
              <option value="1">Anniversaire</option>
              <option value="2">Dîner entre amis</option>
                <option value="2">Réserver une table</option>

            </select>
          </div>
          <input type="submit" value="Réservation"class="primary-btn text-uppercase mt-20"></input>
        </form>
      </div>
    </div>
  </div>
</section>
