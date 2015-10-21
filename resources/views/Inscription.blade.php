@extends('template')
@section('first')
<hr>
<div class="container">
                <div class="row">
                    <div class="col-sm-4" style="margin:0 auto;width: 60%;position: relative;text-align: center;">
                        <center><h3>Mon Projet est: </h3>
                        <p>
                            Merci de bien remplire ces champs pour mieux comprendre vos besoins
                        </p></center>
                        <div class="signup-form">
                            {!!Form::open(['route'=> 'InscriptionController.store','method'=>'post']) !!}
                                <div class="form-group">
                                    <input class="form-control" id="project" type="text" placeholder="Your Project" name="titre_projet">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nom" name="nom">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Prenom" name="prenom">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="number" placeholder="Age" name="age">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Secteur" name="secteur">
                                </div>
                                <div class="form-group">
                                    
                                        <textarea class="form-control" placeholder="Description du projet" name="description"></textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Coût du projet" name="cout">
                                    </div>
                                     <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-info">Submit projet</button>
                                </div>
                                {!!Fotm::close()!!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<hr>
@stop