@extends('layouts.backend.app')

@section('title')
    <title>Contact Message</title>
@endsection

@section('csslink')
    
@endsection

@section('content')
<!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            {{--  <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>  --}}
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Contact Massage</h5>
                <ol class="breadcrumbs">
                  <li><a href="{{ route('adminDashboard') }}">Dashboard</a>
                  </li>
                  <li class="active">Contact Message</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

     <div id="accordion-options">
            <div class="row">
              <div class="col s12 m12 l12">
                <ul class="collapsible popout collapsible-accordion" data-collapsible="accordion">
                @foreach($messages as $message)
                    <li>
                    <div class="collapsible-header"><i class="mdi-communication-forum"></i>{{  $message->subject }}</div>
                    <div class="collapsible-body">
                        <p> <strong>Name : {{ $message->name }}</strong><br>
                            Email : {{ $message->email }}<br>
                            Phone : {{ $message->phone }}<br>
                         <strong>Subject : {{ $message->subject }}</strong><br><br>
                         <strong>Description :</strong>  {{ $message->description }}<br><br>
                       <label>Send Time : {{$message->created_at}}</label></p>
                    </div>
                  </li>
                @endforeach
                  {{ $messages->links() }}
                </ul>
              </div>
@endsection

@section('jslink')
    
@endsection