{include file='header-top.tpl'}
</head>

<body>
<div class="container container-tfa">

<a id="logo-link" href="/">
            {if isset($THEME_LOGO)}
            <picture>
                <source srcset="{$THEME_LOGO_WEBP}" type="image/webp">
                <source srcset="{$THEME_LOGO}">
                <img class="logo{if isset($THEME_AL) && $THEME_AL|count_characters > 2} animated-logo{/if}" alt="logo"
                    src='{$THEME_LOGO}' />
            </picture>
            {/if}
        </a>

    <div class="card">
        <div class="card-header header-theme">{$TWO_FACTOR_AUTH}</div>
        <div class="card-body">
            <form action="" method="post">
                {if isset($ERROR)}
                <div class="alert alert-danger">
                    {$ERROR}
                </div>
                {/if}
                <p>{$TFA_ENTER_CODE}</p>
                <input type="text" class="form-control" name="tfa_code">
                <input type="hidden" name="tfa" value="true">
                <input type="hidden" name="token" value="{$TOKEN}">
                <br />
                <button type="submit" class="btn btn-theme">{$SUBMIT}</button>
            </form>
        </div>
    </div>
</div>

{include file='scripts.tpl'}
{if !isset($EXCLUDE_END_BODY)}
</body>

</html>
{/if}