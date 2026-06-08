<?php $title = 'Xinyang Restaurante Chino | Inicio'; require __DIR__ . '/../layouts/header.php'; ?>

<section id="hero" class="hero section xinyang-hero">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <div class="hero-content">
          <span class="subtitle">Restaurante chino familiar</span>
          <h1>Auténtico sabor oriental para disfrutar en familia</h1>
          <p>Xinyang ofrece platos tradicionales de la cocina china, porciones generosas, servicio cálido y opciones para comer en el local, recoger el pedido o solicitarlo por transferencia y QR.</p>
          <div class="hero-buttons">
            <a href="#menu" class="btn btn-primary">Ver menú</a>
            <a href="#contact" class="btn btn-outline">Visítanos</a>
          </div>
          <div class="hero-features mt-4">
            <div class="feature-item"><i class="bi bi-geo-alt"></i><span>Calle 1 # 24-82, local 1 / Av. Sabanita</span></div>
            <div class="feature-item"><i class="bi bi-clock"></i><span>Martes a domingo: 11:00 a. m. - 9:30 p. m.</span></div>
            <div class="feature-item"><i class="bi bi-credit-card"></i><span>Efectivo, transferencia y QR</span></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image-wrapper xinyang-card">
          <img src="assets/img/xinyang/xinyang-4.png" class="img-fluid hero-image" alt="Plato de restaurante Xinyang">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about" class="about section">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-6">
        <img src="assets/img/xinyang/xinyang-1.jpg" class="img-fluid rounded-4 shadow" alt="Información de ubicación de Xinyang">
      </div>
      <div class="col-lg-6">
        <div class="section-header">
          <h2>Sobre Xinyang</h2>
          <p>Un restaurante chino pensado para compartir buenos platos.</p>
        </div>
        <p>Esta página web adapta el template original a la identidad visual de Xinyang: colores rojos, elementos gráficos orientales, fotografías reales del menú y una experiencia clara para clientes que desean consultar platos, horarios, métodos de pago y datos de contacto.</p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle text-success me-2"></i>Menú administrado desde MySQL.</li>
          <li><i class="bi bi-check-circle text-success me-2"></i>Formulario de reservas/pedidos conectado a base de datos.</li>
          <li><i class="bi bi-check-circle text-success me-2"></i>Arquitectura MVC con PHP, Bootstrap 5 y MySQL.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="menu" class="menu section light-background xinyang-menu-bg">
  <div class="container section-title" data-aos="fade-up">
    <h2>Menú</h2>
    <p>Especialidades de la casa</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <?php foreach ($menuGroups as $category => $items): ?>
      <div class="mb-5">
        <h3 class="text-center mb-4 text-uppercase"><?= htmlspecialchars($category) ?></h3>
        <div class="row gy-4">
          <?php foreach ($items as $item): ?>
            <div class="col-lg-4 col-md-6">
              <div class="menu-item h-100 xinyang-menu-card">
                <img src="<?= htmlspecialchars($item['image']) ?>" class="menu-img img-fluid rounded-4" alt="<?= htmlspecialchars($item['name']) ?>">
                <div class="menu-content mt-3">
                  <a href="#"><?= htmlspecialchars($item['name']) ?></a><span>$<?= number_format((float)$item['price'], 0, ',', '.') ?></span>
                </div>
                <div class="menu-ingredients"><?= htmlspecialchars($item['description']) ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section id="book-a-table" class="book-a-table section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Reservas y pedidos</h2>
    <p>Déjanos tus datos y te contactamos</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-5">
        <img src="assets/img/xinyang/xinyang-2.jpg" class="img-fluid rounded-4 shadow" alt="Métodos de pago Xinyang">
      </div>
      <div class="col-lg-7">
        <form action="index.php?route=reservation.store" method="post" class="p-4 border rounded-4 bg-white shadow-sm">
          <div class="row gy-3">
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Nombre completo" required></div>
            <div class="col-md-6"><input type="text" name="phone" class="form-control" placeholder="Teléfono" required></div>
            <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Correo electrónico" required></div>
            <div class="col-md-6"><input type="number" name="people" min="1" max="20" class="form-control" placeholder="Número de personas" required></div>
            <div class="col-md-6"><input type="date" name="date" class="form-control" required></div>
            <div class="col-md-6"><input type="time" name="time" class="form-control" required></div>
            <div class="col-12"><textarea name="message" class="form-control" rows="4" placeholder="Escribe tu pedido, reserva o mensaje adicional"></textarea></div>
            <div class="col-12 text-center"><button type="submit" class="btn btn-primary px-5">Enviar solicitud</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section id="services" class="events section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Servicios</h2>
    <p>Opciones para disfrutar tu pedido</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-md-4"><div class="card h-100 border-0 shadow-sm"><img src="assets/img/xinyang/xinyang-3.jpg" class="card-img-top" alt="Horario"><div class="card-body"><h5>Horario de atención</h5><p>Martes a domingo de 11:00 a. m. a 9:30 p. m. Lunes de descanso, excepto festivos.</p></div></div></div>
      <div class="col-md-4"><div class="card h-100 border-0 shadow-sm"><img src="assets/img/xinyang/xinyang-8.png" class="card-img-top" alt="Combinados"><div class="card-body"><h5>Combinados</h5><p>Opciones completas como Xinyang, Wudang y Dragon Dorado para compartir.</p></div></div></div>
      <div class="col-md-4"><div class="card h-100 border-0 shadow-sm"><img src="assets/img/xinyang/xinyang-14.png" class="card-img-top" alt="Bebidas"><div class="card-body"><h5>Bebidas y adicionales</h5><p>Granizados, limonadas y adicionales para acompañar tus platos favoritos.</p></div></div></div>
    </div>
  </div>
</section>

<section id="gallery" class="gallery section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Galería</h2>
    <p>Menú visual Xinyang</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <?php foreach (['xinyang-5.png','xinyang-6.png','xinyang-7.png','xinyang-9.png','xinyang-10.png','xinyang-11.png','xinyang-12.png','xinyang-13.png'] as $img): ?>
        <div class="col-lg-3 col-md-6"><a href="assets/img/xinyang/<?= $img ?>" class="glightbox"><img src="assets/img/xinyang/<?= $img ?>" class="img-fluid rounded-4 shadow-sm" alt="Galería Xinyang"></a></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contact" class="contact section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Contacto</h2>
    <p>Visítanos o escríbenos</p>
  </div>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-5">
        <div class="contact-info p-4 bg-white rounded-4 shadow-sm h-100">
          <h4>Información</h4>
          <p><i class="bi bi-geo-alt me-2"></i>Calle 1 # 24-82, local 1 / Av. Sabanita</p>
          <p><i class="bi bi-clock me-2"></i>Martes a domingo: 11:00 a. m. - 9:30 p. m.</p>
          <p><i class="bi bi-calendar-x me-2"></i>Lunes: descanso. Lunes festivos: 11:00 a. m. - 9:30 p. m.</p>
          <p><i class="bi bi-cash-coin me-2"></i>Pagos en efectivo, transferencia y QR.</p>
        </div>
      </div>
      <div class="col-lg-7">
        <form action="index.php?route=contact.store" method="post" class="p-4 bg-white rounded-4 shadow-sm">
          <div class="row gy-3">
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Nombre" required></div>
            <div class="col-md-6"><input type="email" name="email" class="form-control" placeholder="Correo" required></div>
            <div class="col-12"><input type="text" name="subject" class="form-control" placeholder="Asunto" required></div>
            <div class="col-12"><textarea name="message" class="form-control" rows="5" placeholder="Mensaje" required></textarea></div>
            <div class="col-12 text-center"><button type="submit" class="btn btn-primary px-5">Enviar mensaje</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
