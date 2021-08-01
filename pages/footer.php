<div class="container">
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="titleFooter">
        <h1>adipisc <br> ng elit</h1>
      </div>
      <div class="modalBlock">
        <a href="#" data-bs-toggle="modal" data-bs-target="#modalPolitica">Politica de Privacidade</a>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="formBlock">
        <form method="post">
          <div class="form-group">
            <label for="formNome">Nome Completo</label>
            <input type="text" class="form-control" id="formNome" name="nomeCompleto">
          </div>
          <div class="form-group">
            <label for="formEmail">E-mail</label>
            <input type="email" class="form-control" id="formEmail" name="emailUser">
          </div>
          <div class="form-group">
            <label for="formCelular">Celular</label>
            <input type="text" class="form-control" id="formCelular" name="celularUser">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Estou de acordo com as <a href="#" data-bs-toggle="modal" data-bs-target="#modalPolitica">politicas</a>
              </label>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" onClick="validar()">Enviar Agora >></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalPolitica" tabindex="-1" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="labelModal">Politica de Privacidade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere hic nostrum quia amet ad, assumenda, eveniet sint totam itaque adipisci ea illum neque aliquam qui culpa ducimus inventore ipsam? Tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere hic nostrum quia amet ad, assumenda, eveniet sint totam itaque adipisci ea illum neque aliquam qui culpa ducimus inventore ipsam? Tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere hic nostrum quia amet ad, assumenda, eveniet sint totam itaque adipisci ea illum neque aliquam qui culpa ducimus inventore ipsam? Tempora.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere hic nostrum quia amet ad, assumenda, eveniet sint totam itaque adipisci ea illum neque aliquam qui culpa ducimus inventore ipsam? Tempora.</p>
      </div>
    </div>
  </div>
</div>