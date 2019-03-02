[{if $product->oxarticles__oxprice->value != 0 || $product->oxarticles__oxprice->value != '0'}]
	[{$smarty.block.parent}]
[{else}]
	<a class="btn btn-primary" href="[{$_productLink}]" >[{oxmultilang ident="MORE_INFO"}]</a>	
[{/if}]