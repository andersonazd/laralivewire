<div class="row layout-top-spacing"> 
    @if ($action == 1)
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div class="widget-content-area br-4">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h5><b>Tipos de Vehículos</b></h5>
                    </div>
                </div>
            </div>
            @include('common.search')
            @include('common.alerts')
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped table-checkatle table-highlight-head mb-4">
                    <thead>
                        <tr>
                            <th class="">ID</th>
                            <th class="">DESCRIPTION</th>
                            <th class="">CREATED</th>
                            <th class="text-center">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($info as $r)
                            <tr>
                            <td><p class="bm-0">{{$r->id}}</p></td>
                            <td>{{$r->description}}</td>
                            <td>{{$r->created_at}}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
        
    @endif

</div>