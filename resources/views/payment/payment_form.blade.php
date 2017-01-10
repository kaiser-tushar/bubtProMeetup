@extends('layouts.profile')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
<section>
    <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                    <div class="text-center intro-text">
                        <h2>Payment Confirmation</h2>
                        <hr class="star-primary">
                    </div>

                    <form name="register_yourself" id="registrationForm" novalidate action="{{url('/payment')}}" method="post">
                    {{csrf_field()}}
                            <div class="form-group">
                                <label for="type">Payment Type *</label>
                                @if ($errors->has('type'))
                                    <p class="text-danger">
                                        {{ $errors->first('type') }}
                                    </p>
                                @endif
                                <select class="form-control" id="type" name="type">
                                    <option value="0">-- Select Payment Type --</option>
                                    {{-- <option value="Cash" {{old('type')=='Cash'?'selected':''}}>Cash (By Hand)</option> --}}
                                    <option value="Bkash" {{old('type')=='Bkash'?'selected':''}}>Bkash</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="trx">Transaction ID *</label>
                                @if ($errors->has('trx'))
                                    <p class="text-danger">
                                        {{ $errors->first('trx') }}
                                    </p>
                                @endif
                                <input type="text" name="trx" id="trx" value="{{old('trx')}}" class="form-control"  placeholder="TrxID">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount You Pay *</label>
                                @if ($errors->has('amount'))
                                    <p class="text-danger">
                                        {{ $errors->first('amount') }}
                                    </p>
                                @endif
                                <input type="number" class="form-control"  value="{{old('amount')}}" name="amount" id="amount" placeholder="500">
                            </div>
                            <div class="form-group">
                                <label for="sender_number">Sender Mobile Number *</label>
                                @if ($errors->has('sender_number'))
                                    <p class="text-danger">
                                        {{ $errors->first('sender_number') }}
                                    </p>
                                @endif
                                <input type="number" class="form-control"  value="{{old('sender_number')}}" name="sender_number" id="sender_number" placeholder="From where you send the amount">
                            </div>
                            <div class="form-group">
                                <label for="receiver_number">Receiver Mobile Number *</label>
                                @if ($errors->has('receiver_number'))
                                    <p class="text-danger">
                                        {{ $errors->first('receiver_number') }}
                                    </p>
                                @endif
                                <input type="number" class="form-control"  value="{{old('receiver_number')}}" name="receiver_number" id="receiver_number" placeholder="To whom you send the amount ">
                            </div>

                            <div class="form-group">
                                <label for="DOP">Date of Payment *</label>
                                @if ($errors->has('DOP'))
                                    <p class="text-danger">
                                        {{ $errors->first('DOP') }}
                                    </p>
                                @endif
                                <div class="input-group date" data-provide="datepicker" data-date="{{date('Y-m-d')}}" data-date-format="yyyy-mm-dd">
                                    <input type="text" value="{{old('DOP')}}" class="form-control" id="DOP" name="DOP">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>

                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg pull-right" id="sbmt">Register</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
</section>
@endsection
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function(){
        $('select').select2();
    })
</script>
