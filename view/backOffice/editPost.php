<section class="editor p-4 order-2">
                <h2 class="p-3 bg-info text-white p-2 rounded"> <?= $h2 ?> </h2>

                <?php 
                    while($data = $editPost->fetch()){
                ?>

                <form action="index.php?action=change_post&id=<?= $data['id'] ?>&title=<?= $data['title'] ?>&content=<?= $data['content'] ?>&file_name=<?= $data['file_name'] ?>&file_description=<?= $data['file_description'] ?>" method="post">
                    <div class="form-group border rounded bg-white mt-4 p-2">
                        <div class="row p-2">
                            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                            <label class="m-2 p-2 col shadow rounded text-info" for="img"><i class="far fa-file-image"></i> IMAGE
                            <input type="file" class="form-control-file pt-3" id="img" name="file_name">
                            </label>

                            <label class="m-2 p-2 col shadow rounded text-info" for="alt_text">Texte alternatif à l'image
                            <input value="<?= $data['file_description'] ?>" type="text" class="form-control pt-3" id="alt_text" name="file_description" aria-describedby="altHelp">
                            </label>
                        </div>
                        <small id="altHelp" class="form-text text-muted m-2">Le texte alternatif est lu par les lecteurs d'écrans (accessibilité), s'affiche par défaut en remplacement de l'image lorsque celle-ci ne peut être affichée sur une page web, il est aussi utile pour le référencement de votre billet (SEO).</br>Image et texte alternatifs seront obligatoires pour publier le billet</small>
                    </div>
                    <div class="form-group border rounded bg-white mt-4 p-2">
                        <label class="m-2 text-info" for="title"><i class="fas fa-paragraph"></i> TITRE</label>
                        <input value="<?= $data['title'] ?>" type="text" class="form-control" id="title" name="title" placeholder="ex: 1 - Mon titre" required>

                        <label class="m-2 text-info" for="tiny_post_content"><i class="fas fa-paragraph"></i> TEXTE</label>
                        <textarea rows="20" class="form-control" name="content" id="tiny_post" autocomplete="on" minlength="1"> <?= $data['content'] ?> </textarea>
                    </div>

                <?php
                    }
                    $req->closeCursor();
                ?>

                    <input class="m-2 btn btn-success" type="submit" name="update" value="Publier la mise à jour">
                    <input class="m-2 btn btn-danger" type="submit" name="delete" value="Supprimer">
                </form>
            </section>