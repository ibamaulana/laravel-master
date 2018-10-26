@extends('layouts.backend.app')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ $title }}</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li class="active">{{ $title }}</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales different chart widgets -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="white-box">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="box-title m-l-10 m-t-5">MANAGE Product</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a data-toggle="modal" data-target="#modalCreate" class="formButton" data-modal='{"formtype":"create"}'><button type="button" class="btn btn-info btn-rounded m-r-10"><i class="ti-plus"></i> Create Product</button></a>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <div class="text-center" id="load-data">
                                <img src="{{ url('image/load.gif') }}" height="200px">
                            </div>
                            <div id="tabel-data">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.modal.master')
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2018 &copy; Laravel Content Management System </footer>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
    function getTabel(url,datas,type){
        $.ajax({
            url: url,
            data: datas,
            type: type,
            beforeSend: function(){
                $('#load-data').css('display','block');
                $('#tabel-data').css('display','none');
            },
            success: function(data){
                $('#load-data').css('display','none');
                $('#tabel-data').css('display','block');
                $('#tabel-data').html(data);
            }
        });
    }
    $(document).ready(function() {
        getTabel('{{ route('panel.product.tabel') }}',[],'GET');
        //on click jquery
        $('.formButton').on('click',function(){
            var data = $(this).data('modal');
            $.ajax({
                url: '{{ route('panel.product.form') }}',
                data: data,
                type: 'GET',
                beforeSend: function(){
                    $('.modal-title').html('Create Product');
                    $('.load-data').css('display','block');
                    $('.form-data').css('display','none');
                },
                success: function(data){
                    $('.load-data').css('display','none');
                    $('.form-data').css('display','block');
                    $('.form-data').html(data);
                }
            });
        });
        $('#delete-user').on('click',function(){
            $.ajax({
                url: '',
                data: {
                    id : dataid
                },
                type: 'GET',
                beforeSend: function(){
                    $('.load-delete').css('display','block');
                    $('.form-delete').css('display','none');
                },
                success: function(data){
                    $('.load-delete').css('display','none');
                    $('.form-delete').css('display','block');
                    $('#modalDelete').modal('hide');
                    $('#alert-success').css('display','block');
                    getTabel('',[],'GET');
                    return true;
                }
            });
        });
    });
</script>
@endpush