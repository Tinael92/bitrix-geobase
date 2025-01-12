<?
/**
 * Company developer: REASPEKT
 * Developer: reaspekt
 * Site: https://www.reaspekt.ru
 * E-mail: info@reaspekt.ru
 * @copyright (c) 2022 REASPEKT
 */

use \Bitrix\Main\Localization\Loc;

if (!check_bitrix_sessid())
    return;

Loc::loadMessages(__FILE__);
?>
<form action="<?echo $APPLICATION->GetCurPage()?>">
    <?=bitrix_sessid_post()?>
    <input type="hidden" name="lang" value="<?echo LANG?>">
    <input type="hidden" name="id" value="reaspekt.geobase">
    <input type="hidden" name="uninstall" value="Y">
    <input type="hidden" name="step" value="2">
    <?echo CAdminMessage::ShowMessage(Loc::getMessage("MOD_UNINST_WARN"))?>
    <p><?echo Loc::getMessage("MOD_UNINST_SAVE")?></p>
    <p><input type="checkbox" name="savedata" id="savedata" value="Y" checked><label for="savedata"><?echo Loc::getMessage("MOD_UNINST_SAVE_TABLES")?></label></p>
    <input type="submit" name="" value="<?echo Loc::getMessage("MOD_UNINST_DEL")?>">
</form>
