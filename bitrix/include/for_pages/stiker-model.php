<?
$arModelUrl = array(
    "/Sonata/",
    "/NewSolaris/",
    "/Elantra/",
    "/Creta/",
    "/Tucson/",
    "/SantaFe/",
    "/GrandSantaFe/",
    "/H-1/",
);
if(in_array($APPLICATION->GetCurPage(), $arModelUrl)): ?>
    <div class="roadside24" style="width: 60px;">
        <a href="/service/roadside-assistance" target="_blank">
            <img src="http://www.hyundai.ru/media/img/na-svyazi.svg" />
        </a>
    </div>
<? endif; ?>