<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?use \Bitrix\Main\Localization\Loc;?>
<?if($arResult['ITEMS']):?>
<section class="events">
    <div class="events__content _container">
    	<?if($arParams['TITLE_BLOCK'] || $arParams['TITLE_BLOCK_ALL']):?>
					<a href="<?=SITE_DIR.$arParams['ALL_URL'];?>"><h2 class="section__title"><?=$arParams['TITLE_BLOCK'];?></h2></a>
			<?endif;?>
        

        <div class="events__body">

            <!-- <div class="slider__nav slider__events-prev">
                <img src="<?php echo SITE_TEMPLATE_PATH ?>/images/icons/slider-prev.png" alt="#">
            </div>
            <div class="slider__nav slider__events-next">
                <img src="<?php echo SITE_TEMPLATE_PATH ?>/images/icons/slider-next.png" alt="#">
            </div> -->


            <div class="events__slider owl-carousel owl-theme owl-bg-nav appear-block loading_state short-nav hidden-dots visible-nav swipeignore"
            data-plugin-options='{"nav": true, "autoplay": false, "dots": false, "useCSS": true, "loop": true, "responsive": {"0":{"items": 1, "autoHeight": true},"601":{"items": 1, "autoHeight": true},"768":{"items": 1, "autoHeight": true},"992":{"items": 1, "autoHeight": true}, "1200":{"items": 2, "autoHeight": false}}}'>
            	<?foreach($arResult['ITEMS'] as $i => $arItem):
            	$imageSrc = ($arItem['FIELDS']['PREVIEW_PICTURE'] ? $arItem['FIELDS']['PREVIEW_PICTURE']['SRC'] : '');?>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="events__slide events-slide">
                    <div class="events-slide__img-wrap">
                        <img src="<?php echo $imageSrc; ?>" alt="#" class="events__img">
                    </div>
                    <div class="events-slide__text-wrap">
                    	<?if(strlen($arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE'])):?>
										<span class="events__date"><?=$arItem['DISPLAY_PROPERTIES']['PERIOD']['VALUE']?></span>
									<?else:?>
										<span class="events__date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></span>
									<?endif;?>
                        <span class="events__text"><?=$arItem['NAME'];?></span>
                    </div>
                </a>
                <?endforeach;?>
                

            </div>

        </div>

    </div>
</section>
<?endif;?>