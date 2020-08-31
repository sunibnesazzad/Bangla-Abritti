@extends('layouts.master')

@section('content')

  <div class="row">
    
    <div class="col-md-10">
      <div class="panel panel-danger" style="padding: 30px; margin: 10px">
         <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-bottom: 0px"> আমাদের সম্পর্কে সকলের মন্তব্য :</h3>
                </div>
          </div>
      </div>
        
@foreach($comments as $comment)

   <div class="panel panel-default" style="padding: 10px; margin: 10px 10%; background: #eee">
         <div class="row">
                <div class="col-md-12" style="padding: 15px">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>{{ $comment->commented_by_name }}</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>{{ $comment->ENTRY_TIMESTAMP }}</p>
                        </div>
                        <div class="col-md-12">
                            <p>{{ $comment->COMMENT_DESC }}</p>
                        </div>

                    </div>
                </div>
                
          </div>
      </div>
   @endforeach

        <div class="row">
            <div class="text-center">
                {{ $comments->links() }}
            </div>
        </div>

        <div class="panel panel-danger" style="padding: 30px; margin: 10px">
         <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-bottom: 0px"> মন্তব্য করুন :</h3>
                </div>
          </div>
      </div>
<div class="panel panel-primary" style="padding: 30px; margin: 10px; background: #ccc">
         <div class="row">
                <div class="col-md-12 text-center">
                   <p>আপনার মন্তব্য জানাতে নিচের ফরমটি ব্যবহার করুন।</p>
                   @include('admin.inc.messages')

                    <form action="/comment/store" method="post" class="comment_form">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-sm-6 form_input" style="padding: 10px">
                          <input type="text" placeholder=" আপনার নাম " name="com_user" class="form-control" required="">
                        </div>
                        <div class="col-sm-6 form_input" style="padding: 10px">
                          <input type="email" placeholder=" আপনার ই-মেইল " name="com_user_email" class="form-control" required="">
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-sm-12 form_input" style="padding: 10px">
                          <textarea rows="5" class="form-control" placeholder="আপনার মন্তব্য " name="com_user_detail" required=""></textarea>
                        </div>
                        <div class="col-sm-12 form_input text-center" style="padding: 10px">
                          <input type="submit" value="পাঠিয়ে দিন" class="btn btn-danger btn-lg">
                        </div>
                      </div>
                    </form>


                </div>
          </div>
      </div>
   
    </div>

    <div class="col-md-2 add">
      <img src="{{ asset('assets2/img/add-horizontal.jpg') }}"style=" width: 100%">
    </div>

  </div>


    <style>
        .comment_form{
            padding: 0px 200px;
        }

        @media only screen and (max-width: 768px) {
            .comment_form{
                padding: 0px 10px;
            }
        }
    </style>

  
@endsection


  

  
  
  
    
