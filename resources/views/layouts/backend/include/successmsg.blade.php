   @if (session('successMsg'))
    <div class="container">
        <div id="card-alert" class="card green">
            <div class="card-content white-text">
                <p><i class="mdi-navigation-check"></i> <strong>Well done!</strong> {{ session('successMsg') }}</p>
            </div>
             <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
             </button>
         </div>
    </div>
@endif