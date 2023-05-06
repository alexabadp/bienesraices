<?php

require 'includes/funciones.php';

incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Nuestro Blog</h1>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog1.webp" type="image/webp" />
        <source srcset="build/img/blog1.jpg" type="image/jpeg" />
        <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loading="lazy" />
      </picture>
    </div>

    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>terraza en el techo de tu casa</h4>
        <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejores materiales y ahorrando dinero
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog2.webp" type="image/webp" />
        <source srcset="build/img/blog2.jpg" type="image/jpeg" />
        <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loading="lazy" />
      </picture>
    </div>

    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guía para la decoracion de tu hogar</h4>
        <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejores materiales y ahorrando dinero
        </p>
      </a>
    </div>
  </article>
</main>

<?php
incluirTemplate('footer');
?>