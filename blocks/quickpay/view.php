<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="<?=$paypalEmail?>">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="item_name" value="<?=$productDesc?>">
    <?php if($mode=="fixed"){?>
    <input type="hidden" name="amount" value="<?=$productPrice?>">
    <?php } else{ ?>
    <div class="form-group">
        <label><?=t('Enter Amount:')?></label>
        <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control" name="amount">
            <span class="input-group-addon">.00</span>
        </div>
    </div>
    <?php } ?>
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest"><img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    <?php if($mode=="fixed"){?>
    <button class="btn btn-primary"><?=$fixedLabel?> ($<?=$productPrice?>)</button>
    <?php } else{ ?>
    <button class="btn btn-primary"><?=$donateLabel?></button>    
    <?php } ?>
</form>

