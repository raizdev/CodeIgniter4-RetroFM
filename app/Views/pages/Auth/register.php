<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="content container">
   <div class="row">
      <div class="col-lg-12 col-md-12">
      </div>
      <!-- CONTENT: LEFT -->
      <div class="col-lg-8 col-md-12 content-left">
         <div class="content-box">
            <div class="content-header">
               <h1>Registreer een account</h1>
            </div>
            <div class="content-body clearfix">
               <form action="/registration/create" method="post" class="form-no-captions" autocomplete="off">
                  <input type="hidden" name="action" value="create">        
                  <div class="input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text form-habbo"></span>
                     </div>
                     <input type="text" name="username" class="form-control" placeholder="Habbonaam" autocomplete="off">
                  </div>
                  <div class="input-group">
                     <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                  </div>
                  <div class="input-group">
                     <input type="password" name="password_confirmation" class="form-control" placeholder="Password Controle" autocomplete="off">
                  </div>
                   <div class="input-group">
                     <input type="email" name="email" class="form-control" placeholder="E-mail" autocomplete="off">
                  </div>
                  <div class="cf"></div>
                  <button type="submit" class="btn btn-blue btn-rounded" style="margin: 3px 0 0 0;">Maak mijn account aan</button>
               </form>
            </div>
         </div>
      </div>
      <!-- ./CONTENT: LEFT -->
      <!-- CONTENT: RIGHT -->
      <div class="col-lg-4 col-md-12 content-right">
      </div>
      <!-- ./CONTENT: RIGHT -->
   </div>
</div>
<?= $this->endSection() ?>