<?php ?>
<div class="ting-object-tree-page">
    <aside class="secondary-content">
        <div class="ting-object-tree-menu">
            <h2 class="sub-menu-title">
                <a href="/bog/alle/alle/alle" class="active-trail">Kategorier</a>
            </h2>
            <?php print $menu; ?> 
        </div>
    </aside>
    <div class="ting-object-tree-main">
        <div class="ting-object-tree-breadcrumb">
            <?php print $breadcrumb; ?> 
        </div>
        <div class="ting-object-tree-mobile-categories">
            <div class="ting-object-tree-expand more-link"><a href="#">Vis flere kategorier</a></div>
            <div class="ting-object-tree-mobile-menu ting-object-tree-menu" style="display:none;">
                <?php print $menu; ?> 
            </div>
        </div>
        <h2 class="pane-title"><?php print $title; ?> </h2>
        <!--        <ul class="ting-object-tree-links">
        <?php foreach ($links as $link) : ?>
                          <li class="ting-object-tree-link">
          <?php print $link; ?> 
                          </li>
            
        <?php endforeach; ?>
                </ul>-->
        <ul class="ting-object-tree">
            <?php foreach ($items as $item) : ?>
              <li class="ting-object-tree-item">
                  <?php print $item; ?> 
              </li>

            <?php endforeach; ?>
        </ul>
        <div class="ting-object-tree-pager">
            <?php print $pager; ?> 
        </div> 
    </div>
</div>
