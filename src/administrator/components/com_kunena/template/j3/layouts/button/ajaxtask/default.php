<?php
/**
 * Kunena Component
 * @package         Kunena.Administrator.Template
 * @subpackage      Layouts.Pagination
 *
 * @copyright       Copyright (C) 2008 - 2019 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();
$dataTarget = (isset($this->dataTarget)) ? " data-target=\"{$this->dataTarget}\"" : '';
$dataForm   = (isset($this->dataForm)) ? " data-form=\"{$this->dataForm}\"" : '';
$class      = (isset($this->class)) ? " {$this->class}" : 'btn-success';
?>
<a href="<?php echo JRoute::_($this->uri); ?>" data-toggle="ajaxmodal"<?php echo $dataTarget . $dataForm; ?>
   class="btn btn-small <?php echo $class; ?>">
	<i class="icon-apply" title="<?php echo $this->title; ?>"></i>
	<?php echo $this->title; ?>
</a>
