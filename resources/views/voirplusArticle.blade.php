




 @extends('utilisateurMaster')
 @section('contentutil')


     <img src ="profil/images/nutri.jpg" width="100%" height="550xp" >
     <footer class="ftco-footer ftco-bg-dark ftco-section">
         <div class="container px-md-5">
             <div class="row mb-5">
                 <div class="col-md">
                     <div class="ftco-footer-widget mb-4 ml-md-4">
                         <h2 class="ftco-heading-2">Informations Personnels </h2>
                         <ul class="list-unstyled categories">

                             <li>Type de Compte :

                             </li>

                         </ul>
                     </div>
                 </div>
                 <div class="col-md">

                             <div class="ftco-footer-widget mb-4">
                                 <h2 class="ftco-heading-2">Métabolisme</h2>
                                 <ul class="list-unstyled categories">
                                     {{ $articles->article_id}}<br>
                                     {{ $articles->partenaire_id }}<br>
                                     {{ $articles->title }}<br>
                                     {{ $articles->source }}<br>
                                     {{ $articles->description }}<br>{{ $articles->categorie }}
                                 </ul>
                             </div>

                 </div>
                 <div class="col-md">
                     <div class="ftco-footer-widget mb-4">
                         @auth()
                             @if( auth()->user()->type === 2 or auth()->user()->type === 3)
                                 <h2 class="ftco-heading-2">Comment vous rejoindre</h2>
                                 <div class="block-23 mb-3">
                                     <ul>
                                         <li><span class="icon icon-map-marker"></span><span class="text">{{auth()->user()->pays}}</span></li>
                                         <li><span class="icon icon-phone"></span><span class="text">{{auth()->user()->tel}}</span></li>
                                         <li><span class="icon icon-envelope"></span><span class="text">{{auth()->user()->email}}</span></li>
                                     </ul>
                                 </div>
                             @endif

                         @endauth
                     </div>
                 </div>

             </div>
         </div>
     </footer>


 @endsection


