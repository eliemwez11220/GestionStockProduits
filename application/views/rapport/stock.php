<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rapport de produits en stock</h3>
              <div class="box-tools">
                  <a href="<?php echo site_url('dashboard/viewReport/stock'); ?>" class="btn btn-success btn-sm" onclick="print();">
                  IMPRIMER CE RAPPORT</a>
              </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">
                <table class="table-sm table table-striped table-condensed">
                    <tr>
                        <th>#</th>
                        <th>Libelle Produit</th>
                        <th>Quantite Stock</th>
                        <th>Categorie</th>
                        <th>Date MAJ</th>
                    </tr>
                    <?php $count=1; foreach($all_intrants as $t){ ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $t->libelle; ?></td>
                            <td><?php echo $t->qte_stock; ?></td>
                            <td><?php echo $t->categorie_sid ?></td>
                            <td><?php echo $t->date_ajout ?></td>
                          
                        </tr>
                    <?php } ?>
                </table>
            </div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
