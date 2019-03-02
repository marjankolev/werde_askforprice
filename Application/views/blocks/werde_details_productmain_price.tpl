[{if $oDetailsProduct->oxarticles__oxprice->value == 0 || $oDetailsProduct->oxarticles__oxprice->value == '0'}]
<div class="hidden">
  [{$oViewConf->getHiddenSid()}] 
  <input type="hidden" name="fnc" value="sendEmail"/>
  <input type="hidden" name="cl" value="werde_email"/>
</div> 
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="z-index:1000;">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"> [{ oxmultilang ident='WERDE_ASKFORPRICE_TITLE' }]</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fa fa-user prefix grey-text"></i>&nbsp;<label data-error="wrong" data-success="right" for="form34">[{ oxmultilang ident='WERDE_ASKFORPRICE_YOUR_NAME' }]</label>
          <input type="text" id="form34" name="editval[name]" class="form-control validate" value="[{$oxcmp_user->oxuser__oxfname->value}] [{$oxcmp_user->oxuser__oxlname->value}]">
          
        </div>

        <div class="md-form mb-5">  
          <i class="fa fa-envelope prefix grey-text"></i>&nbsp;<label data-error="wrong" data-success="right" for="form29">[{ oxmultilang ident='WERDE_ASKFORPRICE_YOUR_EMAIL' }] </label>
          <input type="email" id="form29" name="editval[email]" class="form-control validate" value="[{$oxcmp_user->oxuser__oxusername->value}]">
          
        </div>

        <div class="md-form mb-15">
          <i class="fa fa-tag prefix grey-text"></i>&nbsp;<label data-error="wrong" data-success="right" for="form32">[{ oxmultilang ident='WERDE_ASKFORPRICE_YOUR_SUBJECT' }]</label>
          <input type="text" id="form3332" name="editval[subject]" class="form-control validate" value="[{$oDetailsProduct->oxarticles__oxartnum->value}] - [{$oDetailsProduct->oxarticles__oxtitle->value}]">
          
        </div>

        <div class="md-form">
          <i class="fa fa-pencil prefix grey-text"></i>&nbsp;<label data-error="wrong" data-success="right" for="form8">[{ oxmultilang ident='WERDE_ASKFORPRICE_YOUR_MESSAGE' }]</label>
          <textarea type="text" id="form8" name="editval[message]" class="md-textarea form-control" rows="4" value=""></textarea>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="submit"class="btn btn-unique">[{ oxmultilang ident='WERDE_ASKFORPRICE_SEND' }] </button><i class="fa fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">[{oxmultilang ident='WERDE_ASKFORPRICE_ASK_FOR_PRICE_BUTTON'}]</a>
</div><br>
</form>
[{else}]
 [{oxhasrights ident="SHOWARTICLEPRICE"}]
    [{if $oDetailsProduct->getPrice()}]  
      <p class="price">
        [{assign var="sFrom" value=""}]
        [{assign var="oPrice" value=$oDetailsProduct->getPrice()}]
           [{if $oDetailsProduct->isParentNotBuyable() }]
              [{assign var="oPrice" value=$oDetailsProduct->getVarMinPrice()}]
               [{if $oDetailsProduct->isRangePrice() }]
                 [{assign var="sFrom" value="PRICE_FROM"|oxmultilangassign}]
               [{/if}]
           [{/if}]
        <span>[{$sFrom}] [{oxprice price=$oPrice currency=$currency}]</span>
      </p>
           [{/if}]                        
  [{/oxhasrights}]
[{/if}]







  






  