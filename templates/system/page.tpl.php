<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div id="root">
  <header class="cd-hri-header hidden-print" role="banner">
    <div class="cd-hri-global-header">
      <div class="cd-hri-container cd-hri-global-header__inner container">
        <div class="cd-hri-global-header__sites cd-hri-dropdown">
          <button type="button" class="cd-hri-global-header__sites-btn" data-toggle="dropdown" id="cd-hri-related-platforms-toggle">
            <?php print t('Related platforms'); ?>
            <i class="fa fa-caret-down" aria-hidden="true"></i>
          </button>
          <ul class="cd-hri-dropdown-menu dropdown-menu" role="menu" id="cd-hri-related-platforms" aria-hidden="true" aria-labelledby="cd-hri-related-platforms-toggle">
            <li><a href="https://fts.unocha.org/">Financial Tracking Service</a></li>
            <li><a href="https://humdata.org/">Humanitarian Data Exchange</a></li>
            <li><a href="https://humanitarian.id/">Humanitarian ID</a></li>
            <li><a href="https://reliefweb.int/">ReliefWeb</a></li>
          </ul>
        </div>
        <div class="cd-hri-global-header__nav">
          <div class="cd-hri-nav cd-hri-nav--secondary">
            <?php print render($page['top']); ?>
          </div>

        </div>
      </div>
    </div>
    <div class="cd-hri-site-header">
      <div class="cd-hri-container cd-hri-site-header__inner container">
        <a href="<?php print $front_page; ?>" class="cd-hri-site-header__logo">
          <span class="sr-only"><?php print $site_name; ?></span>
        </a>
        <div class="cd-hri-site-header__search">
          <?php print render($page['branding']); ?>
        </div>
        <?php if($main_menu_dropdown): ?>
          <div class="cd-hri-dropdown">
            <button type="button" id="cd-hri-nav-toggle" class="cd-hri-site-header__nav-toggle" data-toggle="dropdown">
              <span class="cd-hri-site-header__nav-toggle-inner" aria-hidden="true">
              </span>
              <span class="sr-only"><?php print t('Main menu') ?></span>
            </button>
            <nav role="navigation" class="cd-hri-site-header__nav dropdown-menu" aria-labelledby="cd-hri-nav-toggle">
              <ul class="cd-hri-nav cd-hri-nav--primary">
                <?php print render($main_menu_dropdown); ?>
              </ul>
            </nav>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <!-- Logo for printed pages -->
  <div class="visible-print-block pull-right">
    <?php if ($logo): ?>
      <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?> Logo" />
    <?php endif; ?>
  </div>

  <div id="main-content">
    <div id="main" class="main">
      <div class="container">

                <div id="content-wrapper" class="col-xs-12">
          <div id="page-header">
                          <div class="page-header">
                <h1 class="title">TEST Assessment_Yemen</h1>
              </div>
                                      <div class="tabs">
                <h2 class="element-invisible">Primary tabs</h2><ul class="nav nav-tabs primary"><li class="active"><a href="/node/3365" class="active">View<span class="element-invisible">(active tab)</span></a></li>
<li><a href="/node/3365/edit">Edit</a></li>
<li><a href="/node/3365/translate">Translate</a></li>
<li><a href="/node/3365/revisions">Revisions</a></li>
<li><a href="/node/3365/panelizer">Customize display</a></li>
</ul>              </div>
                                  </div>
          <div id="content" class="col-md-12">
              <div class="region region-content">
    <div id="block-system-main" class="block block-system">


  <div class="content">

<div class="panelizer-view-mode node node-full node-reg-assessment node-3365 node-promoted node-promoted">

<div class="panel-display bryant-flipped clearfix radix-bryant-flipped">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-9 radix-layouts-content panel-panel">
        <div class="panel-panel-inner">
          <div class="panel-pane pane-node-title">



  <div class="pane-content">
    <h2>TEST Assessment_Yemen</h2>
  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-subject">



  <div class="pane-content">
    <div class="field field-name-field-asst-subject field-type-text-long field-label-above"><div class="field-label">Subject/Objective:&nbsp;</div><div class="field-items"><div class="field-item even">test</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-methodology">



  <div class="pane-content">
    <div class="field field-name-field-asst-methodology field-type-text-long field-label-above"><div class="field-label">Methodology:&nbsp;</div><div class="field-items"><div class="field-item even">test</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-key-findings">



  <div class="pane-content">
    <div class="field field-name-field-asst-key-findings field-type-text-long field-label-above"><div class="field-label">Key findings:&nbsp;</div><div class="field-items"><div class="field-item even">test</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-sample-size">



  <div class="pane-content">
    <div class="field field-name-field-asst-sample-size field-type-text field-label-above"><div class="field-label">Sample size:&nbsp;</div><div class="field-items"><div class="field-item even">100</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-report">



  <div class="pane-content">
    <div class="field-collection-container clearfix"><div class="field field-name-field-asst-report field-type-field-collection field-label-above"><div class="field-label">Assessment Report:&nbsp;</div><div class="field-items"><div class="field-item even"><div class="field-collection-view clearfix view-mode-full field-collection-view-final"><div class="entity entity-field-collection-item field-collection-item-field-asst-report clearfix">
  <div class="content">
    <div class="field field-name-field-asst-accessibility field-type-list-text field-label-hidden"><div class="field-items"><div class="field-item even">Publicly Available</div></div></div><div class="field field-name-field-asst-file field-type-file field-label-inline clearfix"><div class="field-label">File:&nbsp;</div><div class="field-items"><div class="field-item even"><span class="file"><img class="file-icon" alt="PDF icon" title="application/pdf" src="/modules/file/icons/application-pdf.png"> <a href="https://assessmentregistry.hrinfo.568elmp03.blackmesh.com/sites/default/files/assessments/note_circulaire_frais_de_scolarite_sep16_rotated.pdf" type="application/pdf; length=315462">note_circulaire_frais_de_scolarite_sep16_rotated.pdf</a></span></div></div></div>  </div>
</div>
</div></div></div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-questionnaire">



  <div class="pane-content">
    <div class="field-collection-container clearfix"><div class="field field-name-field-asst-questionnaire field-type-field-collection field-label-above"><div class="field-label">Assessment Questionnaire:&nbsp;</div><div class="field-items"><div class="field-item even"><div class="field-collection-view clearfix view-mode-full field-collection-view-final"><div class="entity entity-field-collection-item field-collection-item-field-asst-questionnaire clearfix">
  <div class="content">
    <div class="field field-name-field-asst-accessibility field-type-list-text field-label-hidden"><div class="field-items"><div class="field-item even">Publicly Available</div></div></div><div class="field field-name-field-asst-file field-type-file field-label-inline clearfix"><div class="field-label">File:&nbsp;</div><div class="field-items"><div class="field-item even"><span class="file"><img class="file-icon" alt="PDF icon" title="application/pdf" src="/modules/file/icons/application-pdf.png"> <a href="https://assessmentregistry.hrinfo.568elmp03.blackmesh.com/sites/default/files/assessments/pswg-annual-report-2016_0.pdf" type="application/pdf; length=4419614">pswg-annual-report-2016.pdf</a></span></div></div></div>  </div>
</div>
</div></div></div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-data">



  <div class="pane-content">
    <div class="field-collection-container clearfix"><div class="field field-name-field-asst-data field-type-field-collection field-label-above"><div class="field-label">Assessment Data:&nbsp;</div><div class="field-items"><div class="field-item even"><div class="field-collection-view clearfix view-mode-full field-collection-view-final"><div class="entity entity-field-collection-item field-collection-item-field-asst-data clearfix">
  <div class="content">
    <div class="field field-name-field-asst-accessibility field-type-list-text field-label-hidden"><div class="field-items"><div class="field-item even">Publicly Available</div></div></div>  </div>
</div>
</div></div></div></div></div>  </div>


  </div>
        </div>
      </div>
      <div class="col-md-3 radix-layouts-sidebar panel-panel">
        <div class="panel-panel-inner">
          <div class="panel-pane pane-entity-field pane-node-field-ms-countries">



  <div class="pane-content">
    <div class="field field-name-field-ms-countries field-type-entityreference field-label-above"><div class="field-label">Countries:&nbsp;</div><div class="field-items"><div class="field-item even">Yemen</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-date">



  <div class="pane-content">
    <div class="field field-name-field-asst-date field-type-datetime field-label-above"><div class="field-label">Report Date:&nbsp;</div><div class="field-items"><div class="field-item even"><span class="date-display-range"><span class="date-display-start">01 Jun 2017</span> to <span class="date-display-end">05 Jun 2017</span></span></div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-status">



  <div class="pane-content">
    <div class="field field-name-field-asst-status field-type-list-text field-label-above"><div class="field-label">Status:&nbsp;</div><div class="field-items"><div class="field-item even">Field work completed</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-unit">



  <div class="pane-content">
    <div class="field field-name-field-asst-unit field-type-list-text field-label-above"><div class="field-label">Unit of Measurement:&nbsp;</div><div class="field-items"><div class="field-item even">Settlements</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-collection-method">



  <div class="pane-content">
    <div class="field field-name-field-asst-collection-method field-type-list-text field-label-above"><div class="field-label">Collection Method:&nbsp;</div><div class="field-items"><div class="field-item even">Unstructured Interview</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-population-types">



  <div class="pane-content">
    <div class="field field-name-field-population-types field-type-entityreference field-label-above"><div class="field-label">Population Types:&nbsp;</div><div class="field-items"><div class="field-item even">All affected population</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-ms-organizations">



  <div class="pane-content">
    <div class="field field-name-field-ms-organizations field-type-entityreference field-label-above"><div class="field-label">Leading/Coordinating Organizations:&nbsp;</div><div class="field-items"><div class="field-item even">United Nations High Commissioner for Refugees (UNHCR)</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-asst-organizations">



  <div class="pane-content">
    <div class="field field-name-field-asst-organizations field-type-entityreference field-label-above"><div class="field-label">Participating Organizations:&nbsp;</div><div class="field-items"><div class="field-item even">International Committee of the Red Cross (ICRC)</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-ms-locations">



  <div class="pane-content">
    <div class="field field-name-field-ms-locations field-type-entityreference field-label-above"><div class="field-label">Locations:&nbsp;</div><div class="field-items"><div class="field-item even">Dar Sad</div></div></div>  </div>


  </div>
<div class="panel-separator"></div><div class="panel-pane pane-entity-field pane-node-field-ms-themes">



  <div class="pane-content">
    <div class="field field-name-field-ms-themes field-type-entityreference field-label-above"><div class="field-label">Themes:&nbsp;</div><div class="field-items"><div class="field-item even">Disarmament and Demobilization</div></div></div>  </div>


  </div>
        </div>
      </div>
    </div>
  </div>

</div><!-- /.bryant-flipped -->
</div>
  </div>
</div>
  </div>
          </div>
        </div><!-- /#content-wrapper -->
      </div><!-- #container -->
    </div> <!-- /#main -->
  </div>

  <div id="main-content">
    <div id="main" class="main">
      <div class="container">
        <?php if ($messages): ?>
          <div id="messages">
            <?php print $messages; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_first'])): ?>
          <aside id="sidebar-first" class="col-md-3 hidden-print" role="complementary">
            <?php print render($page['sidebar_first']); ?>
          </aside>
        <?php endif; ?>
        <div id="content-wrapper"
          <?php if(!empty($page['sidebar_first'])) {
            print 'class="col-md-9"';
          } else {
            print 'class="col-xs-12"';
          } ?>
        >
          <div id="page-header">
            <?php if ($title): ?>
              <div class="page-header">
                <h1 class="title"><?php print $title; ?></h1>
              </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
          <div id="content" class="col-md-12">
            <?php print render($page['content']); ?>
          </div>
        </div><!-- /#content-wrapper -->
      </div><!-- #container -->
    </div> <!-- /#main -->
  </div> <!-- /#main-wrapper -->

  <div id="root_footer"></div>
</div><!-- #root -->

<footer id="footer" class="footer hidden-print" role="contentinfo">
  <div class="container">
    <div id="footer-first" class="col-md-5">
      <p><?php print t('Service provided by'); ?><a href="http://www.unocha.org" target="_blank"><img width="200" alt="OCHA logo" src="/sites/all/themes/registry/assets/images/OCHA-logoWhite-22.svg"></a></p>
    </div>
    <div id="footer-second" class="col-md-3">

    </div>
    <div id = "footer-third" class="col-md-4">
      <p><?php print t('Except where otherwise noted, content on this site is licensed under a <a href="@creativecommons">Creative Commons Attribution 4.0</a> International license.', array(
      '@creativecommons' => 'https://creativecommons.org/licenses/by/4.0/'))?></p>
    </div>
  </div>
</footer>
