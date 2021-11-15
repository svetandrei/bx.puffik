<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?if($arResult['ITEMS']):?>
	<?
	$col = (round(12/$arParams['SIZE_IN_ROW']));
	$count_item = 0;
	$count_wrap_items = 0;
	$block_classes = [
						'offer_sm',
						'offer_lg',
						'offer_lg',
						'offer_sm',
						'offer_sm',
						'offer_lg',
						'offer_lg',
						'offer_sm',
					];
	$price_classes = [
						'offer__price-fluid',
						'offer__price-left',
						'offer__price-left',
						'offer__price-fluid',
						'offer__price-fluid',
						'offer__price-left',
						'offer__price-left',
						'offer__price-fluid',
					];
	$position = ($arParams['BG_POSITION'] ? ' set-position '.$arParams['BG_POSITION'] : '');
	$bType2 = ($arParams['TYPE_BLOCK'] == 'type2');
	?>
<section class="offers">
    <div class="offers__content">
        <h2 class="section__title">Лучшие предложения</h2>

        <div class="offers__body">
        	<?foreach($arResult['ITEMS'] as $arItem)
			{
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$bUrl = (isset($arItem['DISPLAY_PROPERTIES']['URL']) && $arItem['DISPLAY_PROPERTIES']['URL']['VALUE']);
				$sUrl = ($bUrl ? $arItem['DISPLAY_PROPERTIES']['URL']['VALUE'] : '');

					$count++;
					if($count == 1) {
						echo '<div class="offers__left">';
					}
					if($count == 5) {
						echo '<div class="offers__right">';
					}
			?>
            

                <div class="offers__item <?php echo $block_classes[$count - 1]; ?>">
                    <a href="<?=$sUrl;?>"  title="<?=($arItem['PREVIEW_PICTURE']['TITLE']?$arItem['PREVIEW_PICTURE']['TITLE']:$arItem['NAME']);?>">
                        <div class="offer__img-wrap">
                            <picture><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="#" class="offer__img"></picture>
                        </div>
                        <div class="offer__price-wrap <?php echo $price_classes[$count - 1]; ?>"></div>
                        <?if($arItem['DISPLAY_PROPERTIES']['TOP_TEXT'] && $arItem['DISPLAY_PROPERTIES']['TOP_TEXT']['VALUE']):?>
                        <div class="offer__price <?php echo $price_classes[$count - 1]; ?>">
                            <span><?=$arItem['DISPLAY_PROPERTIES']['TOP_TEXT']['VALUE'];?></span>
                        </div>
                        <?endif;?>
                    </a>
                </div>

                
                <?php 
               	if($count == 4 || $count == 8) {
						echo '</div>';
				}
				if($count == 8) {
					$count = 0;
				}
                ?>
            

            
        <?php } ?>
        </div>
    </div>
</section>


<?endif;?>