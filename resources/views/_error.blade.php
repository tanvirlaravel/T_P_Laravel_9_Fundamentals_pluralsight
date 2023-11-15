
<div class="flash-error">
    <p>There are some error in your submission</p>
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>

