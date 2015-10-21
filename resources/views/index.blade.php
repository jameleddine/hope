@extends('template')
@section('first')



<body>
    <div class="page-wrapper">

        <section class="header-11-sub bg-midnight-blue">
            <div class="background">
                &nbsp;
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 style="color:#fff;">Grow your Startup</h3>
                        <p>
                            You have the idea, we have the Hope. We’ve created the space that will help your startup to look even better.
                        </p>
                        <div class="signup-form">
                            {!!Form::open(['route'=> 'InscriptionController.store','method'=>'post']) !!}
                                <div class="form-group">
                                    <input class="form-control" id="project" type="text" placeholder="Your Project" name="titre_projet">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="mail" type="text" placeholder="Your E-mail" name="email">
                                </div>
                                <div class="form-group">
                                  
                                        <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="password" id="confirmation" class="form-control" placeholder="Confirmation" name="confirmation">
                                    </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-info">Sign Up</button>
                                </div>
                            {!!Form::close()!!} 
                        </div>
                        <div class="additional-links">
                            By signing up you agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                        <div class="player">
                            <img src="images/Brazil_002.png"/>
                            <!--<iframe src="http://www.youtube.com/embed/BCC7rFxo6QA" allowfullscreen></iframe>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-13 subscribe-form bg-turquoise">
            <div class="container">
                <div class="row">
                    <form>
                        <div class="col-sm-8">
                            <input type="text" placeholder="Enter your e-mail" spellcheck="false">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-large btn-primary" type="submit">
                                Subscribe now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Projects -->
        <!-- Liste table Project -->
        &nbsp; &nbsp; &nbsp; &nbsp;
        {!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
        <div class="row" style="margin-left:5%">
            <div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div>  
       {!!Form::close() !!} 
{!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
      <div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div> 
      {!!Form::close() !!}
{!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
<div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div> 
{!!Form::close() !!}
{!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
      <div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div> 
{!!Form::close() !!}
{!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
      <div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div> 
{!!Form::close() !!}

{!!Form::open(['route'=> 'project.store','method'=>'post']) !!}
<div class="col-md-9" style="width:auto;height:auto;">
              <div class="demo-browser">
                <h3 style="color:#fff; text-align:center;">Titre du projet</h3>
                <div class="progress" style="height: 60%;">
                    <div class="progress-bar" style="width: 39%;">1500$</div><div style="color:#1ABC9C;">&nbsp;&nbsp;2000$</div>
                </div>
                <div class="demo-browser-side">
                  <div class="demo-browser-author"><img style="border-radius:50px" src="images/tatiana-y.png"/></div>
                  <div class="demo-browser-action">
                      <a href="#" class="btn btn-danger btn-lg btn-block">More</a>
                  </div>
              </div>

              <div class="demo-browser-content">
                  <img src="images/demo/browser-pic-1.jpg" alt="" />
              </div>
          </div>          
      </div> 
  </div>
{!!Form::close() !!}

@section('js')
  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
        <script>
         var myDataRef = new Firebase('https://mtbdobklma5.firebaseio-demo.com/');
      $('#confirmation').keypress(function (e) {
        if (e.keyCode == 13) {
          var name = $('#project').val();
          var mail = $('#mail').val();
          var password = $('#password').val();
             //myDataRef.set('User ' + name + ' says ' + text);
          //myDataRef.set({name: name, text: text});
          myDataRef.push({name: name, mail: mail, password: password});
          $('#messageInput').val('');
        }
      });
      </script>
@show
</body>
@stop