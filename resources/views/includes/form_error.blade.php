@if(count($errors) > 0)

{{-- Styling za ovaj box i padding u njemu --}}
<style>

    .box {
        padding: 20px;
    }

</style>


<div class="alert alert-danger box" style="text-align: center">

    @foreach ($errors->all() as $error)

    <li>{{$error}}</li>
        
    @endforeach

</div>

@endif