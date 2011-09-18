<?php if (!defined('BASEPATH')) exit(__('No direct script access allowed')); ?>
<?php $this->load->view('admin/inc/header'); ?>

<h1><?php echo __('Generate New Sitemap'); ?></h1>

<?php
    $atts = array(
    'width' => '400',
    'height' => '300',
    'scrollbars' => 'yes',
    'status' => 'yes',
    'resizable' => 'yes',
    'screenx' => '0',
    'screeny' => '0'
);

echo anchor_popup('tools/sitemap', __('Click Here to generate sitemap.'), $atts);
?>

<p><?php echo __('Once you visit above link sitemap.xml will be updated. If you want to auto update your sitemap you can run a cron to
    call the updater.'); ?></p>
<p><strong><?php echo site_url('tools/sitemap') ?></strong></p>

<?php $this->load->view('admin/inc/footer'); ?>
