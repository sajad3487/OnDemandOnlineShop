@extends('layouts.cDashboardTemplate')
@section('content')
    <div class="container">
        <!-- Sidebar Area Starts -->
        <!-- Sidebar Area Ends -->

        <!-- Content Area Starts -->
        <div class="app-todo">
            <div class="content-area content-right">

                <div class="app-wrapper">
                    <div class="card card card-default scrollspy border-radius-6 fixed-width">

                        <div class="card-content p-0 pb-1">
                            <div class="todo-header">
                                <h5 class="ml-4">لیست علاقه مندی ها</h5>
                                <div class="list-content">
                                    <a class="waves-effect waves-light btn-small" href="{{url('wishList/create')}}"><i class="material-icons left">note_add</i>اضافه کردن لینک</a>
                                </div>
                            </div>

                            <ul class="collection todo-collection">
                                @foreach(\Illuminate\Support\Facades\Auth::user()->wishList as $wishes)

                                    <li class="collection-item todo-items">

                                        <div class="list-left">
                                            <label>
                                                <input type="checkbox" name="foo"/>
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-title-area">
                                                <div class="list-title">{{$wishes->link}}</div>
                                            </div>
                                            <div class="list-desc">{{$wishes->description}}</div>
                                        </div>
                                        <form action="{{url("wishList/$wishes->id/delete")}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="list-right btn-flat ">
                                                <div class="delete-task p-0"><i class="material-icons red-text p-0">delete</i>
                                                </div>
                                            </button>

                                        </form>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Area Ends -->


        <!-- Add new todo popup Ends-->


    </div>
    <div class="content-overlay"></div>
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-todo.min.css')}}">

@endsection
