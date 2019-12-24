@if($errors->any())
    @foreach($errors->all() as $error)
        <ul>
            <li>{{$error}}</li>
        </ul>
    @endforeach
@endif
<form class="px-10" method="POST" action="/admin/press" enctype="multipart/form-data">
    @csrf
    <div class="field">
        <input id="image" class="file-input" type="file" name="imagepath" value="{{old('imagepath')}}">


    </div>
    <div class="field">
        <textarea name="headline" type="text"></textarea>
    </div>
    <div class="field">
        <input name="url" type="text">
    </div>

    <button class="std-btn" type="submit">Submit</button>
</form>