[{if $product->oxarticles__oxprice->value != 0 || $product->oxarticles__oxprice->value != '0'}]
	[{$smarty.block.parent}]	
[{/if}]