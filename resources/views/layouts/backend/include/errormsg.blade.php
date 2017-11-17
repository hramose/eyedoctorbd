   @if (session('errorMsg'))
     <div class="container">
        <div id="card-alert" class="card red">
              <div class="card-content white-text">
                <p><i class="mdi-alert-error"></i>  <strong>Oh snap!</strong> {{ session('errorMsg') }}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
             </button>
        </div>
    </div>
@endif