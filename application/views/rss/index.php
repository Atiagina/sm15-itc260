<?php
//views/rss/view.php
$this->load->view($this->config->item('theme') . 'header');
?>
<div id="main">
<?php foreach ($rss->channel->item as $rss_item): ?>
    <h3><?php echo $rss_item->title ?></h3>
    <div>
        <?php echo $rss_item->description ?>
    </div>
    <p><a href="<?php echo $rss_item->link ?>">View article</a></p>
<?php endforeach ?>

</div><!-- end of #main -->

   <?php
    $this->load->view($this->config->item('theme') . 'footer');
?>