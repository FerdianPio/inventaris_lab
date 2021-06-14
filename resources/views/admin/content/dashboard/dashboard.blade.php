@extends('admin.layout.admin')

@section('content')


<div class="panel panel-container">
    <div class="row">
        <div class="col-xs-4 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                    <div class="large">120</div>
                    <div class="text-muted">Inventaris</div>
                </div>
            </div>
        </div>
        <div  class="col-xs-4  no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                    <div class="large">52</div>
                    <div class="text-muted">Ruang</div>
                </div>
            </div>
        </div>
        <div  class="col-xs-4   no-padding">
            <div class="panel panel-orange panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                    <div class="large">24</div>
                    <div class="text-muted">Barang Habis Pakai</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
