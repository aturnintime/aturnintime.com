<?php
/**
 * @file
 * Template for the Boxton layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node.)
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of CSS classes to be added to the layout wrapper.
 * - $attributes: Array of additional HTML attributes to be added to the layout
 *     wrapper. Flatten using backdrop_attributes().
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['bottom']
 *   - $content['footer']
 */
?>
<div class="layout--boxton <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>">
      <div class="l-header-inner container container-fluid">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <div class="l-wrapper">
    <div class="hp-left">
      <div class="write-up">
        At <strong>A Turn in Time</strong> we specialize in delivering value to your web presence with expert development in Backdrop CMS and Javascript.
      </div>
      <div class="services-container">
        <div class="service-wp">
          <h2 class="service-top">
            Upgrade from WordPress
          </h2>
          <div class="service-bottom">
            Hit the wall with WordPress? 
            <br/>
            <br/>
            Need more complex relationships and content views?
            <br/>
            <br/>
            <strong>A Turn in Time</strong> can migrate your data from WordPress and get you the web presence you need.
          </div>
        </div>
        <div class="service-drupal">
          <h2 class="service-top">
            Upgrade from Drupal
          </h2>
          <div class="service-bottom">
            Need to get off of Drupal 6 or 7 to a supported platform?
            <br/>
            <br/>
            Drupal 7 End of Life have you in a pinch?
            <br/>
            <br/>
            <strong>A Turn in Time</strong> can get your data and site into Backdrop CMS for continued growth and support.  
          </div>
        </div>
        <div class="service-backdrop">
          <h2 class="service-top">
            Build it with Backdrop
          </h2>
          <div class="service-bottom">
            Got your next idea planned and ready?
            <br/><br/>
            We can help you bring the content you need to your audience with a brand new Backdrop CMS website!
          </div>
        </div>
      </div>
    </div>
    <div class="hp-right">
      <h2 class="hp-cta-title">
        How can we help you?
      </h2>
      <div class="hp-cta-form">
        <?php
          $cta = backdrop_get_form('aturnintime_cta_form');
          print render($cta);
        ?>
      </div>
    </div>
  </div><!-- /.l-wrapper -->

  <?php if ($content['footer']): ?>
    <footer class="l-footer"  role="footer">
      <div class="l-footer-inner container container-fluid">
        <?php print $content['footer']; ?>
      </div><!-- /.container -->
    </footer>
  <?php endif; ?>
</div><!-- /.layout--boxton -->
