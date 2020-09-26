    <section class="last bg-white rounded w-75 mx-auto home_article">
        <h2 class="font-weight-bold mt-5 p-3 text-center text-white ombre bg-dark rounded"><i class="fas fa-feather-alt mr-2" aria-hidden="true"></i> <?= $h2 ?> </h2>
        <?php
            while($data = $showLastPost->fetch()){
        ?>
            <article class="rounded p-3">
                <h3 class="text-center m-3"> <?= $data['title'] ?> </h3>
                <div class="p-3 row">
                    <img src="public/img/<?= $data['file_name'] ?>" class="img-fluid col-12 col-md-6 mx-auto mb-2" alt="<?= $data['file_description'] ?>" />
                    <p class="col-12">
                        <?= '<i class="fas fa-quote-left fa-2x mr-2"></i>' . ' ' . substr($data['content'], 0, 700) . '...' ?>
                        <a href="index.php?action=viewPost&id=<?= $data['id'] ?>" class="ml-2 btn btn-info btn-sm">Lire la suite</a>
                    </p>
                </div>
            </article>
        <?php  
            }
            $showLastPost->closeCursor();
        ?>
    </section>
        
    <section class="p-3 mt-4 mx-auto home">
        <div>
            <img class="img-fluid jean" src="public/img/jean.jpg" alt="Photo en noir et blanc de Jean Forteroche lisant sous un parapluie" />
        </div>
        <h4 class="cinzel font-weight-bold"> <?= $h4 ?> </h4>
        <p class="font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, autem perferendis obcaecati perspiciatis expedita, voluptate quod mollitia omnis exercitationem enim esse illum porro asperiores architecto! Velit corporis cum facere aliquid, fugit dolorum quos nisi! Explicabo, reiciendis? Earum vel nam expedita maxime quos fugit sapiente eligendi, quis quisquam? Ut cupiditate voluptas, natus et repudiandae ipsa magni dolor deserunt corporis, tempora in necessitatibus quis, temporibus labore! Beatae, tenetur ex consectetur nihil atque eveniet pariatur possimus sapiente, ducimus ipsam quos architecto?</p>
        <p class="cinzelD font-weight-bold">JEAN FORTEROCHE</p>
    </section>

<!-- end div wrapper -->
</div>