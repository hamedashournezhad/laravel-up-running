@if(session()->has('success'))
    <div>{{session('success')}}</div>
@elseif(!session()->has('success'))
    <div>Please login and then refresh this page!</div>
@endif
