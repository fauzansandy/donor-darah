<div class="blade-datatable table-responsive">
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
                    @foreach ($data['options'] as $option) 
                    @if($option == $data['selected'])
                        @if (isset($data['paginate']->paginationNumber[0]['page']) && $data['pageNow'] <= $data['paginate']->paginationNumber[0]['page'])
                            <a>
                        @else
                            <a href="?user-table-show={{$data['selected']}}&{{$data['key'].'-'}}page={{$data['pageNow'] - 1}}">
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
                            <a href="?user-table-show={{$data['selected']}}&{{$data['key'].'-'}}page={{$value['page']}}">{{ $value['name'] }}</a>
                        @endif
                        </li>
                    @endforeach
                    <li class="paginate_button next">
                        @if ($data['pageNow'] >= $data['paginate']->pages)
                            <a>
                        @else
                            <a href="?user-table-show={{$data['selected']}}&{{$data['key'].'-'}}page={{$data['pageNow'] + 1}}">
                        @endif
                            <i class="pg-arrow_right"></i>
                        </a>
                    </li>
                </ul>
            </div>
                @endif
            @endforeach
            <div class="blade-datatable-info">
                Showing <b>1 to {{ $data['show'] }}</b> of {{ $data['total'] }} entries
            </div>
        </div>
    </div>
</div>
