<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Tableau de bord
            </h1>
        </div>
        <div class="row row-cards">
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            0%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h3 m-0"><?= isset($nb_visites_com) ? $nb_visites_com : 0 ?></div>
                        <div class="text-muted">Visites
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-red">
                            0%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h3 m-0"><?= isset($nb_candidats_com_presentiel) ? $nb_candidats_com_presentiel : 0 ?></div>
                        <div class="text-muted">Inscrits en présentiel
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-red">
                            0%
                            <i class="fe fe-chevron-down"></i>
                        </div>
                        <div class="h3 m-0"><?= isset($nb_candidats_com_ligne) ? $nb_candidats_com_ligne : 0 ?></div>
                        <div class="text-muted">Inscrits en ligne
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            0%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h3 m-0"><?= isset($nb_affilies_com_presentiel) ? $nb_affilies_com_presentiel : 0 ?></div>
                        <div class="text-muted">Affiliés présentiel
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            0%
                            <i class="fe fe-chevron-up"></i>
                        </div>
                        <div class="h3 m-0"><?= isset($nb_affilies_com_ligne) ? $nb_affilies_com_ligne : 0 ?></div>
                        <div class="text-muted">Affiliés en ligne
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row row-cards">
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            F CFA
                        </div>
                        <div class="h3 m-0"><?= isset($commission) ? number_format($commission, 0, '', ' ') : 0 ?></div>
                        <div class="text-muted">Commission
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            F CFA
                        </div>
                        <div class="h3 m-0"><?= isset($bonus) ? number_format($bonus, 0, '', ' ') : 0 ?></div>
                        <div class="text-muted">Bonus
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            F CFA
                        </div>
                        <div class="h3 m-0"><?= isset($retrait) ? number_format($retrait, 0, '', ' ') : 0 ?></div>
                        <div class="text-muted">Retraits
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3">
                <div class="card">
                    <div class="card-body p-2 text-center">
                        <div class="text-right text-green">
                            F CFA
                        </div>
                        <div class="h3 m-0"><?= isset($solde) ? number_format($solde, 0, '', ' ') : 0 ?></div>
                        <div class="text-muted">Solde
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ajout de la zone champ de saisi du retrait -->
        <div class="row">
            <div style="width: 50%;" class="card-body">
                <?= form_open('commercial/traitement_retrait') ?>
                <h1 class="page-title">Faites un retrait</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Entrez le montant</label>
                            <input class="form-control" name="montant" type="number" default="5000" min="5000" step="100" placeholder="montant" required />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Entrez votre numero mobile money</label>
                            <input class="form-control" name="numero" oninvalid="this.setCustomValidity('Saisissez un numero valide')" type="tel" pattern="^0(66|74|77|65|60|62)\d{6}" placeholder="numero mobile money" required />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-3">
                        <div class="form-group">
                            <label class="form-label">&nbsp;</label>
                            <input type="submit" class="form-control bg-primary text-white cursor-pointer" value="Valider" />
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>