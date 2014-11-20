<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 *
 */
?>

<!-- Main Menu -->
<div id="navigation" class="menu-principal">
    <div class="container">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo-header">
        <img src="<?php print $logo; ?>" alt="Coleccion Topec" />
      </a>
    <?php endif; ?>
    <?php 
    if (module_exists('i18n')) {
      $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
    } else {
      $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    }
    print drupal_render($main_menu_tree);
    ?>
    </div>
</div>
<!-- End Main Menu -->

  <?php if (theme_get_setting('breadcrumbs', 'topproject')): ?><div class="breadcrumb"><?php if ($breadcrumb): print $breadcrumb; endif;?></div><?php endif; ?>

  <?php if ($is_front): ?>
    <?php if ($page['slide_portada']): ?>
    <!-- slide-section -->
    <section id="Inicio">
      <div class="overlay"></div>
      <div class="container">
          <div id="slide-cover">
            <div id="slide-box">
              <?php print render($page['slide_portada']); ?>
            </div>
          </div>
          <div class="label-topec" >COLECCION TOPEC</div>
      </div>
    </section>
    <!-- slide-section -->
  <?php endif; ?>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <!-- header-section -->
    <section id="Header">
      <div class="overlay"></div>
      <div class="container">
        <?php print render($page['header']); ?>
      </div>
    </section>
    <!-- header-section -->
  <?php endif; ?>

  <?php if ($page['content']): ?>
  <!-- content-section -->
  <section id="Header">
    <div class="overlay"></div>
    <div class="container">
    <?php print render($page['content']); ?>
    </div>
  </section>
  <?php endif; ?>
  
  <?php if ($is_front): ?>
    <?php if ($page['coleccions']): ?>
    <!-- coleccion-section -->
    <section id="Coleccion">
      <div class="overlay"></div>
      <div class="container">
        <h3 class="titles">Coleccion</h3>
        <?php print render($page['coleccions']); ?>
      </div>
    </section>
    <!-- coleccion-section -->
    <?php endif; ?>
  <?php endif; ?>

  <?php if ($page['contact']): ?>
  <!-- content-section -->
  <section id="Contact">
    <div class="overlay"></div>
    <div class="container">
      <h3 class="titles">Contacto</h3>
      <?php print render($page['contact']); ?>
      <div class="contact-desc">
			<p>CEL.:(505) 83.75.62.73</p>
			<p>
			<a class="facebook-link" target="_blank" href="https://www.facebook.com/pages/COLECCION-TOPEC-by-Ruthbenia-Torres/50229563180">
				<img src="/sites/all/themes/topcolec/images/footer_facebook.png" alt="Facebook">
				COLECCION-TOPEC-by-Ruthbenia-Torres
			</a>
			</p>
		</div>
    </div>
  </section>
  <?php endif; ?>

<!-- Footer-section -->
  <footer id="page-footer">
    <p id="cp-text">©2014-2015 Coleccion Topec Co. All Rights Reserved.</p>
    <?php print render($page['footer']) ?>
  </footer>
  <!-- /Footer-section -->
