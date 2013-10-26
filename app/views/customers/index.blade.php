@extends('templates/sidebar')

@section('scripts')
$('#customers').dataTable();

$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
function tooltip_placement(context, source) {
var $source = $(source);
var $parent = $source.closest('table')
var off1 = $parent.offset();
var w1 = $parent.width();

var off2 = $source.offset();
var w2 = $source.width();

if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
return 'left';
}
@stop

@section('content')

<div class="table-responsive">
    <table id="customers" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Created At</th>
        </tr>
        </thead>

        <tbody>
        @foreach($customers as $customer)

        <tr>

            <td>{{{ $customer->first_name }}} {{{ $customer->last_name }}}</td>
            <td><a href="{{ URL::action('CustomerController@show', array($customer->id)) }}">{{{ $customer->username
                    }}}</a></td>
            <td>{{{ $customer->email }}}</td>
            <td>{{{ $customer->created_at }}}</td>

        </tr>


        @endforeach
        </tbody>

    </table>
</div>

@stop