{{-- <style>
  .sort{
      width: auto ;
      text-align:left ;
  }
  .sort .select{
    line-height: 1.5;
    display: inline-block!important;
    vertical-align: middle;
  }

  .sort p {
    /* line-height: 1.5; */
    padding-top:10px;
    padding-left:0px;
    display: inline-block!important;
    vertical-align: middle;
  }
</style> --}}
 <div class="blade-datatable table-responsive">
    {{-- <div class="sort">
        <p>Show</p>
        <div class="select">
            <select>
                <option value="10" selected>10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <p>Entries</p>
    </div> --}}
    <table class="table table-hover">
        <thead>
            <tr>
                @foreach ($data['heads'] as $item)
                    @if(isset($head))
                        {{ $head($item) }}
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data['records'] as $item)
                @if(isset($record))
                    {{ $record($item, $props = isset($props) ? $props : []) }}
                @endif
            @endforeach
        </tbody>
    </table>
    <div class="row blade-datatable-footer">
        <div class="blade-datatable-footer-panel">
            <div class="blade-datatable-paginate">
                <ul class="row" style="list-style: none;">
                    <li class="paginate_button previous disabled">
                        @if (isset($data['paginate']->paginationNumber[0]['page']) && $data['pageNow'] <= $data['paginate']->paginationNumber[0]['page'])
                            <a>
                        @else
                            <a href="?{{$data['key'].'-'}}page={{$data['pageNow'] - 1}}">
                        @endif
                            <i class="pg-arrow_left"></i>
                        </a>
                    </li>
                    @foreach ($data['paginate']->paginationNumber as $value)
                        @if ($value['page'] == 0)
                            <li class="paginate_button">
                                <a>{{ $value['name'] }}</a>
                        @else
                            @if ($value['page'] == $data['pageNow'])
                                <li class="paginate_button active">
                            @else
                                <li class="paginate_button">
                            @endif
                            <a href="?{{$data['key'].'-'}}page={{$value['page']}}">{{ $value['name'] }}</a>
                        @endif
                        </li>
                    @endforeach
                    <li class="paginate_button next">
                        @if ($data['pageNow'] >= $data['paginate']->pages)
                            <a>
                        @else
                            <a href="?{{$data['key'].'-'}}page={{$data['pageNow'] + 1}}">
                        @endif
                            <i class="pg-arrow_right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="blade-datatable-info">
                Showing <b>1 to {{ $data['show'] }}</b> of {{ $data['total'] }} entries
            </div>
        </div>
    </div>
</div>
