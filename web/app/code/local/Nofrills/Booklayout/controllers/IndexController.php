<?php
class Nofrills_Booklayout_IndexController  extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
	{
	    $block_1 = new Mage_Core_Block_Text();
	    $block_1->setText("The first sentence");

	    $block_2 = new Mage_Core_Block_Text();
	    $block_2->setText("The second sentence");

		$main_block = new Mage_Core_Block_Template();
        $main_block->setTemplate('helloworld.phtml');
        $main_block->setChild('the_first', $block_1);
        $main_block->setChild('the_second', $block_2);

        var_dump($main_block->getTemplateFile());
        echo $main_block->toHtml();
	}

	public function helloblockAction()
	{
	    $block_1 = new Mage_Core_Block_Text();
	    $block_1->setText("The first sentence");

	    $block_2 = new Mage_Core_Block_Text();
	    $block_2->setText("The second sentence");

		$main_block = new Nofrills_Booklayout_Block_Helloworld();
        $main_block->setTemplate('helloworld.phtml');
        $main_block->setChild('the_first', $block_1);
        $main_block->setChild('the_second', $block_2);

        var_dump($main_block->getTemplateFile());
        echo $main_block->toHtml();
	}
}