<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true );?>
<?if($arResult['SECTIONS']):?>
<section class="popular">
    <div class="popular__content">
    	<?if($arParams['TITLE_BLOCK'] || $arParams['TITLE_BLOCK_ALL']):?>
        <h2 class="section__title"><?=$arParams['TITLE_BLOCK'];?></h2>
        <?endif;?>
        <?$count = 0;
        $cats = [];
        foreach($arResult['SECTIONS'] as $arSection):
        $count++; 

        $cats[] = [

        	'title' => $arSection['NAME'],
        	'link' => $arSection['SECTION_PAGE_URL'],
        	'img' => $arSection["PICTURE"]["SRC"],

        ];

        if($count == 7) {
        	break;
        }
        endforeach;?>
        <div class="popular__body">

            <div class="popular__left">

                <div class="popular__col">
                    <div class="popular__item">
                        <a href="<?php echo $cats[0]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[0]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _light _top">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[0]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="popular__item">
                        <a href="<?php echo $cats[1]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[1]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _dark _top">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[1]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="popular__col">
                    <div class="popular__item">
                        <a href="<?php echo $cats[2]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[2]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _dark _bottom">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[2]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="popular__item">
                        <a href="<?php echo $cats[3]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[3]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _dark _bottom">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[3]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="popular__right">

                <div class="popular__col">
                    <div class="popular__item _lg">
                        <a href="<?php echo $cats[4]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[4]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _light _top">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[4]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="popular__col">
                    <div class="popular__item">
                        <a href="<?php echo $cats[5]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[5]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _dark _bottom">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[5]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="popular__item">
                        <a href="<?php echo $cats[6]['link']; ?>">
                            <div class="popular__img">
                                <img src="<?php echo $cats[6]['img']; ?>" alt="#" class="_img">
                            </div>
                            <div class="popular__title-wrap _light _top">
                                <div class="popular__title-bg"></div>
                                <div class="popular__title">
                                    <span><?php echo $cats[6]['title']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
<?endif;?>