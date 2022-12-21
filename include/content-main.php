    <div class="content content-main">

        <aside>
            <div class="return">
            <a href="?page=index">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/> </svg>   
            </a>
            </div>
            <h1>Challenge list</h1>
            <?= $list_menu ?>
        </aside>

        <article>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
            </a>
            <h1><?= $challenge_main->title ?></h1>
            <p id="description">
                <?= $challenge_main->description ?>
            </p>

            <h2>Example(s):</h2>
            <div id="exemple">
                <?= mount_exemple_content($challenge_main->exemple); ?>
            </div>

        </article>
    
    </div>