  {!! Former::setOption('TwitterBootstrap3.labelWidths', ['large' => 4, 'small' => 4]) !!}
        {!! Former::open_for_files(action('OrderController@update', $order->id))->id('form-edit') !!}
        {{ method_field('PUT') }}
        <!-- <fieldset> -->
        <div class="col-sm-4">
            {!! Former::text('created_at', 'Ngày yêu cầu')
                ->required()
                ->addClass('input-sm daterange')
                ->value($order->date_order->format('d/m/Y'))
                
            !!}
            {!! Former::text('number_cv', 'Số công văn yêu cầu')
                ->required()
                ->addClass('input-sm')
                ->value($order->number_cv)
            !!}
            <div class="form-group">
                <label for="unit" class="control-label col-lg-4 col-sm-4">Đơn vị yêu cầu</label>
                <div class="col-lg-8 col-sm-8">
                    <select class="form-control input-sm" id="unit" name="unit">
                        <optgroup label="Khối An ninh">
                            @foreach ($unitSecurites as $index=>$unit)
                                <option value="{{ $unit->id }}" {{ $unit->id == $order->unit_id ? "selected":""}}>{{ ucwords($unit->symbol) }}</option>
                            @endforeach
                        </optgroup>
                        <optgroup label="Khối Cảnh sát">
                            @foreach ($unitPolices as $index=>$unit)
                                <option value="{{ $unit->id }}" {{ $unit->id == $order->unit_id ? "selected":""}}>{{ ucwords($unit->symbol) }}</option>
                            @endforeach
                        </optgroup>
                    </select>
                </div>
            </div>
            {!! Former::text('number_cv_pa71', 'Số công văn PA71')
                ->required()
                ->addClass('input-sm')
                ->value($order->number_cv_pa71)
            !!}
            {!! Former::text('order_name', 'Tên đối tượng')
                ->addClass('input-sm')
                ->value($order->order_name)
            !!}
          
        </div> 

        <div class="col-sm-4">
            @foreach ($order->phones as $index => $phone)
                @if ($index < 1)
                    {!! Former::text('order_phone[]', 'Số điện thoại ĐT')
                        ->append('<i class="fa fa-plus add_phone"></i>')
                        ->required()
                        ->addClass('input-sm phone')
                        ->addGroupClass('phone_order')
                        ->value($phone->number)
                        ->id($phone->id)
                    !!}
                @else 
                    {!! Former::text('order_phone[]', '&nbsp')
                        ->append('<i class="fa fa-close"></i>')
                        ->addClass('input-sm phone')
                        ->addGroupClass('phone_order')
                        ->value($phone->number)
                        ->id($phone->id)
                    !!}
                @endif
            @endforeach
            
            {!! Former::select('category', 'Loại đối tượng')
                ->options($categories, isset($order->category_id) ? $order->category_id:"")
                ->addClass('input-sm')
            !!}
            {!! Former::select('kind')->label('Tính chất')->options($kinds, isset($order->kind_id) ? $order->kind_id:"")->addClass('input-sm') !!}
            {!! Former::select('purpose')->label('Mục đích yêu cầu')->options($purposes, $order->purpose_id)->addClass('input-sm') !!}
            {!! Former::text('date_request', 'Thời gian yêu cầu')
                ->addClass('input-sm daterange')
                ->value(isset($order->date_begin) && isset($order->date_end) ? $order->date_begin->format('d/m/Y') .'-'. $order->date_end->format('d/m/Y'):"" )
            !!}
            {!! Former::file('file','File đính kèm')->accept('doc', 'docx', 'xls', 'xlsx', 'pdf') !!}
        </div>
        <div class="col-sm-4">
            {!! Former::text('customer_name', 'Tên trinh sát')
                ->addClass('input-sm')
                ->value($order->customer_name)
            !!}
            {!! Former::text('customer_phone', 'Số điện thoại TS')
                ->append('<i class="fa fa-phone add_phone"></i>')
                ->addClass('input-sm phone')
                ->value($order->customer_phone) 
            !!}
           {!! Former::select('user', 'Người nhận yêu cầu')
                ->options($users, $order->user_id)
                ->addClass('input-sm')
            !!}
           {!! Former::textarea('comment')->label('Ghi chú') ->value($order->comment)!!}
        </div>
        <div class="form-group">
            <div class="col-lg-offset-5 col-sm-offset-5 col-lg-8 col-sm-8">
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-edit">&nbsp</i>Sửa</button>
                 <button type="reset" class="btn btn-default btn-sm"><i class="fa fa-refresh">&nbsp</i>Làm mới</button>
                 <button type="button" class="btn btn-danger btn-sm" onclick="hideForm()" ><i class="fa fa-reply">&nbsp</i>Hủy</button>
           </div>
        </div>
        <!-- </fieldset> -->
        {!! Former::close() !!}
        <script>
        function hideForm() {
            $('#form-create').show();
            $('#title-form').text('Form đăng ký');
            $('#form-edit').remove();
        }
      </script>