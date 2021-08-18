@extends('layouts.app')

<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->

<h1 class="display-4 mb-2 text-primary"><?php $user = auth()->user(); ?>{{$user->name}}</h1>
    <p class="lead text-muted">{{$user->moblie}}</p>

    //     $address = $request->input('address');
        // $mobliebrand = $request->input('mobliebrand');
        // $moblieproble = $request->input('moblieproble');
        // $moblieproblemother = $request->input('moblieproblemother');
        // $message = $request->input('message');
        // $data=array('id'=>$id,"address_id"=>$address,"mobliebrand"=>$mobliebrand,"moblieproblem"=>$moblieproble,"otherproble"=>$moblieproblemother);
        // DB::table('booking')->insert($data);
        // $msg=$request->session()->flash('alert-success', 'Thank you for contacting us !');
        // return redirect('/bookrepair');
        <?php $user = auth()->user(); 
      $userid=$user->id;
      $mobliestatus= CustomAuthController::mobliestatus($user->id) ;
    //   print_r($mobliestatus);
      ?>
                <h5 class="ml-2">Total Booking &nbsp;<?php 
                foreach( $mobliestatus as  $mobliestatus)
                {
                 $booktotal[]= $mobliestatus->booktoken;
                }
                // if( $booktotal){
                //   echo count($booktotal);
                // }else{
                //   echo "0";
                // }
             
                ?>

SELECT * from users INNER join booking  ON users.id=booking.id INNER join address on booking.id=address.id