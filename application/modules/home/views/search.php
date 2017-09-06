<div class="f_size_medium sc_header">Search Result <span onclick="close_search_div()" class="pull-right"
                                                         style="cursor: pointer;">Close <i
            class="fa fa-close"></i></span></div>
<ul class="products_list" style="height: 365px;overflow-y: scroll;">
    <?php if (count($p_list) > 0 && $p_list != null){ ?>
    <li>
        <b class="color_dark">
            
            <button onclick="<?= $p_list ?>"><?= $keyword ?></button>
            <?php } else { ?>
                <span class="scheme_color"><?= 'No Suggestions' ?></span>
            <?php } ?>
        </b>
    </li>

</ul>
<!--total price-->