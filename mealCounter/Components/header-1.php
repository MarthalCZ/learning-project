<header class="header--logged-in">
    <a class="logo" href="index">
        <img class="logo__image" src="views/resources/images/logo.png" alt="Logo">
        <h1 class="logo__title" aria-label="title">MealCounter</h1>
    </a>
    <nav class="nav" role="navigation">
        <menu class="nav__main-menu" aria-label="Hlavní menu">
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-meal-plan">Můj jídelníček</a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-meals">Moje jídla</a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="my-ingredients">Moje Ingredience</a></li>
            <li class="nav__main-menu-item"><a class="global-button global-button--menu" href="meal-counter">Počítadlo jídel</a></li>
        </menu>
        <menu class="nav__account-menu" aria-label="Menu účtu">
            <li class="nav__account-menu-item"><a class="global-button global-button--menu" href="my-account">Můj účet</a></li>
            <li class="nav__account-menu-item"><a class="global-button global-button--menu" href="logout">Odhlásit</a>
            </li>
        </menu>
    </nav>
    <menu class="switches" aria-label="Menu módu a jazyka">
        <label class="global-switch" for="mode" aria-label="Přepnout denní / noční mód">
            <input class="global-switch__input" id="mode" name="mode" type="checkbox">
            <div class="global-switch__slider"></div>
        </label>
        <label class="global-switch" for="lang" aria-label="Přepnout český / anglický jazyk">
            <input class="global-switch__input" id="lang" name="lang" type="checkbox">
            <div class="global-switch__slider"></div>
        </label>
    </menu>
</header>