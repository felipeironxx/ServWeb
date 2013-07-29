        {foreach from=$funcemprlist item=r}
            <option value="{$r.id}">{$r.nome_func_empr}</option>
        {/foreach}                    
        {include file="view/teste.tpl"}