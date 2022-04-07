<form class="d-flex" action="/">
    <input class="w-full p-4 rounded-full" type="Rechercher une recette" placeholder="Rechercher une recette" aria-label="Rechercher une recette" name="s" value="<?= get_search_query() ?>">
    <button class="ml-auto py-3 px-6 rounded-full text-center transition bg-fuchsia-700 md:px-12" type="submit">
        <span class="hidden text-white md:block">
            Rechercher
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
    </button>
</form>