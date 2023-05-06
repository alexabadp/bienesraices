<?php

require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce sobre Nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy" />
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequuntur eum laboriosam, veritatis minima rem odit quia
        perferendis architecto ea inventore doloribus ipsa deleniti nihil
        vel pariatur cupiditate eligendi voluptate minus? Lorem ipsum dolor
        sit amet consectetur adipisicing elit. Sint quos exercitationem
        quisquam quae deleniti enim architecto autem voluptatum nobis,
        doloremque fuga quo, modi sequi? Voluptatem animi ipsam provident
        dolorem repellendus?
      </p>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla
        magni ipsam officiis doloribus recusandae nihil incidunt, quo
        mollitia laboriosam nam quos eligendi architecto deleniti modi
        consectetur, beatae quaerat inventore ea.
      </p>
    </div>
  </div>
</main>

<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>
  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis
        iste perferendis veniam facilis cumque non impedit autem itaque amet
        similique cupiditate numquam nulla dolor, adipisci reiciendis animi
        corrupti nam.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis
        iste perferendis veniam facilis cumque non impedit autem itaque amet
        similique cupiditate numquam nulla dolor, adipisci reiciendis animi
        corrupti nam.
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo " loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In officiis
        iste perferendis veniam facilis cumque non impedit autem itaque amet
        similique cupiditate numquam nulla dolor, adipisci reiciendis animi
        corrupti nam.
      </p>
    </div>
  </div>
</section>

<?php
incluirTemplate('footer');
?>