<div class="ed-container margin-vertic">
    <div class="ed-item desde-tablet tablet-50 ">
        <img class="base-100" src="<?php echo BASE_URL ?>resource/images/web/nosotros.jpg">
    </div>
    <div class="ed-item base-100 tablet-50">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3">
                        <a href="#test1" class="active grey-text darken-4"><?php echo $about->titulo_mision ?></a>
                    </li>
                    <li class="tab col s3"><a class="grey-text  darken-4" href="#test2">
                            <?php echo $about->titulo_vision ?></a>
                    </li>
                    <li class="tab col s3">
                        <a class="grey-text text-grey darken-4" href="#test3">Politicas de Calidad</a>
                    </li>
                </ul>
            </div>
            <div id="test1" class="col s12"><?php echo $about->mision ?></div>
            <div id="test2" class="col s12"><?php echo $about->vision ?></div>
            <div id="test3" class="col s12">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Eius esse ipsum nam ratione suscipit voluptate voluptatibus. Dolorum, ipsam vero!
                Adipisci dignissimos eos est ipsam nesciunt nulla possimus quo repellendus ut?</div>
        </div>
    </div>
</div>
