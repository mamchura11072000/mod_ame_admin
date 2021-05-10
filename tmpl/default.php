<?php
 /**
 * @package ame_admin
 * @author Alexandr Mamchur (mamchur.a@bk.ru)
 * @version 1.0.0
 * @copyright 2021 by JoomLine (http://www.joomline.net)
 * @license GNU General Public License version 2 or later;
 *
*/
$doc = JFactory::getDocument();
$doc->addScript("https://i.ame.im/users_widget/base/ame.js");
$id_widget = $params['id_widget'];
?>



<!-- ame.im-->
<script src='https://i.ame.im/users_widget/base/ame.js'></script>
<script>ameChatSiteObject.init("<?php echo $id_widget?>");</script>
<!-- /ame.im-->



