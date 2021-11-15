<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"main", 
	array(
		"IBLOCK_TYPE" => "aspro_max_catalog",
		"IBLOCK_ID" => "28",
		"HIDE_NOT_AVAILABLE" => "N",
		"BASKET_URL" => "/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "MAX_SMART_FILTER",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "IN_STOCK",
			1 => "CML2_ARTICLE",
			2 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "COLOR",
			2 => "CML2_LINK",
			3 => "",
		),
		"USE_REVIEW" => "Y",
		"MESSAGES_PER_PAGE" => "5",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"POST_FIRST_MESSAGE" => "N",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "TAGS",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "CML2_ARTICLE",
			2 => "CML2_BASE_UNIT",
			3 => "PROP_2033",
			4 => "COLOR_REF2",
			5 => "PROP_159",
			6 => "PROP_2065",
			7 => "PROP_2052",
			8 => "PROP_2053",
			9 => "PROP_2083",
			10 => "PROP_2054",
			11 => "PROP_2017",
			12 => "PROP_2026",
			13 => "PROP_2027",
			14 => "PROP_2049",
			15 => "PROP_2044",
			16 => "PROP_162",
			17 => "CML2_MANUFACTURER",
			18 => "PROP_2055",
			19 => "PROP_2069",
			20 => "PROP_2062",
			21 => "PROP_2061",
			22 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "COLOR_REF",
			2 => "SIZES",
			3 => "VOLUME",
			4 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "shows",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => "",
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"OFFERS_CART_PROPERTIES" => "",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "UF_SECTION_DESCR",
		"SHOW_SECTION_LIST_PICTURES" => "Y",
		"PAGE_ELEMENT_COUNT" => "8",
		"LINE_ELEMENT_COUNT" => "5",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "HIT",
			1 => "BRAND",
			2 => "CML2_ARTICLE",
			3 => "PROP_2104",
			4 => "CML2_ATTRIBUTES",
			5 => "FASADI",
			6 => "KORPUS",
			7 => "KOMPLECTACIA",
			8 => "DLINA",
			9 => "SHIRINA",
			10 => "VISOTA",
			11 => "GLUBINA",
			12 => "STOLESHNICA",
			13 => "ZERKALO",
			14 => "VISOTASIDENIA",
			15 => "TOLSHINA_MATRASA",
			16 => "PRUZINNIY",
			17 => "ZOSKOST",
			18 => "TIP_OBIVKI",
			19 => "MATERIAL",
			20 => "STIL_342",
			21 => "SROK_222",
			22 => "PROIZ_111",
			23 => "FASADI_111",
			24 => "PROP_159",
			25 => "PROP_284",
			26 => "PROP_2091",
			27 => "PROP_307",
			28 => "VISOTA_111",
			29 => "GLUB_111",
			30 => "PROP_335",
			31 => "ZOSKOST_111",
			32 => "TIP_OBIVKI_111",
			33 => "STOLESH_222",
			34 => "PROP_2065",
			35 => "PROP_305",
			36 => "PROP_352",
			37 => "PROP_317",
			38 => "PROP_357",
			39 => "PROP_2102",
			40 => "PROP_318",
			41 => "PROP_349",
			42 => "PROP_327",
			43 => "PROP_2052",
			44 => "PROP_370",
			45 => "PROP_336",
			46 => "PROP_2115",
			47 => "PROP_346",
			48 => "PROP_2120",
			49 => "PROP_2053",
			50 => "PROP_363",
			51 => "PROP_320",
			52 => "PROP_2089",
			53 => "PROP_325",
			54 => "PROP_2103",
			55 => "PROP_2085",
			56 => "PROP_300",
			57 => "PROP_322",
			58 => "PROP_362",
			59 => "PROP_365",
			60 => "PROP_359",
			61 => "PROP_364",
			62 => "PROP_356",
			63 => "PROP_343",
			64 => "PROP_2083",
			65 => "PROP_314",
			66 => "PROP_348",
			67 => "PROP_316",
			68 => "PROP_350",
			69 => "PROP_333",
			70 => "PROP_332",
			71 => "PROP_360",
			72 => "PROP_353",
			73 => "PROP_347",
			74 => "PROP_25",
			75 => "PROP_2114",
			76 => "PROP_301",
			77 => "PROP_2101",
			78 => "PROP_2067",
			79 => "PROP_323",
			80 => "PROP_324",
			81 => "PROP_355",
			82 => "PROP_304",
			83 => "PROP_358",
			84 => "PROP_319",
			85 => "PROP_344",
			86 => "PROP_328",
			87 => "PROP_338",
			88 => "PROP_2113",
			89 => "PROP_366",
			90 => "PROP_302",
			91 => "PROP_303",
			92 => "PROP_2054",
			93 => "PROP_341",
			94 => "PROP_223",
			95 => "PROP_283",
			96 => "PROP_354",
			97 => "PROP_313",
			98 => "PROP_2066",
			99 => "PROP_329",
			100 => "PROP_342",
			101 => "PROP_367",
			102 => "PROP_2084",
			103 => "PROP_340",
			104 => "PROP_351",
			105 => "PROP_368",
			106 => "PROP_369",
			107 => "PROP_331",
			108 => "PROP_337",
			109 => "PROP_345",
			110 => "PROP_339",
			111 => "PROP_310",
			112 => "PROP_309",
			113 => "PROP_330",
			114 => "PROP_2017",
			115 => "PROP_321",
			116 => "PROP_308",
			117 => "PROP_206",
			118 => "PROP_334",
			119 => "PROP_2100",
			120 => "PROP_311",
			121 => "PROP_2132",
			122 => "SHUM",
			123 => "PROP_361",
			124 => "PROP_326",
			125 => "PROP_2026",
			126 => "PROP_2027",
			127 => "PROP_2098",
			128 => "PROP_2122",
			129 => "PROP_24",
			130 => "PROP_2049",
			131 => "PROP_22",
			132 => "PROP_2095",
			133 => "PROP_2044",
			134 => "PROP_162",
			135 => "PROP_2055",
			136 => "PROP_2069",
			137 => "PROP_2062",
			138 => "PROP_2061",
			139 => "CML2_LINK",
			140 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "CML2_LINK",
			2 => "DETAIL_PAGE_URL",
			3 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "POPUP_VIDEO",
			2 => "MORE_PHOTO",
			3 => "COLOR_REF",
			4 => "RAZMER",
			5 => "SIZES",
			6 => "SIZES2",
			7 => "VOLUME",
			8 => "SIZES3",
			9 => "SIZES4",
			10 => "SIZES5",
			11 => "SPORT",
			12 => "",
		),
		"LIST_OFFERS_LIMIT" => "10",
		"SORT_BUTTONS" => array(
			0 => "POPULARITY",
			1 => "NAME",
			2 => "PRICE",
		),
		"SORT_PRICES" => "REGION_PRICE",
		"DEFAULT_LIST_TEMPLATE" => "block",
		"SECTION_DISPLAY_PROPERTY" => "UF_SECTION_TEMPLATE",
		"LIST_DISPLAY_POPUP_IMAGE" => "Y",
		"SECTION_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SECTION_PICTURES" => "Y",
		"SHOW_SECTION_SIBLINGS" => "Y",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "HIT",
			1 => "BRAND",
			2 => "PROP_315",
			3 => "YM_ELEMENT_ID",
			4 => "EXPANDABLES_FILTER",
			5 => "LINK_SALE",
			6 => "EXTENDED_REVIEWS_COUNT",
			7 => "ASSOCIATED_FILTER",
			8 => "EXTENDED_REVIEWS_RAITING",
			9 => "PRODUCT_SET_GROUP",
			10 => "EXPANDABLES",
			11 => "CML2_ARTICLE",
			12 => "LINK_VACANCY",
			13 => "VIDEO_YOUTUBE",
			14 => "POPUP_VIDEO",
			15 => "PROP_2104",
			16 => "BLOG_COMMENTS_CNT",
			17 => "FORUM_MESSAGE_CNT",
			18 => "vote_count",
			19 => "LINK_NEWS",
			20 => "PODBORKI",
			21 => "ASSOCIATED",
			22 => "HELP_TEXT",
			23 => "rating",
			24 => "CML2_TRAITS",
			25 => "LINK_STAFF",
			26 => "CML2_TAXES",
			27 => "LINK_BLOG",
			28 => "vote_sum",
			29 => "SALE_TEXT",
			30 => "FORUM_TOPIC_ID",
			31 => "PROP_2033",
			32 => "FAVORIT_ITEM",
			33 => "SERVICES",
			34 => "CML2_ATTRIBUTES",
			35 => "COLOR_REF2",
			36 => "STIL",
			37 => "STOLESHNICA_MAT",
			38 => "SROK",
			39 => "GARANTIYA",
			40 => "PROIZVODITEL",
			41 => "FASADI",
			42 => "KORPUS",
			43 => "VESS",
			44 => "KOMPLECTACIA",
			45 => "DLINA",
			46 => "SHIRINA",
			47 => "VISOTA",
			48 => "GLUBINA",
			49 => "STOLESHNICA",
			50 => "MECHANIZM",
			51 => "FORMA_STOLA",
			52 => "PODEMNYI",
			53 => "ZERKALO",
			54 => "VISOTASIDENIA",
			55 => "REGULIROVKA",
			56 => "TOLSHINA_MATRASA",
			57 => "PRUZINNIY",
			58 => "ZOSKOST",
			59 => "TIP_OBIVKI",
			60 => "MATERIAL",
			61 => "SBORTIKOM",
			62 => "POL",
			63 => "CVETOVAYA",
			64 => "STIL_342",
			65 => "SROK_222",
			66 => "GARANTIYA_222",
			67 => "PROIZ_111",
			68 => "FASADI_111",
			69 => "PROP_159",
			70 => "PROP_284",
			71 => "PROP_2091",
			72 => "PROP_307",
			73 => "VISOTA_111",
			74 => "GLUB_111",
			75 => "STOLESH_111",
			76 => "KORPUS_111",
			77 => "MECHANIZM_111",
			78 => "FORM_111",
			79 => "PODEMNYI_111",
			80 => "ZERKALO_111",
			81 => "PROP_335",
			82 => "STOLESH_222",
			83 => "PROP_2065",
			84 => "PROP_305",
			85 => "PROP_352",
			86 => "PROP_317",
			87 => "PROP_357",
			88 => "PROP_2102",
			89 => "PROP_318",
			90 => "PROP_349",
			91 => "PROP_327",
			92 => "PROP_2052",
			93 => "PROP_370",
			94 => "PROP_336",
			95 => "PROP_2115",
			96 => "PROP_346",
			97 => "PROP_2120",
			98 => "PROP_2053",
			99 => "PROP_363",
			100 => "PROP_320",
			101 => "PROP_2089",
			102 => "PROP_325",
			103 => "PROP_2103",
			104 => "PROP_2085",
			105 => "PROP_300",
			106 => "PROP_322",
			107 => "PROP_362",
			108 => "PROP_365",
			109 => "PROP_359",
			110 => "PROP_364",
			111 => "PROP_356",
			112 => "PROP_343",
			113 => "PROP_2083",
			114 => "PROP_314",
			115 => "PROP_348",
			116 => "PROP_316",
			117 => "PROP_350",
			118 => "PROP_333",
			119 => "PROP_332",
			120 => "PROP_360",
			121 => "PROP_353",
			122 => "PROP_347",
			123 => "PROP_25",
			124 => "PROP_2114",
			125 => "PROP_301",
			126 => "PROP_2101",
			127 => "PROP_2067",
			128 => "PROP_323",
			129 => "PROP_324",
			130 => "PROP_355",
			131 => "PROP_304",
			132 => "PROP_358",
			133 => "PROP_319",
			134 => "PROP_344",
			135 => "PROP_328",
			136 => "PROP_338",
			137 => "PROP_2113",
			138 => "PROP_366",
			139 => "PROP_302",
			140 => "PROP_303",
			141 => "PROP_2054",
			142 => "PROP_341",
			143 => "PROP_223",
			144 => "PROP_283",
			145 => "PROP_354",
			146 => "PROP_313",
			147 => "PROP_2066",
			148 => "PROP_329",
			149 => "PROP_342",
			150 => "PROP_367",
			151 => "PROP_2084",
			152 => "PROP_340",
			153 => "PROP_351",
			154 => "PROP_368",
			155 => "PROP_369",
			156 => "PROP_331",
			157 => "PROP_337",
			158 => "PROP_345",
			159 => "PROP_339",
			160 => "PROP_310",
			161 => "PROP_309",
			162 => "PROP_330",
			163 => "PROP_2017",
			164 => "PROP_321",
			165 => "PROP_308",
			166 => "PROP_206",
			167 => "PROP_334",
			168 => "PROP_2100",
			169 => "PROP_311",
			170 => "PROP_2132",
			171 => "SHUM",
			172 => "PROP_361",
			173 => "PROP_326",
			174 => "PROP_2026",
			175 => "PROP_2090",
			176 => "PROP_2027",
			177 => "PROP_2098",
			178 => "PROP_2112",
			179 => "PROP_2122",
			180 => "PROP_221",
			181 => "PROP_24",
			182 => "PROP_2134",
			183 => "PROP_23",
			184 => "PROP_2049",
			185 => "PROP_22",
			186 => "PROP_2095",
			187 => "PROP_2044",
			188 => "PROP_162",
			189 => "PROP_207",
			190 => "PROP_220",
			191 => "PROP_2094",
			192 => "PROP_2092",
			193 => "PROP_2111",
			194 => "PROP_2133",
			195 => "PROP_2096",
			196 => "PROP_2086",
			197 => "PROP_285",
			198 => "PROP_2130",
			199 => "PROP_286",
			200 => "PROP_222",
			201 => "PROP_2121",
			202 => "PROP_2123",
			203 => "PROP_2124",
			204 => "PROP_2093",
			205 => "LINK_REVIEWS",
			206 => "PROP_312",
			207 => "PROP_3083",
			208 => "PROP_2055",
			209 => "PROP_2069",
			210 => "PROP_2062",
			211 => "PROP_2061",
			212 => "RECOMMEND",
			213 => "NEW",
			214 => "STOCK",
			215 => "VIDEO",
			216 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_TEXT",
			4 => "DETAIL_PICTURE",
			5 => "DETAIL_PAGE_URL",
			6 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "COLOR_REF",
			2 => "RAZMER",
			3 => "SIZES",
			4 => "WEIGHT",
			5 => "AGE",
			6 => "SIZES2",
			7 => "RUKAV",
			8 => "FRCOLLECTION",
			9 => "FRLINE",
			10 => "VOLUME",
			11 => "FRMADEIN",
			12 => "FRELITE",
			13 => "SIZES3",
			14 => "SIZES4",
			15 => "SIZES5",
			16 => "TALL",
			17 => "FRTYPE",
			18 => "FRAROMA",
			19 => "SPORT",
			20 => "VLAGOOTVOD",
			21 => "KAPUSHON",
			22 => "FRFITIL",
			23 => "FRFAMILY",
			24 => "FRSOSTAVCANDLE",
			25 => "FRFORM",
			26 => "",
		),
		"PROPERTIES_DISPLAY_LOCATION" => "DESCRIPTION",
		"SHOW_BRAND_PICTURE" => "Y",
		"SHOW_ASK_BLOCK" => "Y",
		"ASK_FORM_ID" => "2",
		"SHOW_ADDITIONAL_TAB" => "Y",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"SHOW_KIT_PARTS" => "Y",
		"SHOW_KIT_PARTS_PRICES" => "Y",
		"LINK_IBLOCK_TYPE" => "aspro_max_content",
		"LINK_IBLOCK_ID" => "32",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "5",
		"ALSO_BUY_MIN_BUYES" => "2",
		"USE_STORE" => "Y",
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "N",
		"MIN_AMOUNT" => "10",
		"STORE_PATH" => "/contacts/stores/#store_id#/",
		"MAIN_TITLE" => "Наличие на складах",
		"MAX_AMOUNT" => "20",
		"USE_ONLY_MAX_AMOUNT" => "Y",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "sort",
		"OFFERS_SORT_ORDER2" => "asc",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"IBLOCK_STOCK_ID" => "24",
		"IBLOCK_LINK_NEWS_ID" => "23",
		"IBLOCK_SERVICES_ID" => "25",
		"IBLOCK_TIZERS_ID" => "12",
		"IBLOCK_LINK_REVIEWS_ID" => "21",
		"STAFF_IBLOCK_ID" => "18",
		"VACANCY_IBLOCK_ID" => "2",
		"SHOW_QUANTITY" => "Y",
		"SHOW_MEASURE" => "N",
		"SHOW_QUANTITY_COUNT" => "Y",
		"USE_RATING" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"DEFAULT_COUNT" => "1",
		"SHOW_HINTS" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "UF_CATALOG_ICON",
			2 => "",
		),
		"FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"TOP_ELEMENT_COUNT" => "8",
		"TOP_LINE_ELEMENT_COUNT" => "4",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "sort",
		"TOP_ELEMENT_SORT_ORDER2" => "asc",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "10",
		"SECTION_TOP_BLOCK_TITLE" => "Лучшие предложения",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR_REF",
			1 => "RAZMER",
		),
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "similar",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"VIEWED_ELEMENT_COUNT" => "20",
		"VIEWED_BLOCK_TITLE" => "Ранее вы смотрели",
		"ELEMENT_SORT_FIELD_BOX" => "name",
		"ELEMENT_SORT_ORDER_BOX" => "asc",
		"ELEMENT_SORT_FIELD_BOX2" => "id",
		"ELEMENT_SORT_ORDER_BOX2" => "desc",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"MAX_GALLERY_ITEMS" => "5",
		"SHOW_GALLERY" => "Y",
		"SHOW_PROPS" => "Y",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"SKU_DETAIL_ID" => "oid",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"AJAX_FILTER_CATALOG" => "Y",
		"AJAX_CONTROLS" => "Y",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DISPLAY_ELEMENT_SLIDER" => "10",
		"SHOW_ONE_CLICK_BUY" => "Y",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "8",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SALE_STIKER" => "SALE_TEXT",
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_RATING" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_OFFERS_LIMIT" => "0",
		"DETAIL_EXPANDABLES_TITLE" => "С этим товаром покупают",
		"DETAIL_ASSOCIATED_TITLE" => "Вам также может понравиться",
		"DETAIL_LINKED_GOODS_SLIDER" => "Y",
		"DETAIL_LINKED_GOODS_TABS" => "Y",
		"DETAIL_PICTURE_MODE" => "MAGNIFIER",
		"SHOW_UNABLE_SKU_PROPS" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"COMPATIBLE_MODE" => "Y",
		"TEMPLATE_THEME" => "blue",
		"LABEL_PROP" => "",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"USE_SALE_BESTSELLERS" => "Y",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"INSTANT_RELOAD" => "N",
		"COMPARE_POSITION_FIXED" => "Y",
		"COMPARE_POSITION" => "top left",
		"USE_RATIO_IN_RANGES" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"TOP_PROPERTY_CODE_MOBILE" => "",
		"TOP_VIEW_MODE" => "SECTION",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"LIST_PROPERTY_CODE_MOBILE" => "",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_BLOCKS_ORDER" => "complect,nabor,offers,modules,tabs,gifts,services,news,blog,staff,vacancy,goods",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"LAZY_LOAD" => "N",
		"LOAD_ON_SCROLL" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"DETAIL_DOCS_PROP" => "INSTRUCTIONS",
		"STIKERS_PROP" => "HIT",
		"USE_SHARE" => "Y",
		"TAB_OFFERS_NAME" => "",
		"TAB_DESCR_NAME" => "",
		"TAB_KOMPLECT_NAME" => "",
		"TAB_NABOR_NAME" => "",
		"TAB_CHAR_NAME" => "",
		"TAB_VIDEO_NAME" => "",
		"TAB_REVIEW_NAME" => "",
		"TAB_FAQ_NAME" => "",
		"TAB_STOCK_NAME" => "",
		"TAB_DOPS_NAME" => "",
		"BLOCK_SERVICES_NAME" => "",
		"BLOCK_DOCS_NAME" => "",
		"DIR_PARAMS" => CMax::GetDirMenuParametrs(__DIR__),
		"ELEMENT_DETAIL_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_CHEAPER_FORM" => "Y",
		"LANDING_TITLE" => "Популярные категории",
		"LANDING_SECTION_COUNT" => "10",
		"LANDING_SEARCH_TITLE" => "Похожие запросы",
		"LANDING_SEARCH_COUNT" => "7",
		"LIST_SECTIONS_TYPE_VIEW" => "sections_1",
		"LIST_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"CHEAPER_FORM_NAME" => "",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"LANDING_TYPE_VIEW" => "FROM_MODULE",
		"FILE_404" => "",
		"SHOW_MEASURE_WITH_RATIO" => "N",
		"SHOW_COUNTER_LIST" => "Y",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"SHOW_ARTICLE_SKU" => "Y",
		"USE_FILTER_PRICE" => "N",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"RESTART" => "N",
		"USE_LANGUAGE_GUESS" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"SORT_REGION_PRICE" => "BASE",
		"SHOW_SECTION_DESC" => "Y",
		"USE_ADDITIONAL_GALLERY" => "Y",
		"ADDITIONAL_GALLERY_TYPE" => "BIG",
		"ADDITIONAL_GALLERY_PROPERTY_CODE" => "PHOTO_GALLERY",
		"ADDITIONAL_GALLERY_OFFERS_PROPERTY_CODE" => "-",
		"BLOCK_ADDITIONAL_GALLERY_NAME" => "",
		"STORES_FILTER" => "TITLE",
		"STORES_FILTER_ORDER" => "SORT_ASC",
		"VIEW_BLOCK_TYPE" => "N",
		"SHOW_HOW_BUY" => "Y",
		"TITLE_HOW_BUY" => "Как купить",
		"SHOW_DELIVERY" => "Y",
		"TITLE_DELIVERY" => "Доставка",
		"SHOW_PAYMENT" => "Y",
		"TITLE_PAYMENT" => "Оплата",
		"SHOW_GARANTY" => "Y",
		"TITLE_GARANTY" => "Условия гарантии",
		"TITLE_SLIDER" => "Рекомендуем",
		"SHOW_SEND_GIFT" => "Y",
		"SEND_GIFT_FORM_NAME" => "",
		"BLOCK_LANDINGS_NAME" => "",
		"BLOG_IBLOCK_ID" => "22",
		"BLOCK_BLOG_NAME" => "",
		"RECOMEND_COUNT" => "5",
		"VISIBLE_PROP_COUNT" => "6",
		"BIGDATA_EXT" => "bigdata_1",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "Y",
		"ALT_TITLE_GET" => "NORMAL",
		"BUNDLE_ITEMS_COUNT" => "3",
		"SHOW_LANDINGS_SEARCH" => "Y",
		"SHOW_LANDINGS" => "Y",
		"LANDING_POSITION" => "BEFORE_PRODUCTS",
		"USE_DETAIL_PREDICTION" => "Y",
		"SECTION_BG" => "UF_SECTION_BG_IMG",
		"OFFER_SHOW_PREVIEW_PICTURE_PROPS" => array(
		),
		"LANDING_IBLOCK_ID" => "31",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,stores,video,reviews,buy,payment,delivery,custom_tab",
		"DETAIL_BLOCKS_ALL_ORDER" => "complect,goods,nabor,offers,modules,desc,char,buy,payment,delivery,video,stores,custom_tab,services,news,blog,reviews,staff,vacancy,gifts",
		"DELIVERY_CALC" => "Y",
		"DELIVERY_CALC_NAME" => "",
		"ASK_TAB" => "",
		"TAB_NEWS_NAME" => "",
		"TAB_STAFF_NAME" => "",
		"TAB_VACANCY_NAME" => "",
		"STAFF_VIEW_TYPE" => "staff_block",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_BUY_DELIVERY" => "Y",
		"TITLE_BUY_DELIVERY" => "Оплата и доставка",
		"BLOG_URL" => "catalog_comments",
		"SHOW_MORE_SUBSECTIONS" => "Y",
		"SHOW_SIDE_BLOCK_LAST_LEVEL" => "Y",
		"SHOW_SORT_IN_FILTER" => "N",
		"SUBSECTION_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SUBSECTION_DESC" => "Y",
		"USE_CUSTOM_RESIZE" => "N",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "sort",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "id",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "desc",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "Y",
		"MAX_IMAGE_SIZE" => "0.5",
		"BIGDATA_SHOW_FROM_SECTION" => "N",
		"LANDING_SEARCH_COUNT_MOBILE" => "3",
		"USE_BIG_DATA_IN_SEARCH" => "Y",
		"BIG_DATA_IN_SEARCH_RCM_TYPE" => "bestsell",
		"TITLE_SLIDER_IN_SEARCH" => "Возможно, вам подойдет",
		"RECOMEND_IN_SEARCH_COUNT" => "10",
		"LANDING_SECTION_COUNT_MOBILE" => "3",
		"SHOW_SMARTSEO_TAGS" => "Y",
		"SMARTSEO_TAGS_COUNT" => "10",
		"SMARTSEO_TAGS_COUNT_MOBILE" => "3",
		"TAB_BUY_SERVICES_NAME" => "",
		"COUNT_SERVICES_IN_ANNOUNCE" => "2",
		"SHOW_ALL_SERVICES_IN_SLIDE" => "Y",
		"DETAIL_SET_PRODUCT_TITLE" => "Собрать комплект",
		"DISPLAY_LINKED_PAGER" => "Y",
		"MODULES_ELEMENT_COUNT" => "10",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_ID#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>