<div class="row topHeader clearfix">
    <div class="span4">
    <?php echo $this->Html->image("290X80.png", array(
    "alt" => "Brownies",
    'url' => array('controller' => '/'),
)); ?>
    </div>

    <h3 class="pull-right span4 headRightCnt">" Sachin " The God Of Cricket</h3>
</div>
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li><?php echo $this->Html->link('Home', '/'); ?></li>
            <li><?php echo $this->Html->link('About', '/htmls/about_us'); ?></li>
            <li><?php echo $this->Html->link('Records', '/htmls/records'); ?></li>
            <li><?php echo $this->Html->link('Contact', '/htmls/contact'); ?></li>
            <li><?php echo $this->Html->link('Gallery', '/htmls/gallery'); ?></li>
        </ul>
    </div>
</div>