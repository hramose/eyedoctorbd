@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="container">
        <div id="card-alert" class="card red">
              <div class="card-content white-text">
                <p><i class="mdi-alert-error"></i>  <strong>Oh snap!</strong> {{ $error }}</p>
              </div>
              <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
             </button>
        </div>
    </div>
    @endforeach
@endif