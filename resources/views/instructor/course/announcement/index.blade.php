@extends('layout.instructor.app')

@section('title','Duyurular')

@section('content')
    <main class="pt-3 mb-5">
        <div class="container-fluid">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('instructor.index')}}">Panel</a></li>
                        <li class="breadcrumb-item"><a href="{{route('instructor.course.index',['course' => $course])}}">{{ $course->name." - Crn: ".$course->id }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Duyurular</li>
                    </ol>
                </nav>
            </div>
            <livewire:show-announcements :course="$course"/>
        </div>
    </main>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Çevrimiçi Eğitim Sistemi</strong>
                <small>Az Önce</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>

        $(document).ready(function() {

                //Duyuru eklendi mesajını gösterir.
            if ('{{\Illuminate\Support\Facades\Session::exists('message')}}'){
                $('.toast-body').text('{{\Illuminate\Support\Facades\Session::pull('message')}}')
                $('.toast').toast({delay:5000})
                $('.toast').toast('show');
            }

            //Duyuru silindi mesajını gösterir.
            window.addEventListener('show-delete-alert',function (data){
                console.log(data.detail.message);
                $('.toast-body').text(data.detail.message)
                $('.toast').toast({delay:5000})
                $('.toast').toast('show');
            });

        });


    </script>
@endsection
