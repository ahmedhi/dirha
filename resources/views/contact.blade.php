@extends('utilisateurMaster')

@section('content')


    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4 font-weight-bold">Contact Information</h2>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">fallo@gmail.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website</span> <a href="#">www.fallo.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="/sendMail">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="nom" value="{{auth()->user()->nom}}" disabled >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email" value ="{{auth()->user()->email}}" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="sujet">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>


            </div>
        </div>
    </section>

@endsection