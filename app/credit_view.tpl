{extends file="../templates/main.tpl"}

{block name= content}

<section>
    <h4> Kalkulator Kredytowy </h4>
    <form method = "post" action = "{$conf -> app_url}/app/calc_credit.php">
        <div class = "row uniform 50%">
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "amount" value = "" placeholder = "Wysokość Kredytu"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "percentage" value = "" placeholder = "Oprocentowanie"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "years" value = "" placeholder = "Na ile lat"/>
            </div>
            <div class = "12u$">
				<ul class = "actions">
                    <input type = "submit" class = "button special big" value = "Oblicz"/>
                </ul>
            </div>
        </div>
    </form>
<section>

<section>
    {if $msgs -> isError()}
        <h4> Wystąpiły błędy: </h4>
        <div calss = "row">
            <div class = "12u$">
                <ul class = "alt">
                    {foreach $msgs -> getErrors() as $err}
                        <li> {$err} </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    {/if}
</section>

<section>
    {if $msgs -> isInfo()}
        <h4> Informacje: </h4>
        <div calss = "row">
            <div class = "12u$">
                <ul class = "alt">
                    {foreach $msgs -> getInfos() as $inf}
                        <li> {$inf} </li>
                    {/foreach}
                </ul>
            </div>
        </div>
    {/if}
</section> 
            
<section>
    {if isset($result -> result)}
        <h5> Wynik: </h5>
        {$result -> result}
    {/if}
</section>

{/block}