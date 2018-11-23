@include('inc.headre')
<div class="container">
    <div class="panel panel-success col-md-12">
        <div class="panel-heading"> enregistrement</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="{{url('/insert')}}" enctype="multipart/form-data">

                        <div class="col-md-6">
                            {{csrf_field()}}

                                @if(count($errors) > 0)
                                    @foreach($errors ->all() as $error)
                                        <div class="alert alert-danger">
                                            {{$error}}
                                        </div>

                                    @endforeach

                                @endif


                                <div class="form-group">

                                    <div class="col-lg-12">
                                        <label>Dénomination *</label>
                                        <input type="text" name="den" class="form-control" id="inputEmail" placeholder="Nom de l'hotel" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label>Adresse*</label>
                                        <textarea name="adr" class="form-control" placeholder="Adresse" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label>Ville*</label>
                                        <textarea name="vil" class="form-control" placeholder="ville" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <label>Commune*</label>
                                        <textarea name="com" class="form-control" placeholder="commune" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-lg-12">
                                        <label>Email *</label>
                                        <input type="mail" name="ema" class="form-control" id="inputEmail" placeholder="l'adresse mail" required>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-lg-12">
                                        <label>Téléphone *</label>
                                        <input type="telephone" name="tel" class="form-control" id="inputEmail" placeholder="Numéro de téléphone" required>
                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <textarea name="des" class="form-control" placeholder="dDescription de l'hotel"></textarea>
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Type:</label>
                                    <select name="type" id="type" class="form-control " style="width: 100%;">
                                        <option value="1">Trouvez un restaurant</option>
                                        <option value="2">Trouvez un hotel</option>
                                        <option value="3">Trouvez une salle de fete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label>Photo1</label>
                                    <input type="file" name="photo1" accept="image/*" class="form-control" value="{{csrf_token()}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label>Photo2</label>
                                    <input type="file" name="photo2" accept="image/*" class="form-control"value="{{csrf_token()}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <label>Photo3</label>
                                    <input type="file" name="photo3" accept="image/*" class="form-control" value="{{csrf_token()}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <a href="{{url('/')}}" class="btn btn-primary">Retour</a>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>

                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@include('inc.footer')
