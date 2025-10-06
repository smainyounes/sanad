
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title') Admin</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link rel="icon" href="/images/favicon.png" type="image/x-icon">
    

    @include('admin.includes.styles')

  </head>
  <body>
    <div class="wrapper">
      
      @include('admin.includes.sidebar')

      <div class="main-panel">
        
        @include('admin.includes.navbar')

        <div class="container">
          @yield('content')
        </div>

        <footer class="footer">
          <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted m-0">&copy; {{ date('Y') }} Ideal Mobili - Panneau d'administration. Tous droits réservés.</p>
            </div>
        </div>
        </footer>
      </div>

    </div>
    
    @include('admin.includes.scripts')

    <!-- confirm delete Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmer suppression</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  êtes vous sure de supprimer?
              </div>
              <form action="" method="POST" id="confirmDeleteForm">
                  @csrf
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button class="btn btn-danger">Supprimer</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
    
  </body>
</html>
