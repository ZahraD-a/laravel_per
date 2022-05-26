
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vos informations  a été enregistrer avec succés !</div>
                  <div class="card-body">

                    <div>nom</div>
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif
                   {!! $content !!}
               </div>
           </div>
       </div>
   </div>
</div>
